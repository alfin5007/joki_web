<flux:sidebar sticky collapsible="mobile" class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
    <flux:sidebar.nav>
        <flux:sidebar.item icon="home" href="/dashboard" wire:navigate>Dashboard</flux:sidebar.item>
        <flux:sidebar.item icon="briefcase" href="/services" wire:navigate>Layanan</flux:sidebar.item>
        <flux:sidebar.item icon="shopping-cart" href="/orders" wire:navigate>Pesanan</flux:sidebar.item>
        <flux:sidebar.item icon="users" href="/users" wire:navigate>Pengguna</flux:sidebar.item>
        
        <div class="my-4 border-t border-zinc-300 dark:border-zinc-700"></div>
        
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="flex w-full items-center gap-2 p-2 text-red-600 hover:bg-red-50 dark:text-red-400 dark:hover:bg-red-900/20 rounded-md">
                <flux:icon.arrow-right-start-on-rectangle />
                Log out
            </button>
        </form>
    </flux:sidebar.nav>
</flux:sidebar>