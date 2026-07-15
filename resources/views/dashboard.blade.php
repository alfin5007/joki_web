@php
    $totalServices = \App\Models\Service::count();
    $totalOrders = \App\Models\Order::count();
    $recentServices = \App\Models\Service::latest()->take(5)->get();
    $recentOrders = \App\Models\Order::latest()->take(5)->get();
    $totalRevenue = \App\Models\Order::where('status_pembayaran', 'lunas')->sum('harga_awal');
    $pendingVerification = \App\Models\Order::where('status_pembayaran', 'menunggu_konfirmasi')->count();

    $stats = [
        ['label' => 'Total Pesanan', 'value' => $totalOrders, 'desc' => 'Total order terdaftar', 'icon' => 'shopping-cart', 'gradient' => 'from-sky-400 to-blue-600', 'bg' => 'bg-sky-50 dark:bg-sky-950/30', 'text' => 'text-sky-600 dark:text-sky-400'],
        ['label' => 'Total Pendapatan', 'value' => 'Rp ' . number_format($totalRevenue, 0, ',', '.'), 'desc' => 'Dari order berstatus lunas', 'icon' => 'banknotes', 'gradient' => 'from-emerald-400 to-teal-600', 'bg' => 'bg-emerald-50 dark:bg-emerald-950/30', 'text' => 'text-emerald-600 dark:text-emerald-400'],
        ['label' => 'Verifikasi Bayar', 'value' => $pendingVerification, 'desc' => 'Bukti bayar menunggu validasi', 'icon' => 'check-badge', 'gradient' => 'from-amber-400 to-orange-500', 'bg' => 'bg-amber-50 dark:bg-amber-950/30', 'text' => 'text-amber-600 dark:text-amber-400'],
        ['label' => 'Layanan Aktif', 'value' => $totalServices, 'desc' => 'Layanan joki terdaftar', 'icon' => 'briefcase', 'gradient' => 'from-violet-400 to-purple-600', 'bg' => 'bg-violet-50 dark:bg-violet-950/30', 'text' => 'text-violet-600 dark:text-violet-400'],
    ];
@endphp

<x-layouts::app>
    <div class="flex h-full w-full flex-1 flex-col gap-6">
        {{-- TOP GRID --}}
        <div class="grid gap-4 lg:grid-cols-5 lg:items-stretch">
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 px-6 py-8 text-white shadow-lg lg:col-span-2">
                <div class="relative flex h-full flex-col justify-between gap-4">
                    <div>
                        <p class="text-sm font-medium text-white/85">Selamat datang kembali 👋</p>
                        <h1 class="mt-1 text-2xl font-bold tracking-tight text-white">{{ auth()->user()->name }}</h1>
                    </div>
                    <div><flux:badge color="lime" class="font-semibold">● Sistem Aktif</flux:badge></div>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-3 lg:col-span-3">
                @foreach ($stats as $stat)
                    <flux:card class="group relative overflow-hidden p-3">
                        <div class="absolute inset-x-0 top-0 h-[3px] bg-gradient-to-r {{ $stat['gradient'] }}"></div>
                        <div class="flex items-center gap-3 pt-1">
                            <div class="flex size-9 shrink-0 items-center justify-center rounded-lg {{ $stat['bg'] }}">
                                <flux:icon :icon="$stat['icon']" class="size-4 {{ $stat['text'] }}" />
                            </div>
                            <div>
                                <p class="text-[10px] font-semibold uppercase text-zinc-500">{{ $stat['label'] }}</p>
                                <p class="text-xl font-bold">{{ $stat['value'] }}</p>
                            </div>
                        </div>
                    </flux:card>
                @endforeach
            </div>
        </div>

        {{-- BOTTOM SECTION --}}
        <div class="grid gap-6 lg:grid-cols-5">
            {{-- Recent Orders --}}
            <div class="lg:col-span-3">
                <flux:card class="h-full">
                    <flux:heading size="lg" class="mb-4">Pesanan Terbaru</flux:heading>
                    <flux:table>
                        <flux:table.columns>
                            <flux:table.column>No</flux:table.column>
                            <flux:table.column>Klien</flux:table.column>
                            <flux:table.column>Layanan</flux:table.column>
                            <flux:table.column>Harga</flux:table.column>
                        </flux:table.columns>
                        <flux:table.rows>
                            @foreach ($recentOrders as $order)
                                <flux:table.row>
                                    <flux:table.cell>{{ $loop->iteration }}</flux:table.cell>
                                    <flux:table.cell>{{ $order->nama_klien }}</flux:table.cell>
                                    <flux:table.cell>{{ $order->layanan }}</flux:table.cell>
                                    <flux:table.cell>Rp {{ number_format($order->harga_awal, 0, ',', '.') }}</flux:table.cell>
                                </flux:table.row>
                            @endforeach
                        </flux:table.rows>
                    </flux:table>
                </flux:card>
            </div>

            {{-- Recent Services --}}
            <div class="lg:col-span-2">
                <flux:card class="h-full">
                    <flux:heading size="lg" class="mb-4">Layanan Terbaru</flux:heading>
                    <flux:table>
                        <flux:table.columns>
                            <flux:table.column>Nama Jasa</flux:table.column>
                            <flux:table.column>Harga</flux:table.column>
                        </flux:table.columns>
                        <flux:table.rows>
                            @foreach ($recentServices as $service)
                                <flux:table.row>
                                    <flux:table.cell>{{ $service->name }}</flux:table.cell>
                                    <flux:table.cell>Rp {{ number_format($service->base_price, 0, ',', '.') }}</flux:table.cell>
                                </flux:table.row>
                            @endforeach
                        </flux:table.rows>
                    </flux:table>
                </flux:card>
            </div>
        </div>
    </div>
</x-layouts::app>