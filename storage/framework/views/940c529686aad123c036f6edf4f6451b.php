<?php # [BlazeFolded]:{flux::heading}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/heading.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::subheading}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/subheading.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.column}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/column.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.column}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/column.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.column}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/column.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.column}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/column.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.columns}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/columns.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.cell}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/cell.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.cell}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/cell.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::badge}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/badge/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.cell}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/cell.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.cell}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/cell.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.row}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/row.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.cell}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/cell.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.row}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/row.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table.rows}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/rows.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::table}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/table/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::card}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/card/index.blade.php}:{1776985208} ?>
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
        
        
        <div class="flex items-center justify-between">
            <div>
                <?php ob_start(); ?><div class="font-medium [:where(&amp;)]:text-zinc-800 [:where(&amp;)]:dark:text-white text-2xl [&amp;:has(+[data-flux-subheading])]:mb-2 [[data-flux-subheading]+&amp;]:mt-2" data-flux-heading><?php ob_start(); ?>Manajemen Pengguna<?php echo trim(ob_get_clean()); ?></div>
<?php echo ltrim(ob_get_clean()); ?>
                <?php ob_start(); ?><div class="text-sm [:where(&amp;)]:text-zinc-500 [:where(&amp;)]:dark:text-white/70" data-flux-subheading>
    <?php ob_start(); ?>Daftar seluruh pengguna yang terdaftar di dalam sistem<?php echo trim(ob_get_clean()); ?>

</div>
<?php echo ltrim(ob_get_clean()); ?>
            </div>
        </div>

        
        <?php ob_start(); ?><div class="[:where(&amp;)]:bg-white dark:[:where(&amp;)]:bg-white/10 border border-zinc-200 dark:border-white/10 [:where(&amp;)]:p-6 [:where(&amp;)]:rounded-xl" data-flux-card>
    <?php ob_start(); ?>
            <?php ob_start(); ?><div class="flex flex-col ">
    

    <ui-table-scroll-area class="overflow-auto">
        <table class="[:where(&amp;)]:min-w-full table-fixed border-separate border-spacing-0 isolate text-zinc-800 whitespace-nowrap [&amp;_dialog]:whitespace-normal [&amp;_[popover]]:whitespace-normal" data-flux-table>
            <?php ob_start(); ?>
                <?php ob_start(); ?><thead class="" data-flux-columns>
    <tr >
        <?php ob_start(); ?>
                    <?php ob_start(); ?><th class="py-3 px-3 first:ps-0 last:pe-0 text-start text-sm font-medium text-zinc-800 dark:text-white border-b border-zinc-800/10 dark:border-white/20    **:data-flux-table-sortable:last:me-0" data-flux-column>
            <div class="flex in-[.group\/center-align]:justify-center in-[.group\/end-align]:justify-end"><?php ob_start(); ?>Nama<?php echo trim(ob_get_clean()); ?></div>
    </th>
<?php echo ltrim(ob_get_clean()); ?>
                    <?php ob_start(); ?><th class="py-3 px-3 first:ps-0 last:pe-0 text-start text-sm font-medium text-zinc-800 dark:text-white border-b border-zinc-800/10 dark:border-white/20    **:data-flux-table-sortable:last:me-0" data-flux-column>
            <div class="flex in-[.group\/center-align]:justify-center in-[.group\/end-align]:justify-end"><?php ob_start(); ?>Email<?php echo trim(ob_get_clean()); ?></div>
    </th>
<?php echo ltrim(ob_get_clean()); ?>
                    <?php ob_start(); ?><th class="py-3 px-3 first:ps-0 last:pe-0 text-start text-sm font-medium text-zinc-800 dark:text-white border-b border-zinc-800/10 dark:border-white/20    **:data-flux-table-sortable:last:me-0" data-flux-column>
            <div class="flex in-[.group\/center-align]:justify-center in-[.group\/end-align]:justify-end"><?php ob_start(); ?>Role / Peran<?php echo trim(ob_get_clean()); ?></div>
    </th>
<?php echo ltrim(ob_get_clean()); ?>
                    <?php ob_start(); ?><th class="py-3 px-3 first:ps-0 last:pe-0 text-start text-sm font-medium text-zinc-800 dark:text-white border-b border-zinc-800/10 dark:border-white/20    **:data-flux-table-sortable:last:me-0" data-flux-column>
            <div class="flex in-[.group\/center-align]:justify-center in-[.group\/end-align]:justify-end"><?php ob_start(); ?>Tanggal Bergabung<?php echo trim(ob_get_clean()); ?></div>
    </th>
<?php echo ltrim(ob_get_clean()); ?>
                <?php echo trim(ob_get_clean()); ?>

    </tr>
</thead>
<?php echo ltrim(ob_get_clean()); ?>

                <?php ob_start(); ?><tbody  data-flux-rows>
    <?php ob_start(); ?>
                    <?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::openLoop(); ?><?php endif; ?><?php $__empty_1 = true; $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::startLoopIteration(); ?><?php endif; ?>
                        <?php ob_start(); ?><tr  class="" data-flux-row>
    <?php ob_start(); ?>
                            <?php ob_start(); ?><td class="py-3 px-3 first:ps-0 last:pe-0 text-sm  text-zinc-500 dark:text-zinc-300  not-in-[tr:first-child]:border-t border-zinc-800/10 dark:border-white/20" data-flux-cell>
    <?php ob_start(); ?>
                                <div class="flex items-center gap-3">
                                    <div class="flex size-8 shrink-0 items-center justify-center rounded-full bg-gradient-to-br from-indigo-500 to-purple-600 text-xs font-semibold text-white uppercase">
                                        <?php echo e(substr($user->name, 0, 2)); ?>

                                    </div>
                                    <span class="font-medium text-zinc-800 dark:text-zinc-200"><?php echo e($user->name); ?></span>
                                </div>
                            <?php echo trim(ob_get_clean()); ?>

</td>
<?php echo ltrim(ob_get_clean()); ?>
                            
                            <?php ob_start(); ?><td class="py-3 px-3 first:ps-0 last:pe-0 text-sm  text-zinc-500 dark:text-zinc-300  not-in-[tr:first-child]:border-t border-zinc-800/10 dark:border-white/20 text-zinc-500" data-flux-cell>
    <?php ob_start(); ?>
                                <?php echo e($user->email); ?>

                            <?php echo trim(ob_get_clean()); ?>

</td>
<?php echo ltrim(ob_get_clean()); ?>
                            
                            <?php ob_start(); ?><td class="py-3 px-3 first:ps-0 last:pe-0 text-sm  text-zinc-500 dark:text-zinc-300  not-in-[tr:first-child]:border-t border-zinc-800/10 dark:border-white/20" data-flux-cell>
    <?php ob_start(); ?>
                                <?php ob_start(); ?><div data-flux-badge="data-flux-badge" class="inline-flex items-center font-medium whitespace-nowrap  [print-color-adjust:exact] text-xs py-1 **:data-flux-badge-icon:me-1 rounded-md px-2 text-zinc-700 [&amp;_button]:text-zinc-700! dark:text-zinc-200 dark:[&amp;_button]:text-zinc-200! bg-zinc-400/15 dark:bg-zinc-400/40 [&amp;:is(button)]:hover:bg-zinc-400/25 dark:[button]:hover:bg-zinc-400/50 capitalize">
        <?php ob_start(); ?>
                                    <?php echo e($user->role ?? 'User'); ?>

                                <?php echo trim(ob_get_clean()); ?>

    </div>
<?php echo ltrim(ob_get_clean()); ?>
                            <?php echo trim(ob_get_clean()); ?>

</td>
<?php echo ltrim(ob_get_clean()); ?>
                            
                            <?php ob_start(); ?><td class="py-3 px-3 first:ps-0 last:pe-0 text-sm  text-zinc-500 dark:text-zinc-300  not-in-[tr:first-child]:border-t border-zinc-800/10 dark:border-white/20 text-zinc-500 text-sm" data-flux-cell>
    <?php ob_start(); ?>
                                <?php echo e($user->created_at->translatedFormat('d M Y, H:i')); ?>

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
                                <div class="py-12 text-center text-zinc-400">
                                    Tidak ada data pengguna ditemukan.
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

            
            <div class="mt-4">
                <?php echo e($users->links()); ?>

            </div>
        <?php echo trim(ob_get_clean()); ?>

</div>
<?php echo ltrim(ob_get_clean()); ?>

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
<?php endif; ?><?php /**PATH C:\laragon\www\joki-web\resources\views/users/index.blade.php ENDPATH**/ ?>