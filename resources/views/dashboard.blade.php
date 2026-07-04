@php
    $totalServices = \App\Models\Service::count();
    $totalCategories = \App\Models\ServiceCategory::count();
    $totalOrders = \App\Models\Order::count();
    $totalUsers = \App\Models\User::count();

    $recentServices = \App\Models\Service::with('category')->latest()->take(5)->get();
    $recentUsers = \App\Models\User::latest()->take(5)->get();

    $stats = [
        [
            'label' => 'Layanan & Jasa',
            'value' => $totalServices,
            'desc' => 'Total layanan aktif',
            'icon' => 'briefcase',
            'gradient' => 'from-orange-400 to-rose-500',
            'bg' => 'bg-orange-50 dark:bg-orange-950/30',
            'text' => 'text-orange-600 dark:text-orange-400',
        ],
        [
            'label' => 'Total Pesanan',
            'value' => $totalOrders,
            'desc' => 'Total order terdaftar',
            'icon' => 'shopping-bag',
            'gradient' => 'from-sky-400 to-blue-600',
            'bg' => 'bg-sky-50 dark:bg-sky-950/30',
            'text' => 'text-sky-600 dark:text-sky-400',
        ],
        [
            'label' => 'Kategori Layanan',
            'value' => $totalCategories,
            'desc' => 'Kategori klasifikasi jasa',
            'icon' => 'tag',
            'gradient' => 'from-violet-400 to-purple-600',
            'bg' => 'bg-violet-50 dark:bg-violet-950/30',
            'text' => 'text-violet-600 dark:text-violet-400',
        ],
        [
            'label' => 'Total Pengguna',
            'value' => $totalUsers,
            'desc' => 'Pengguna terdaftar',
            'icon' => 'users',
            'gradient' => 'from-emerald-400 to-teal-600',
            'bg' => 'bg-emerald-50 dark:bg-emerald-950/30',
            'text' => 'text-emerald-600 dark:text-emerald-400',
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
                        <p class="mt-2 text-sm text-white/85 leading-relaxed">
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

            {{-- Recent Services --}}
            <div class="lg:col-span-3">
                <flux:card class="h-full">
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <flux:heading size="lg">Layanan Terbaru</flux:heading>
                            <flux:subheading class="text-xs">5 layanan yang baru ditambahkan</flux:subheading>
                        </div>
                        <flux:button variant="ghost" size="sm" icon="arrow-right" :href="route('services.index')" wire:navigate>
                            Lihat semua
                        </flux:button>
                    </div>

                    <flux:table>
                        <flux:table.columns>
                            <flux:table.column>Layanan</flux:table.column>
                            <flux:table.column>Harga Dasar</flux:table.column>
                            <flux:table.column>Kategori</flux:table.column>
                            <flux:table.column>Status</flux:table.column>
                        </flux:table.columns>
                        <flux:table.rows>
                            @forelse ($recentServices as $service)
                                <flux:table.row>
                                    <flux:table.cell>
                                        <div class="flex items-center gap-3">
                                            <div class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-orange-400 to-rose-500">
                                                <flux:icon.briefcase class="size-4 text-white" />
                                            </div>
                                            <span class="font-medium">{{ Str::limit($service->name, 22) }}</span>
                                        </div>
                                    </flux:table.cell>
                                    <flux:table.cell class="text-zinc-500 text-sm">
                                        Rp {{ number_format($service->base_price, 0, ',', '.') }}
                                    </flux:table.cell>
                                    <flux:table.cell>
                                        @if ($service->category)
                                            <flux:badge size="sm" color="zinc">{{ $service->category->name }}</flux:badge>
                                        @else
                                            <span class="text-zinc-400 text-xs">—</span>
                                        @endif
                                    </flux:table.cell>
                                    <flux:table.cell>
                                        @if ($service->is_active)
                                            <flux:badge size="sm" color="green" inset="top bottom">Aktif</flux:badge>
                                        @else
                                            <flux:badge size="sm" color="zinc" inset="top bottom">Non-aktif</flux:badge>
                                        @endif
                                    </flux:table.cell>
                                </flux:table.row>
                            @empty
                                <flux:table.row>
                                    <flux:table.cell colspan="4">
                                        <div class="py-6 text-center text-sm text-zinc-400">
                                            Belum ada layanan yang ditambahkan.
                                        </div>
                                    </flux:table.cell>
                                </flux:table.row>
                            @endforelse
                        </flux:table.rows>
                    </flux:table>
                </flux:card>
            </div>

            {{-- Recent Users --}}
            <div class="lg:col-span-2">
                <flux:card class="h-full">
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <flux:heading size="lg">Pengguna Terbaru</flux:heading>
                            <flux:subheading class="text-xs">5 pengguna yang baru mendaftar</flux:subheading>
                        </div>
                    </div>

                    <div class="flex flex-col divide-y divide-zinc-100 dark:divide-zinc-800">
                        @forelse ($recentUsers as $user)
                            <div class="flex items-start gap-3 py-3 first:pt-0 last:pb-0">
                                <div class="mt-1.5 size-2 shrink-0 rounded-full bg-gradient-to-br from-sky-400 to-blue-600"></div>
                                <div class="min-w-0 flex-1">
                                    <div class="flex items-center justify-between">
                                        <p class="truncate text-sm font-medium leading-snug">{{ $user->name }}</p>
                                        <flux:badge size="sm" color="zinc" class="capitalize">{{ $user->role ?? 'User' }}</flux:badge>
                                    </div>
                                    <p class="mt-0.5 text-xs text-zinc-400">
                                        {{ $user->email }} &bull; {{ $user->created_at->diffForHumans() }}
                                    </p>
                                </div>
                            </div>
                        @empty
                            <div class="py-6 text-center text-sm text-zinc-400">
                                Belum ada pengguna terdaftar.
                            </div>
                        @endforelse
                    </div>
                </flux:card>
            </div>

        </div>
    </div>
</x-layouts::app>