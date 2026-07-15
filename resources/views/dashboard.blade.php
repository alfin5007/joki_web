@php
    $totalServices = \App\Models\Service::count();
    $totalCategories = \App\Models\ServiceCategory::count();
    $totalOrders = \App\Models\Order::count();
    $totalUsers = \App\Models\User::count();

    $recentServices = \App\Models\Service::with('category')->latest()->take(5)->get();
    $recentOrders = \App\Models\Order::latest()->take(5)->get();

    $totalRevenue = \App\Models\Order::where('status_pembayaran', 'lunas')->sum('harga_awal');
    $pendingVerification = \App\Models\Order::where('status_pembayaran', 'menunggu_konfirmasi')->count();

    $stats = [
        [
            'label' => 'Total Pesanan',
            'value' => $totalOrders,
            'desc' => 'Total order terdaftar',
            'icon' => 'shopping-cart',
            'gradient' => 'from-sky-400 to-blue-600',
            'bg' => 'bg-sky-50 dark:bg-sky-950/30',
            'text' => 'text-sky-600 dark:text-sky-400',
        ],
        [
            'label' => 'Total Pendapatan',
            'value' => 'Rp ' . number_format($totalRevenue, 0, ',', '.'),
            'desc' => 'Dari order berstatus lunas',
            'icon' => 'banknotes',
            'gradient' => 'from-emerald-400 to-teal-600',
            'bg' => 'bg-emerald-50 dark:bg-emerald-950/30',
            'text' => 'text-emerald-600 dark:text-emerald-400',
        ],
        [
            'label' => 'Verifikasi Bayar',
            'value' => $pendingVerification,
            'desc' => 'Bukti bayar menunggu validasi',
            'icon' => 'check-badge',
            'gradient' => 'from-amber-400 to-orange-500',
            'bg' => 'bg-amber-50 dark:bg-amber-950/30',
            'text' => 'text-amber-600 dark:text-amber-400',
        ],
        [
            'label' => 'Layanan Aktif',
            'value' => $totalServices,
            'desc' => 'Layanan joki terdaftar',
            'icon' => 'briefcase',
            'gradient' => 'from-violet-400 to-purple-600',
            'bg' => 'bg-violet-50 dark:bg-violet-950/30',
            'text' => 'text-violet-600 dark:text-violet-400',
        ],
    ];
@endphp

<x-layouts::app>
    <div class="flex h-full w-full flex-1 flex-col gap-6">

        {{-- ── TOP GRID: Hero + Stat Cards ────────────────────────── --}}
        <div class="grid gap-4 lg:grid-cols-5 lg:items-stretch">

            {{-- Hero Banner --}}
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 px-6 py-8 text-white shadow-lg lg:col-span-2">
                <div class="pointer-events-none absolute -right-10 -top-10 size-48 rounded-full bg-white/10 blur-2xl"></div>
                <div class="pointer-events-none absolute -bottom-8 -left-8 size-40 rounded-full bg-white/10 blur-2xl"></div>

                <div class="relative flex h-full flex-col justify-between gap-4">
                    <div>
                        <p class="text-sm font-medium text-white/85">Selamat datang kembali 👋</p>
                        <h1 class="mt-1 text-2xl font-bold tracking-tight text-white">{{ auth()->user()->name }}</h1>
                        <p class="mt-2 text-sm text-white/75">
                            {{ now()->translatedFormat('l, d F Y') }}<br class="hidden sm:inline">
                            <span class="hidden sm:inline">&mdash; </span>Portal Layanan &amp; Manajemen Joki Web
                        </p>
                    </div>
                    <div>
                        <flux:badge color="lime" class="font-semibold">● Sistem Aktif</flux:badge>
                    </div>
                </div>
            </div>

            {{-- Stat Cards --}}
            <div class="grid grid-cols-2 gap-3 lg:col-span-3">
                @foreach ($stats as $stat)
                    <flux:card class="group relative overflow-hidden p-3 transition-all duration-300 hover:shadow-md hover:-translate-y-0.5">
                        <div class="absolute inset-x-0 top-0 h-[3px] bg-gradient-to-r {{ $stat['gradient'] }} rounded-t-xl"></div>

                        <div class="flex items-center gap-3 pt-1">
                            <div class="flex size-9 shrink-0 items-center justify-center rounded-lg {{ $stat['bg'] }}">
                                <flux:icon :icon="$stat['icon']" class="size-4 {{ $stat['text'] }}" />
                            </div>

                            <div class="min-w-0">
                                <p class="truncate text-[10px] font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400">
                                    {{ $stat['label'] }}
                                </p>
                                <p class="text-xl font-bold tabular-nums leading-tight">
                                    {{ $stat['value'] }}
                                </p>
                            </div>
                        </div>
                    </flux:card>
                @endforeach
            </div>
        </div>

        {{-- ── BOTTOM SECTION ───────────────────────────────────────── --}}
        <div class="grid gap-6 lg:grid-cols-5">

            {{-- Recent Orders --}}
            <div class="lg:col-span-3">
                <flux:card class="h-full">
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <flux:heading size="lg">Pesanan Terbaru</flux:heading>
                            <flux:subheading class="text-xs">5 data pesanan joki terbaru masuk</flux:subheading>
                        </div>
                        <flux:button variant="ghost" size="sm" icon="arrow-right" href="/orders" wire:navigate>
                            Lihat semua
                        </flux:button>
                    </div>

                    <flux:table>
                        <flux:table.columns>
                            <flux:table.column class="w-12"><span class="flex justify-center w-full">No</span></flux:table.column>
                            <flux:table.column>Klien</flux:table.column>
                            <flux:table.column>Layanan</flux:table.column>
                            <flux:table.column>Total Harga</flux:table.column>
                            <flux:table.column>Waktu</flux:table.column>
                        </flux:table.columns>
                        <flux:table.rows>
                            @forelse ($recentOrders as $order)
                                <flux:table.row>
                                    <flux:table.cell>
                                        <span class="flex justify-center w-full font-medium text-zinc-500 dark:text-zinc-400">{{ $loop->iteration }}</span>
                                    </flux:table.cell>
                                    <flux:table.cell class="font-medium text-zinc-900 dark:text-white">
                                        {{ $order->nama_klien }}
                                    </flux:table.cell>
                                    <flux:table.cell>
                                        {{ $order->layanan }}
                                    </flux:table.cell>
                                    <flux:table.cell class="font-semibold text-zinc-900 dark:text-white">
                                        Rp {{ number_format($order->harga_awal, 0, ',', '.') }}
                                    </flux:table.cell>
                                    <flux:table.cell class="text-xs text-zinc-500">
                                        {{ $order->created_at->diffForHumans() }}
                                    </flux:table.cell>
                                </flux:table.row>
                            @empty
                                <flux:table.row>
                                    <flux:table.cell colspan="5">
                                        <div class="py-6 text-center text-sm text-zinc-400">Belum ada pesanan terdaftar.</div>
                                    </flux:table.cell>
                                </flux:table.row>
                            @endforelse
                        </flux:table.rows>
                    </flux:table>
                </flux:card>
            </div>

            {{-- Recent Services --}}
            <div class="lg:col-span-2">
                <flux:card class="h-full">
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <flux:heading size="lg">Layanan Terbaru</flux:heading>
                            <flux:subheading class="text-xs">Layanan yang baru ditambahkan</flux:subheading>
                        </div>
                        <flux:button variant="ghost" size="sm" icon="arrow-right" :href="route('services.manage')" wire:navigate>
                            Kelola
                        </flux:button>
                    </div>

                    <flux:table>
                        <flux:table.columns>
                            <flux:table.column class="w-12"><span class="flex justify-center w-full">No</span></flux:table.column>
                            <flux:table.column>Nama Jasa</flux:table.column>
                            <flux:table.column>Harga Dasar</flux:table.column>
                        </flux:table.columns>
                        <flux:table.rows>
                            @forelse ($recentServices as $service)
                                <flux:table.row>
                                    <flux:table.cell>
                                        <span class="flex justify-center w-full font-medium text-zinc-500 dark:text-zinc-400">{{ $loop->iteration }}</span>
                                    </flux:table.cell>
                                    <flux:table.cell class="font-medium">
                                        {{ Str::limit($service->name, 20) }}
                                    </flux:table.cell>
                                    <flux:table.cell class="text-emerald-600 dark:text-emerald-400 text-sm font-semibold">
                                        Rp {{ number_format($service->base_price, 0, ',', '.') }}
                                    </flux:table.cell>
                                </flux:table.row>
                            @empty
                                <flux:table.row>
                                    <flux:table.cell colspan="3">
                                        <div class="py-6 text-center text-sm text-zinc-400">Belum ada layanan.</div>
                                    </flux:table.cell>
                                </flux:table.row>
                            @endforelse
                        </flux:table.rows>
                    </flux:table>
                </flux:card>
            </div>

        </div>
    </div>
</x-layouts::app>