<?php # [BlazeFolded]:{flux::badge}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/badge/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::card}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/card/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::heading}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/heading.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::subheading}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/subheading.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::button}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.column}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/column.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.column}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/column.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.column}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/column.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.column}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/column.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.columns}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/columns.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::icon.briefcase}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/briefcase.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.cell}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/cell.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.cell}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/cell.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::badge}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/badge/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.cell}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/cell.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::badge}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/badge/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::badge}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/badge/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.cell}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/cell.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.row}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/row.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.cell}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/cell.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.row}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/row.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.rows}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/rows.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::card}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/card/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::heading}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/heading.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::subheading}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/subheading.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::badge}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/badge/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::card}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/card/index.blade.php}:{1776985208} ?>
<?php
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
?>

<?php if (isset($component)) { $__componentOriginal81a506f898233b9e7d58286e6bea3c18 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal81a506f898233b9e7d58286e6bea3c18 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'f4ac99e09542ff494432bc959d4fee61::app','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts::app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

    <div class="flex h-full w-full flex-1 flex-col gap-6">

        
        <div class="grid gap-4 lg:grid-cols-5 lg:items-stretch">

            
            <div class="relative overflow-hidden rounded-2xl bg-gradient-to-br from-indigo-600 via-purple-600 to-pink-500 px-6 py-8 text-white shadow-lg lg:col-span-2">
                <div class="pointer-events-none absolute -right-10 -top-10 size-48 rounded-full bg-white/10 blur-2xl"></div>
                <div class="pointer-events-none absolute -bottom-8 -left-8 size-40 rounded-full bg-white/10 blur-2xl"></div>

                <div class="relative flex h-full flex-col justify-between gap-4">
                    <div>
                        <p class="text-sm font-medium text-white/85">Selamat datang kembali 👋</p>
                        <h1 class="mt-1 text-2xl font-bold tracking-tight text-white"><?php echo e(auth()->user()->name); ?></h1>
                        <p class="mt-2 text-sm text-white/85 leading-relaxed">
                            <?php echo e(now()->translatedFormat('l, d F Y')); ?><br class="hidden sm:inline">
                            <span class="hidden sm:inline">&mdash; </span>Portal Layanan &amp; Manajemen Joki Web
                        </p>
                    </div>
                    <div>
                        <?php ob_start(); ?><div data-flux-badge="data-flux-badge" class="inline-flex items-center font-medium whitespace-nowrap  [print-color-adjust:exact] text-sm py-1 **:data-flux-badge-icon:me-1.5 rounded-md px-2 text-lime-800 [&amp;_button]:text-lime-800! dark:text-lime-200 dark:[&amp;_button]:text-lime-200! bg-lime-400/25 dark:bg-lime-400/40 [&amp;:is(button)]:hover:bg-lime-400/35 dark:[button]:hover:bg-lime-400/50 font-semibold">
        <?php ob_start(); ?>● Sistem Aktif<?php echo trim(ob_get_clean()); ?>

    </div>
<?php echo ltrim(ob_get_clean()); ?>
                    </div>
                </div>
            </div>

            
            <div class="grid grid-cols-2 gap-3 lg:col-span-3">
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__currentLoopData = $stats; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                    <?php ob_start(); ?><div class="[:where(&amp;)]:bg-white dark:[:where(&amp;)]:bg-white/10 border border-zinc-200 dark:border-white/10 [:where(&amp;)]:p-6 [:where(&amp;)]:rounded-xl group relative overflow-hidden p-3 transition-all duration-300 hover:shadow-md hover:-translate-y-0.5" data-flux-card>
    <?php ob_start(); ?>
                        <div class="absolute inset-x-0 top-0 h-[3px] bg-gradient-to-r <?php echo e($stat['gradient']); ?> rounded-t-xl"></div>

                        <div class="flex items-center gap-3 pt-1">
                            <div class="flex size-9 shrink-0 items-center justify-center rounded-lg <?php echo e($stat['bg']); ?>">
                                <?php $blaze_memoized_key = \Livewire\Blaze\Memoizer\Memo::key("flux::icon", ['icon' => $stat['icon'], 'class' => 'size-4 '.e($stat['text'])]); ?><?php if ($blaze_memoized_key !== null && \Livewire\Blaze\Memoizer\Memo::has($blaze_memoized_key)) : ?><?php echo \Livewire\Blaze\Memoizer\Memo::get($blaze_memoized_key); ?><?php else : ?><?php ob_start(); ?><?php $__blaze->ensureRequired('C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/index.blade.php', $__blaze->compiledPath.'/53edb446ac6be75546af2e08fbe45102.php'); ?>
<?php $__blaze->pushData(['icon' => $stat['icon'],'class' => 'size-4 '.e($stat['text'])]); ?>
<?php _53edb446ac6be75546af2e08fbe45102($__blaze, ['icon' => $stat['icon'],'class' => 'size-4 '.e($stat['text'])], [], ['icon'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?><?php $blaze_memoized_html = ob_get_clean(); ?><?php if ($blaze_memoized_key !== null) { \Livewire\Blaze\Memoizer\Memo::put($blaze_memoized_key, $blaze_memoized_html); } ?><?php echo $blaze_memoized_html; ?><?php endif; ?>
                            </div>

                            <div class="min-w-0">
                                <p class="truncate text-[10px] font-semibold uppercase tracking-wider text-zinc-500 dark:text-zinc-400">
                                    <?php echo e($stat['label']); ?>

                                </p>
                                <p class="text-xl font-bold tabular-nums leading-tight">
                                    <?php echo e($stat['value']); ?>

                                </p>
                            </div>
                        </div>
                    <?php echo trim(ob_get_clean()); ?>

</div>
<?php echo ltrim(ob_get_clean()); ?>
                <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
            </div>

        </div>

        
        <div class="grid gap-6 lg:grid-cols-5">

            
            <div class="lg:col-span-3">
                <?php ob_start(); ?><div class="[:where(&amp;)]:bg-white dark:[:where(&amp;)]:bg-white/10 border border-zinc-200 dark:border-white/10 [:where(&amp;)]:p-6 [:where(&amp;)]:rounded-xl h-full" data-flux-card>
    <?php ob_start(); ?>
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <?php ob_start(); ?><div class="font-medium [:where(&amp;)]:text-zinc-800 [:where(&amp;)]:dark:text-white text-base [&amp;:has(+[data-flux-subheading])]:mb-2 [[data-flux-subheading]+&amp;]:mt-2" data-flux-heading><?php ob_start(); ?>Layanan Terbaru<?php echo trim(ob_get_clean()); ?></div>
<?php echo ltrim(ob_get_clean()); ?>
                            <?php ob_start(); ?><div class="text-sm [:where(&amp;)]:text-zinc-500 [:where(&amp;)]:dark:text-white/70 text-xs" data-flux-subheading>
    <?php ob_start(); ?>5 layanan yang baru ditambahkan<?php echo trim(ob_get_clean()); ?>

</div>
<?php echo ltrim(ob_get_clean()); ?>
                        </div>
                        <?php ob_start(); ?><a href="<?php echo e(route('services.index')); ?>" data-flux-button="data-flux-button" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none justify-center h-8 text-sm rounded-md px-3 inline-flex  bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white" wire:navigate="">
        <svg class="shrink-0 [:where(&amp;)]:size-4" data-flux-icon xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" aria-hidden="true" data-slot="icon">
  <path fill-rule="evenodd" d="M2 8a.75.75 0 0 1 .75-.75h8.69L8.22 4.03a.75.75 0 0 1 1.06-1.06l4.5 4.5a.75.75 0 0 1 0 1.06l-4.5 4.5a.75.75 0 0 1-1.06-1.06l3.22-3.22H2.75A.75.75 0 0 1 2 8Z" clip-rule="evenodd"/>
</svg>

                
                    
            
            <span><?php ob_start(); ?>
                            Lihat semua
                        <?php echo trim(ob_get_clean()); ?></span>
    </a>
<?php echo ltrim(ob_get_clean()); ?>
                    </div>

                    <?php ob_start(); ?><div class="flex flex-col ">
    

    <ui-table-scroll-area class="overflow-auto">
        <table class="[:where(&amp;)]:min-w-full table-fixed border-separate border-spacing-0 isolate text-zinc-800 whitespace-nowrap [&amp;_dialog]:whitespace-normal [&amp;_[popover]]:whitespace-normal" data-flux-table>
            <?php ob_start(); ?>
                        <?php ob_start(); ?><thead class="" data-flux-columns>
    <tr >
        <?php ob_start(); ?>
                            <?php ob_start(); ?><th class="py-3 px-3 first:ps-0 last:pe-0 text-start text-sm font-medium text-zinc-800 dark:text-white border-b border-zinc-800/10 dark:border-white/20    **:data-flux-table-sortable:last:me-0" data-flux-column>
            <div class="flex in-[.group\/center-align]:justify-center in-[.group\/end-align]:justify-end"><?php ob_start(); ?>Layanan<?php echo trim(ob_get_clean()); ?></div>
    </th>
<?php echo ltrim(ob_get_clean()); ?>
                            <?php ob_start(); ?><th class="py-3 px-3 first:ps-0 last:pe-0 text-start text-sm font-medium text-zinc-800 dark:text-white border-b border-zinc-800/10 dark:border-white/20    **:data-flux-table-sortable:last:me-0" data-flux-column>
            <div class="flex in-[.group\/center-align]:justify-center in-[.group\/end-align]:justify-end"><?php ob_start(); ?>Harga Dasar<?php echo trim(ob_get_clean()); ?></div>
    </th>
<?php echo ltrim(ob_get_clean()); ?>
                            <?php ob_start(); ?><th class="py-3 px-3 first:ps-0 last:pe-0 text-start text-sm font-medium text-zinc-800 dark:text-white border-b border-zinc-800/10 dark:border-white/20    **:data-flux-table-sortable:last:me-0" data-flux-column>
            <div class="flex in-[.group\/center-align]:justify-center in-[.group\/end-align]:justify-end"><?php ob_start(); ?>Kategori<?php echo trim(ob_get_clean()); ?></div>
    </th>
<?php echo ltrim(ob_get_clean()); ?>
                            <?php ob_start(); ?><th class="py-3 px-3 first:ps-0 last:pe-0 text-start text-sm font-medium text-zinc-800 dark:text-white border-b border-zinc-800/10 dark:border-white/20    **:data-flux-table-sortable:last:me-0" data-flux-column>
            <div class="flex in-[.group\/center-align]:justify-center in-[.group\/end-align]:justify-end"><?php ob_start(); ?>Status<?php echo trim(ob_get_clean()); ?></div>
    </th>
<?php echo ltrim(ob_get_clean()); ?>
                        <?php echo trim(ob_get_clean()); ?>

    </tr>
</thead>
<?php echo ltrim(ob_get_clean()); ?>
                        <?php ob_start(); ?><tbody  data-flux-rows>
    <?php ob_start(); ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $recentServices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                                <?php ob_start(); ?><tr  class="" data-flux-row>
    <?php ob_start(); ?>
                                    <?php ob_start(); ?><td class="py-3 px-3 first:ps-0 last:pe-0 text-sm  text-zinc-500 dark:text-zinc-300  not-in-[tr:first-child]:border-t border-zinc-800/10 dark:border-white/20" data-flux-cell>
    <?php ob_start(); ?>
                                        <div class="flex items-center gap-3">
                                            <div class="flex size-9 shrink-0 items-center justify-center rounded-lg bg-gradient-to-br from-orange-400 to-rose-500">
                                                <?php ob_start(); ?><svg class="shrink-0 [:where(&amp;)]:size-6 size-4 text-white" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
  <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z"/>
</svg>

        <?php echo ltrim(ob_get_clean()); ?>
                                            </div>
                                            <span class="font-medium"><?php echo e(Str::limit($service->name, 22)); ?></span>
                                        </div>
                                    <?php echo trim(ob_get_clean()); ?>

</td>
<?php echo ltrim(ob_get_clean()); ?>
                                    <?php ob_start(); ?><td class="py-3 px-3 first:ps-0 last:pe-0 text-sm  text-zinc-500 dark:text-zinc-300  not-in-[tr:first-child]:border-t border-zinc-800/10 dark:border-white/20 text-zinc-500 text-sm" data-flux-cell>
    <?php ob_start(); ?>
                                        Rp <?php echo e(number_format($service->base_price, 0, ',', '.')); ?>

                                    <?php echo trim(ob_get_clean()); ?>

</td>
<?php echo ltrim(ob_get_clean()); ?>
                                    <?php ob_start(); ?><td class="py-3 px-3 first:ps-0 last:pe-0 text-sm  text-zinc-500 dark:text-zinc-300  not-in-[tr:first-child]:border-t border-zinc-800/10 dark:border-white/20" data-flux-cell>
    <?php ob_start(); ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($service->category): ?>
                                            <?php ob_start(); ?><div data-flux-badge="data-flux-badge" class="inline-flex items-center font-medium whitespace-nowrap  [print-color-adjust:exact] text-xs py-1 **:data-flux-badge-icon:me-1 rounded-md px-2 text-zinc-700 [&amp;_button]:text-zinc-700! dark:text-zinc-200 dark:[&amp;_button]:text-zinc-200! bg-zinc-400/15 dark:bg-zinc-400/40 [&amp;:is(button)]:hover:bg-zinc-400/25 dark:[button]:hover:bg-zinc-400/50">
        <?php ob_start(); ?><?php echo e($service->category->name); ?><?php echo trim(ob_get_clean()); ?>

    </div>
<?php echo ltrim(ob_get_clean()); ?>
                                        <?php else: ?>
                                            <span class="text-zinc-400 text-xs">—</span>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php echo trim(ob_get_clean()); ?>

</td>
<?php echo ltrim(ob_get_clean()); ?>
                                    <?php ob_start(); ?><td class="py-3 px-3 first:ps-0 last:pe-0 text-sm  text-zinc-500 dark:text-zinc-300  not-in-[tr:first-child]:border-t border-zinc-800/10 dark:border-white/20" data-flux-cell>
    <?php ob_start(); ?>
                                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($service->is_active): ?>
                                            <?php ob_start(); ?><div data-flux-badge="data-flux-badge" class="inline-flex items-center font-medium whitespace-nowrap -mt-1 -mb-1 [print-color-adjust:exact] text-xs py-1 **:data-flux-badge-icon:me-1 rounded-md px-2 text-green-800 [&amp;_button]:text-green-800! dark:text-green-200 dark:[&amp;_button]:text-green-200! bg-green-400/20 dark:bg-green-400/40 [&amp;:is(button)]:hover:bg-green-400/30 dark:[button]:hover:bg-green-400/50">
        <?php ob_start(); ?>Aktif<?php echo trim(ob_get_clean()); ?>

    </div>
<?php echo ltrim(ob_get_clean()); ?>
                                        <?php else: ?>
                                            <?php ob_start(); ?><div data-flux-badge="data-flux-badge" class="inline-flex items-center font-medium whitespace-nowrap -mt-1 -mb-1 [print-color-adjust:exact] text-xs py-1 **:data-flux-badge-icon:me-1 rounded-md px-2 text-zinc-700 [&amp;_button]:text-zinc-700! dark:text-zinc-200 dark:[&amp;_button]:text-zinc-200! bg-zinc-400/15 dark:bg-zinc-400/40 [&amp;:is(button)]:hover:bg-zinc-400/25 dark:[button]:hover:bg-zinc-400/50">
        <?php ob_start(); ?>Non-aktif<?php echo trim(ob_get_clean()); ?>

    </div>
<?php echo ltrim(ob_get_clean()); ?>
                                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                                    <?php echo trim(ob_get_clean()); ?>

</td>
<?php echo ltrim(ob_get_clean()); ?>
                                <?php echo trim(ob_get_clean()); ?>

</tr>
<?php echo ltrim(ob_get_clean()); ?>
                            <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                                <?php ob_start(); ?><tr  class="" data-flux-row>
    <?php ob_start(); ?>
                                    <?php ob_start(); ?><td class="py-3 px-3 first:ps-0 last:pe-0 text-sm  text-zinc-500 dark:text-zinc-300  not-in-[tr:first-child]:border-t border-zinc-800/10 dark:border-white/20" colspan="4" data-flux-cell>
    <?php ob_start(); ?>
                                        <div class="py-6 text-center text-sm text-zinc-400">
                                            Belum ada layanan yang ditambahkan.
                                        </div>
                                    <?php echo trim(ob_get_clean()); ?>

</td>
<?php echo ltrim(ob_get_clean()); ?>
                                <?php echo trim(ob_get_clean()); ?>

</tr>
<?php echo ltrim(ob_get_clean()); ?>
                            <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                        <?php echo trim(ob_get_clean()); ?>

</tbody>
<?php echo ltrim(ob_get_clean()); ?>
                    <?php echo trim(ob_get_clean()); ?>

        </table>
    </ui-table-scroll-area>

    

    </div>
<?php echo ltrim(ob_get_clean()); ?>
                <?php echo trim(ob_get_clean()); ?>

</div>
<?php echo ltrim(ob_get_clean()); ?>
            </div>

            
            <div class="lg:col-span-2">
                <?php ob_start(); ?><div class="[:where(&amp;)]:bg-white dark:[:where(&amp;)]:bg-white/10 border border-zinc-200 dark:border-white/10 [:where(&amp;)]:p-6 [:where(&amp;)]:rounded-xl h-full" data-flux-card>
    <?php ob_start(); ?>
                    <div class="mb-4 flex items-center justify-between">
                        <div>
                            <?php ob_start(); ?><div class="font-medium [:where(&amp;)]:text-zinc-800 [:where(&amp;)]:dark:text-white text-base [&amp;:has(+[data-flux-subheading])]:mb-2 [[data-flux-subheading]+&amp;]:mt-2" data-flux-heading><?php ob_start(); ?>Pengguna Terbaru<?php echo trim(ob_get_clean()); ?></div>
<?php echo ltrim(ob_get_clean()); ?>
                            <?php ob_start(); ?><div class="text-sm [:where(&amp;)]:text-zinc-500 [:where(&amp;)]:dark:text-white/70 text-xs" data-flux-subheading>
    <?php ob_start(); ?>5 pengguna yang baru mendaftar<?php echo trim(ob_get_clean()); ?>

</div>
<?php echo ltrim(ob_get_clean()); ?>
                        </div>
                    </div>

                    <div class="flex flex-col divide-y divide-zinc-100 dark:divide-zinc-800">
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $recentUsers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                            <div class="flex items-start gap-3 py-3 first:pt-0 last:pb-0">
                                <div class="mt-1.5 size-2 shrink-0 rounded-full bg-gradient-to-br from-sky-400 to-blue-600"></div>
                                <div class="min-w-0 flex-1">
                                    <div class="flex items-center justify-between">
                                        <p class="truncate text-sm font-medium leading-snug"><?php echo e($user->name); ?></p>
                                        <?php ob_start(); ?><div data-flux-badge="data-flux-badge" class="inline-flex items-center font-medium whitespace-nowrap  [print-color-adjust:exact] text-xs py-1 **:data-flux-badge-icon:me-1 rounded-md px-2 text-zinc-700 [&amp;_button]:text-zinc-700! dark:text-zinc-200 dark:[&amp;_button]:text-zinc-200! bg-zinc-400/15 dark:bg-zinc-400/40 [&amp;:is(button)]:hover:bg-zinc-400/25 dark:[button]:hover:bg-zinc-400/50 capitalize">
        <?php ob_start(); ?><?php echo e($user->role ?? 'User'); ?><?php echo trim(ob_get_clean()); ?>

    </div>
<?php echo ltrim(ob_get_clean()); ?>
                                    </div>
                                    <p class="mt-0.5 text-xs text-zinc-400">
                                        <?php echo e($user->email); ?> &bull; <?php echo e($user->created_at->diffForHumans()); ?>

                                    </p>
                                </div>
                            </div>
                        <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::endLoop(); ?><?php endif; ?><?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::closeLoop(); ?><?php endif; ?>
                            <div class="py-6 text-center text-sm text-zinc-400">
                                Belum ada pengguna terdaftar.
                            </div>
                        <?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
                    </div>
                <?php echo trim(ob_get_clean()); ?>

</div>
<?php echo ltrim(ob_get_clean()); ?>
            </div>

        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal81a506f898233b9e7d58286e6bea3c18)): ?>
<?php $attributes = $__attributesOriginal81a506f898233b9e7d58286e6bea3c18; ?>
<?php unset($__attributesOriginal81a506f898233b9e7d58286e6bea3c18); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal81a506f898233b9e7d58286e6bea3c18)): ?>
<?php $component = $__componentOriginal81a506f898233b9e7d58286e6bea3c18; ?>
<?php unset($__componentOriginal81a506f898233b9e7d58286e6bea3c18); ?>
<?php endif; ?><?php /**PATH C:\laragon\www\joki-web\resources\views/dashboard.blade.php ENDPATH**/ ?>