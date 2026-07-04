<?php # [BlazeFolded]:{flux::heading}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/heading.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::subheading}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/subheading.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::button}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php}:{1776985208} ?>
<?php # [BlazeFolded]:{flux::button}:{C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php}:{1776985208} ?>
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

    <div class="flex h-full w-full flex-1 flex-col gap-6 p-6">
        <div>
            <?php ob_start(); ?><div class="font-medium [:where(&amp;)]:text-zinc-800 [:where(&amp;)]:dark:text-white text-2xl [&amp;:has(+[data-flux-subheading])]:mb-2 [[data-flux-subheading]+&amp;]:mt-2" data-flux-heading><?php ob_start(); ?>Tambah Order Baru<?php echo trim(ob_get_clean()); ?></div>
<?php echo ltrim(ob_get_clean()); ?>
            <?php ob_start(); ?><div class="text-sm [:where(&amp;)]:text-zinc-500 [:where(&amp;)]:dark:text-white/70" data-flux-subheading>
    <?php ob_start(); ?>Masukkan detail informasi pesanan klien<?php echo trim(ob_get_clean()); ?>

</div>
<?php echo ltrim(ob_get_clean()); ?>
        </div>

        <?php ob_start(); ?><div class="[:where(&amp;)]:bg-white dark:[:where(&amp;)]:bg-white/10 border border-zinc-200 dark:border-white/10 [:where(&amp;)]:p-6 [:where(&amp;)]:rounded-xl p-6" data-flux-card>
    <?php ob_start(); ?>
            
            <form action="<?php echo e(route('orders.store')); ?>" method="POST" enctype="multipart/form-data" class="space-y-6">
                <?php echo csrf_field(); ?>

                <div class="grid grid-cols-1 gap-6">
                    <div>
                        <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1">Nama Klien</label>
                        <input type="text" name="nama_klien" placeholder="Masukkan nama lengkap klien..." class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950" required>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1">Layanan</label>
                        <input type="text" name="layanan" placeholder="Pilih jenis layanan..." class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950" required>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1">Jumlah</label>
                            <input type="number" name="jumlah" value="1" class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-1">Harga Awal</label>
                            <input type="number" name="harga" placeholder="Rp" class="w-full rounded-lg border border-zinc-200 bg-white px-3 py-2 text-sm dark:border-zinc-800 dark:bg-zinc-950">
                        </div>
                    </div>

                    <div>
                        <label class="block text-sm font-medium text-zinc-700 dark:text-zinc-300 mb-2">File Referensi</label>
                        <input type="file" name="file_referensi" class="block w-full text-sm text-zinc-500 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-indigo-50 file:text-indigo-700 hover:file:bg-indigo-100">
                    </div>
                </div>

                <div class="flex items-center gap-4 pt-4">
                    <?php ob_start(); ?><button type="submit" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none justify-center h-10 text-sm rounded-lg ps-4 pe-4 inline-flex  bg-zinc-800/5 hover:bg-zinc-800/10 dark:bg-white/10 dark:hover:bg-white/20 text-zinc-800 dark:text-white   [[data-flux-button-group]_&amp;]:border-e [:is([data-flux-button-group]&gt;&amp;:last-child,_[data-flux-button-group]_:last-child&gt;&amp;)]:border-e-0 [[data-flux-button-group]_&amp;]:border-zinc-200/80 dark:[[data-flux-button-group]_&amp;]:border-zinc-900/50 *:transition-opacity [&amp;[disabled]&gt;:not([data-flux-loading-indicator])]:opacity-0 [&amp;[disabled]&gt;[data-flux-loading-indicator]]:opacity-100 [&amp;[disabled]]:pointer-events-none" data-flux-button="data-flux-button" data-flux-group-target="data-flux-group-target">
        <div class="absolute inset-0 flex items-center justify-center opacity-0" data-flux-loading-indicator>
                <svg class="shrink-0 [:where(&amp;)]:size-4 animate-spin" data-flux-icon xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" aria-hidden="true" data-slot="icon">
    <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
    <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
</svg>
                    </div>
        
        
                    
            
            <span><?php ob_start(); ?>
                        Simpan Order
                    <?php echo trim(ob_get_clean()); ?></span>
    </button>
<?php echo ltrim(ob_get_clean()); ?>
                    <?php ob_start(); ?><a href="<?php echo e(route('orders.index')); ?>" data-flux-button="data-flux-button" class="relative items-center font-medium justify-center gap-2 whitespace-nowrap disabled:opacity-75 dark:disabled:opacity-75 disabled:cursor-default disabled:pointer-events-none justify-center h-10 text-sm rounded-lg ps-4 pe-4 inline-flex  bg-transparent hover:bg-zinc-800/5 dark:hover:bg-white/15 text-zinc-800 dark:text-white">
        <?php ob_start(); ?>
                        Kembali
                    <?php echo trim(ob_get_clean()); ?>

    </a>
<?php echo ltrim(ob_get_clean()); ?>
                </div>
            </form>
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
<?php endif; ?><?php /**PATH C:\laragon\www\joki-web\resources\views/orders/create.blade.php ENDPATH**/ ?>