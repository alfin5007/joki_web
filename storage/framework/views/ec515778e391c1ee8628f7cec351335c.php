<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'sidebar' => false,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'sidebar' => false,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars, $__key, $__value); ?>

<?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if BLOCK]><![endif]--><?php endif; ?><?php if($sidebar): ?>
    <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/sidebar/brand.blade.php', $__blaze->compiledPath.'/3df0aa5c0bdb81863f46dc060bf17097.php'); ?>
<?php if (isset($__slots3df0aa5c0bdb81863f46dc060bf17097)) { $__slotsStack3df0aa5c0bdb81863f46dc060bf17097[] = $__slots3df0aa5c0bdb81863f46dc060bf17097; } ?>
<?php if (isset($__attrs3df0aa5c0bdb81863f46dc060bf17097)) { $__attrsStack3df0aa5c0bdb81863f46dc060bf17097[] = $__attrs3df0aa5c0bdb81863f46dc060bf17097; } ?>
<?php $__attrs3df0aa5c0bdb81863f46dc060bf17097 = ['name' => 'Laravel Starter Kit','attributes' => $attributes]; ?>
<?php $__slots3df0aa5c0bdb81863f46dc060bf17097 = []; ?>
<?php $__blaze->pushData($__attrs3df0aa5c0bdb81863f46dc060bf17097); ?>
<?php ob_start(); ?>
             <?php $__slots3df0aa5c0bdb81863f46dc060bf17097['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-5 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slots3df0aa5c0bdb81863f46dc060bf17097['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground']); ?>
<?php $__blaze->pushSlots($__slots3df0aa5c0bdb81863f46dc060bf17097); ?>
<?php _3df0aa5c0bdb81863f46dc060bf17097($__blaze, $__attrs3df0aa5c0bdb81863f46dc060bf17097, $__slots3df0aa5c0bdb81863f46dc060bf17097, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack3df0aa5c0bdb81863f46dc060bf17097)) { $__slots3df0aa5c0bdb81863f46dc060bf17097 = array_pop($__slotsStack3df0aa5c0bdb81863f46dc060bf17097); } ?>
<?php if (! empty($__attrsStack3df0aa5c0bdb81863f46dc060bf17097)) { $__attrs3df0aa5c0bdb81863f46dc060bf17097 = array_pop($__attrsStack3df0aa5c0bdb81863f46dc060bf17097); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/brand.blade.php', $__blaze->compiledPath.'/2d9527122b76d0f9258fe9b8e31e8dac.php'); ?>
<?php if (isset($__slots2d9527122b76d0f9258fe9b8e31e8dac)) { $__slotsStack2d9527122b76d0f9258fe9b8e31e8dac[] = $__slots2d9527122b76d0f9258fe9b8e31e8dac; } ?>
<?php if (isset($__attrs2d9527122b76d0f9258fe9b8e31e8dac)) { $__attrsStack2d9527122b76d0f9258fe9b8e31e8dac[] = $__attrs2d9527122b76d0f9258fe9b8e31e8dac; } ?>
<?php $__attrs2d9527122b76d0f9258fe9b8e31e8dac = ['name' => 'Laravel Starter Kit','attributes' => $attributes]; ?>
<?php $__slots2d9527122b76d0f9258fe9b8e31e8dac = []; ?>
<?php $__blaze->pushData($__attrs2d9527122b76d0f9258fe9b8e31e8dac); ?>
<?php ob_start(); ?>
             <?php $__slots2d9527122b76d0f9258fe9b8e31e8dac['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php ob_start(); ?>
            <?php if (isset($component)) { $__componentOriginal159d6670770cb479b1921cea6416c26c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal159d6670770cb479b1921cea6416c26c = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.app-logo-icon','data' => ['class' => 'size-5 fill-current text-white dark:text-black']] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('app-logo-icon'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'size-5 fill-current text-white dark:text-black']); ?>
<?php \Livewire\Features\SupportCompiledWireKeys\SupportCompiledWireKeys::processComponentKey($component); ?>

<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $attributes = $__attributesOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__attributesOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal159d6670770cb479b1921cea6416c26c)): ?>
<?php $component = $__componentOriginal159d6670770cb479b1921cea6416c26c; ?>
<?php unset($__componentOriginal159d6670770cb479b1921cea6416c26c); ?>
<?php endif; ?>
        <?php $__slots2d9527122b76d0f9258fe9b8e31e8dac['logo'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), ['class' => 'flex aspect-square size-8 items-center justify-center rounded-md bg-accent-content text-accent-foreground']); ?>
<?php $__blaze->pushSlots($__slots2d9527122b76d0f9258fe9b8e31e8dac); ?>
<?php _2d9527122b76d0f9258fe9b8e31e8dac($__blaze, $__attrs2d9527122b76d0f9258fe9b8e31e8dac, $__slots2d9527122b76d0f9258fe9b8e31e8dac, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack2d9527122b76d0f9258fe9b8e31e8dac)) { $__slots2d9527122b76d0f9258fe9b8e31e8dac = array_pop($__slotsStack2d9527122b76d0f9258fe9b8e31e8dac); } ?>
<?php if (! empty($__attrsStack2d9527122b76d0f9258fe9b8e31e8dac)) { $__attrs2d9527122b76d0f9258fe9b8e31e8dac = array_pop($__attrsStack2d9527122b76d0f9258fe9b8e31e8dac); } ?>
<?php $__blaze->popData(); ?>
<?php endif; ?><?php if(\Livewire\Mechanisms\ExtendBlade\ExtendBlade::isRenderingLivewireComponent()): ?><!--[if ENDBLOCK]><![endif]--><?php endif; ?>
<?php /**PATH /home/caplinux/project/joki_web/resources/views/components/app-logo.blade.php ENDPATH**/ ?>