<?php # [BlazeFolded]:{flux::sidebar.toggle}:{/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/sidebar/toggle.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::navlist}:{/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/navlist/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::sidebar}:{/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/sidebar/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::main}:{/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/main.blade.php}:{1776985208} ?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>" class="dark">
<head>
    <?php echo $__env->make('partials.head', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
</head>
<body class="min-h-screen bg-white dark:bg-zinc-800 antialiased font-sans">
    
    <?php ob_start(); ?><?php $__blaze->pushData(['stashable' => true, 'sticky' => true, 'class' => 'border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900']); $__env->pushConsumableComponentData(['stashable' => true, 'sticky' => true, 'class' => 'border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900']); ?><ui-sidebar-toggle class="z-20 fixed inset-0 bg-black/10 hidden data-flux-sidebar-on-mobile:not-data-flux-sidebar-collapsed-mobile:block" data-flux-sidebar-backdrop></ui-sidebar-toggle>

<ui-sidebar
    class="[grid-area:sidebar] z-1 flex flex-col gap-4 [:where(&amp;)]:w-64 p-4 data-flux-sidebar-collapsed-desktop:w-14 data-flux-sidebar-collapsed-desktop:px-2 data-flux-sidebar-collapsed-desktop:cursor-e-resize rtl:data-flux-sidebar-collapsed-desktop:cursor-w-resize max-lg:data-flux-sidebar-cloak:hidden data-flux-sidebar-on-mobile:data-flux-sidebar-collapsed-mobile:-translate-x-full data-flux-sidebar-on-mobile:data-flux-sidebar-collapsed-mobile:rtl:translate-x-full z-20! data-flux-sidebar-on-mobile:start-0! data-flux-sidebar-on-mobile:fixed! data-flux-sidebar-on-mobile:top-0! data-flux-sidebar-on-mobile:min-h-dvh! data-flux-sidebar-on-mobile:max-h-dvh! max-h-dvh overflow-y-auto overscroll-contain border-r border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900" x-init="$el.classList.add(&#039;transition-transform&#039;)"
     collapsible="mobile"      stashable      sticky     x-data
    data-flux-sidebar-cloak
    data-flux-sidebar
>
    <?php ob_start(); ?>
        <?php ob_start(); ?><button type="button" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none justify-center h-10 text-sm rounded-lg w-10 inline-flex  bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-500 hover:text-zinc-800 dark:text-zinc-400 dark:hover:text-white      shrink-0 lg:hidden" data-flux-button="data-flux-button" x-data="" x-on:click="$dispatch('flux-sidebar-toggle')" aria-label="Toggle sidebar" data-flux-sidebar-toggle="data-flux-sidebar-toggle">
        
    </button>
<?php echo ltrim(ob_get_clean()); ?>
        
        <?php ob_start(); ?><?php $__blaze->pushData(['variant' => 'sidebar']); $__env->pushConsumableComponentData(['variant' => 'sidebar']); ?><nav class="flex flex-col overflow-visible min-h-auto" data-flux-navlist>
    <?php ob_start(); ?>
            <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/navlist/item.blade.php', $__blaze->compiledPath.'/722f12247fdd73c696cb2eb7dd82dfd0.php'); ?>
<?php if (isset($__slots722f12247fdd73c696cb2eb7dd82dfd0)) { $__slotsStack722f12247fdd73c696cb2eb7dd82dfd0[] = $__slots722f12247fdd73c696cb2eb7dd82dfd0; } ?>
<?php if (isset($__attrs722f12247fdd73c696cb2eb7dd82dfd0)) { $__attrsStack722f12247fdd73c696cb2eb7dd82dfd0[] = $__attrs722f12247fdd73c696cb2eb7dd82dfd0; } ?>
<?php $__attrs722f12247fdd73c696cb2eb7dd82dfd0 = ['icon' => 'home','href' => e(route('dashboard')),'current' => request()->routeIs('dashboard'),'wire:navigate' => true]; ?>
<?php $__slots722f12247fdd73c696cb2eb7dd82dfd0 = []; ?>
<?php $__blaze->pushData($__attrs722f12247fdd73c696cb2eb7dd82dfd0); ?>
<?php ob_start(); ?>
                Dashboard
            <?php $__slots722f12247fdd73c696cb2eb7dd82dfd0['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots722f12247fdd73c696cb2eb7dd82dfd0); ?>
<?php _722f12247fdd73c696cb2eb7dd82dfd0($__blaze, $__attrs722f12247fdd73c696cb2eb7dd82dfd0, $__slots722f12247fdd73c696cb2eb7dd82dfd0, ['current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack722f12247fdd73c696cb2eb7dd82dfd0)) { $__slots722f12247fdd73c696cb2eb7dd82dfd0 = array_pop($__slotsStack722f12247fdd73c696cb2eb7dd82dfd0); } ?>
<?php if (! empty($__attrsStack722f12247fdd73c696cb2eb7dd82dfd0)) { $__attrs722f12247fdd73c696cb2eb7dd82dfd0 = array_pop($__attrsStack722f12247fdd73c696cb2eb7dd82dfd0); } ?>
<?php $__blaze->popData(); ?>
            
            <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/navlist/item.blade.php', $__blaze->compiledPath.'/722f12247fdd73c696cb2eb7dd82dfd0.php'); ?>
<?php if (isset($__slots722f12247fdd73c696cb2eb7dd82dfd0)) { $__slotsStack722f12247fdd73c696cb2eb7dd82dfd0[] = $__slots722f12247fdd73c696cb2eb7dd82dfd0; } ?>
<?php if (isset($__attrs722f12247fdd73c696cb2eb7dd82dfd0)) { $__attrsStack722f12247fdd73c696cb2eb7dd82dfd0[] = $__attrs722f12247fdd73c696cb2eb7dd82dfd0; } ?>
<?php $__attrs722f12247fdd73c696cb2eb7dd82dfd0 = ['icon' => 'briefcase','href' => e(route('services.index')),'current' => request()->routeIs('services.*'),'wire:navigate' => true]; ?>
<?php $__slots722f12247fdd73c696cb2eb7dd82dfd0 = []; ?>
<?php $__blaze->pushData($__attrs722f12247fdd73c696cb2eb7dd82dfd0); ?>
<?php ob_start(); ?>
                Layanan
            <?php $__slots722f12247fdd73c696cb2eb7dd82dfd0['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots722f12247fdd73c696cb2eb7dd82dfd0); ?>
<?php _722f12247fdd73c696cb2eb7dd82dfd0($__blaze, $__attrs722f12247fdd73c696cb2eb7dd82dfd0, $__slots722f12247fdd73c696cb2eb7dd82dfd0, ['current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack722f12247fdd73c696cb2eb7dd82dfd0)) { $__slots722f12247fdd73c696cb2eb7dd82dfd0 = array_pop($__slotsStack722f12247fdd73c696cb2eb7dd82dfd0); } ?>
<?php if (! empty($__attrsStack722f12247fdd73c696cb2eb7dd82dfd0)) { $__attrs722f12247fdd73c696cb2eb7dd82dfd0 = array_pop($__attrsStack722f12247fdd73c696cb2eb7dd82dfd0); } ?>
<?php $__blaze->popData(); ?>
            
            <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/navlist/item.blade.php', $__blaze->compiledPath.'/722f12247fdd73c696cb2eb7dd82dfd0.php'); ?>
<?php if (isset($__slots722f12247fdd73c696cb2eb7dd82dfd0)) { $__slotsStack722f12247fdd73c696cb2eb7dd82dfd0[] = $__slots722f12247fdd73c696cb2eb7dd82dfd0; } ?>
<?php if (isset($__attrs722f12247fdd73c696cb2eb7dd82dfd0)) { $__attrsStack722f12247fdd73c696cb2eb7dd82dfd0[] = $__attrs722f12247fdd73c696cb2eb7dd82dfd0; } ?>
<?php $__attrs722f12247fdd73c696cb2eb7dd82dfd0 = ['icon' => 'shopping-bag','href' => e(route('orders.index')),'current' => request()->routeIs('orders.*'),'wire:navigate' => true]; ?>
<?php $__slots722f12247fdd73c696cb2eb7dd82dfd0 = []; ?>
<?php $__blaze->pushData($__attrs722f12247fdd73c696cb2eb7dd82dfd0); ?>
<?php ob_start(); ?>
                Pesanan
            <?php $__slots722f12247fdd73c696cb2eb7dd82dfd0['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots722f12247fdd73c696cb2eb7dd82dfd0); ?>
<?php _722f12247fdd73c696cb2eb7dd82dfd0($__blaze, $__attrs722f12247fdd73c696cb2eb7dd82dfd0, $__slots722f12247fdd73c696cb2eb7dd82dfd0, ['current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack722f12247fdd73c696cb2eb7dd82dfd0)) { $__slots722f12247fdd73c696cb2eb7dd82dfd0 = array_pop($__slotsStack722f12247fdd73c696cb2eb7dd82dfd0); } ?>
<?php if (! empty($__attrsStack722f12247fdd73c696cb2eb7dd82dfd0)) { $__attrs722f12247fdd73c696cb2eb7dd82dfd0 = array_pop($__attrsStack722f12247fdd73c696cb2eb7dd82dfd0); } ?>
<?php $__blaze->popData(); ?>
            
            <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/navlist/item.blade.php', $__blaze->compiledPath.'/722f12247fdd73c696cb2eb7dd82dfd0.php'); ?>
<?php if (isset($__slots722f12247fdd73c696cb2eb7dd82dfd0)) { $__slotsStack722f12247fdd73c696cb2eb7dd82dfd0[] = $__slots722f12247fdd73c696cb2eb7dd82dfd0; } ?>
<?php if (isset($__attrs722f12247fdd73c696cb2eb7dd82dfd0)) { $__attrsStack722f12247fdd73c696cb2eb7dd82dfd0[] = $__attrs722f12247fdd73c696cb2eb7dd82dfd0; } ?>
<?php $__attrs722f12247fdd73c696cb2eb7dd82dfd0 = ['icon' => 'users','href' => e(route('users.index')),'current' => request()->routeIs('users.*'),'wire:navigate' => true]; ?>
<?php $__slots722f12247fdd73c696cb2eb7dd82dfd0 = []; ?>
<?php $__blaze->pushData($__attrs722f12247fdd73c696cb2eb7dd82dfd0); ?>
<?php ob_start(); ?>
                Pengguna
            <?php $__slots722f12247fdd73c696cb2eb7dd82dfd0['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots722f12247fdd73c696cb2eb7dd82dfd0); ?>
<?php _722f12247fdd73c696cb2eb7dd82dfd0($__blaze, $__attrs722f12247fdd73c696cb2eb7dd82dfd0, $__slots722f12247fdd73c696cb2eb7dd82dfd0, ['current', 'wire:navigate'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack722f12247fdd73c696cb2eb7dd82dfd0)) { $__slots722f12247fdd73c696cb2eb7dd82dfd0 = array_pop($__slotsStack722f12247fdd73c696cb2eb7dd82dfd0); } ?>
<?php if (! empty($__attrsStack722f12247fdd73c696cb2eb7dd82dfd0)) { $__attrs722f12247fdd73c696cb2eb7dd82dfd0 = array_pop($__attrsStack722f12247fdd73c696cb2eb7dd82dfd0); } ?>
<?php $__blaze->popData(); ?>

            <div class="my-2 border-t border-zinc-200 dark:border-zinc-700"></div>

            <form method="POST" action="<?php echo e(route('logout')); ?>" class="w-full">
                <?php echo csrf_field(); ?>
                <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/navlist/item.blade.php', $__blaze->compiledPath.'/722f12247fdd73c696cb2eb7dd82dfd0.php'); ?>
<?php if (isset($__slots722f12247fdd73c696cb2eb7dd82dfd0)) { $__slotsStack722f12247fdd73c696cb2eb7dd82dfd0[] = $__slots722f12247fdd73c696cb2eb7dd82dfd0; } ?>
<?php if (isset($__attrs722f12247fdd73c696cb2eb7dd82dfd0)) { $__attrsStack722f12247fdd73c696cb2eb7dd82dfd0[] = $__attrs722f12247fdd73c696cb2eb7dd82dfd0; } ?>
<?php $__attrs722f12247fdd73c696cb2eb7dd82dfd0 = ['as' => 'button','type' => 'submit','icon' => 'arrow-right-start-on-rectangle','class' => 'w-full text-left text-red-600 hover:text-red-700 dark:text-red-400 dark:hover:text-red-300 cursor-pointer']; ?>
<?php $__slots722f12247fdd73c696cb2eb7dd82dfd0 = []; ?>
<?php $__blaze->pushData($__attrs722f12247fdd73c696cb2eb7dd82dfd0); ?>
<?php ob_start(); ?>
                    Keluar / Logout
                <?php $__slots722f12247fdd73c696cb2eb7dd82dfd0['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots722f12247fdd73c696cb2eb7dd82dfd0); ?>
<?php _722f12247fdd73c696cb2eb7dd82dfd0($__blaze, $__attrs722f12247fdd73c696cb2eb7dd82dfd0, $__slots722f12247fdd73c696cb2eb7dd82dfd0, [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack722f12247fdd73c696cb2eb7dd82dfd0)) { $__slots722f12247fdd73c696cb2eb7dd82dfd0 = array_pop($__slotsStack722f12247fdd73c696cb2eb7dd82dfd0); } ?>
<?php if (! empty($__attrsStack722f12247fdd73c696cb2eb7dd82dfd0)) { $__attrs722f12247fdd73c696cb2eb7dd82dfd0 = array_pop($__attrsStack722f12247fdd73c696cb2eb7dd82dfd0); } ?>
<?php $__blaze->popData(); ?>
            </form>
        <?php echo trim(ob_get_clean()); ?>

</nav>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?><?php echo ltrim(ob_get_clean()); ?>
    <?php echo trim(ob_get_clean()); ?>

</ui-sidebar>
<?php $__blaze->popData(); $__env->popConsumableComponentData(); ?><?php echo ltrim(ob_get_clean()); ?>

    <?php ob_start(); ?><div class="[grid-area:main] p-6 lg:p-8 [[data-flux-container]_&amp;]:px-0" data-flux-main>
    <?php ob_start(); ?>
        
        <?php if (! empty(trim($__env->yieldContent('content')))): ?>
            <?php echo $__env->yieldContent('content'); ?>
        <?php else: ?>
            <?php echo e($slot ?? ''); ?>

        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
    <?php echo trim(ob_get_clean()); ?>

</div>
<?php echo ltrim(ob_get_clean()); ?>

    <?php app('livewire')->forceAssetInjection(); ?>
<?php echo app('flux')->scripts(); ?>

</body>
</html><?php /**PATH /home/caplinux/project/joki_web/resources/views/layouts/app.blade.php ENDPATH**/ ?>