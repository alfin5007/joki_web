<flux:sidebar sticky collapsible="mobile" class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
    <flux:sidebar.header>
        <x-app-logo :sidebar="true" href="{{ route('dashboard') }}" wire:navigate />
        <flux:sidebar.collapse class="lg:hidden" />
    </flux:sidebar.header>

    <flux:sidebar.nav>
        <flux:sidebar.group heading="Platform">
            <flux:sidebar.item icon="home" :href="route('dashboard')" :current="request()->routeIs('dashboard')" wire:navigate>
                Dashboard
            </flux:sidebar.item>

            <flux:sidebar.item icon="rectangle-stack" :href="route('services.index')" :current="request()->routeIs('services.index')" wire:navigate>
                Kategori Layanan
            </flux:sidebar.item>

            <flux:sidebar.item icon="briefcase" :href="route('services.manage')" :current="request()->routeIs('services.manage')" wire:navigate>
                Manajemen Layanan
            </flux:sidebar.item>
            
            <flux:sidebar.item icon="shopping-cart" href="/orders" :current="request()->is('orders*')" wire:navigate>
                Pesanan
            </flux:sidebar.item>

            <flux:sidebar.item icon="users" href="/users" :current="request()->is('users*')" wire:navigate>
                Pengguna
            </flux:sidebar.item>
        </flux:sidebar.group>
    </flux:sidebar.nav>

    <flux:spacer />

    <flux:sidebar.nav>
        <flux:sidebar.item icon="arrow-right-start-on-rectangle" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
            <form method="POST" action="{{ route('logout') }}" class="hidden">@csrf</form>
            {{ __('Log out') }}
        </flux:sidebar.item>
    </flux:sidebar.nav>

    <x-desktop-user-menu class="hidden lg:block" :name="auth()->user()->name" />
</flux:sidebar>