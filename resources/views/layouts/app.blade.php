<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
<head>
    @include('partials.head')
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800 antialiased font-sans">
    
    <flux:sidebar stashable sticky class="border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
        <flux:sidebar.toggle class="lg:hidden" />
        
        <flux:navlist variant="sidebar">
            <flux:navlist.item icon="home" href="{{ route('dashboard') }}" :current="request()->routeIs('dashboard')" wire:navigate>
                Dashboard
            </flux:navlist.item>
            
            <flux:navlist.item icon="briefcase" href="{{ route('services.index') }}" :current="request()->routeIs('services.*')" wire:navigate>
                Layanan
            </flux:navlist.item>
            
            <flux:navlist.item icon="shopping-bag" href="{{ route('orders.index') }}" :current="request()->routeIs('orders.*')" wire:navigate>
                Pesanan
            </flux:navlist.item>
            
            <flux:navlist.item icon="users" href="{{ route('users.index') }}" :current="request()->routeIs('users.*')" wire:navigate>
                Pengguna
            </flux:navlist.item>

            <div class="my-2 border-t border-zinc-200 dark:border-zinc-700"></div>

            <form method="POST" action="{{ route('logout') }}" class="w-full">
                @csrf
                <flux:navlist.item 
                    as="button"
                    type="submit"
                    icon="arrow-right-start-on-rectangle" 
                    class="w-full text-left text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 cursor-pointer"
                >
                    Keluar / Logout
                </flux:navlist.item>
            </form>
        </flux:navlist>
    </flux:sidebar>

    <flux:main>
        {{-- Mendukung Livewire (slot) dan Blade standar (yield) --}}
        @hasSection('content')
            @yield('content')
        @else
            {{ $slot ?? '' }}
        @endif
    </flux:main>

    @fluxScripts
</body>
</html>