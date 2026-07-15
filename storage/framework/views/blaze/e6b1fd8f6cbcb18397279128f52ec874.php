<?php
if (!function_exists('__e6b1fd8f6cbcb18397279128f52ec874')):
function __e6b1fd8f6cbcb18397279128f52ec874($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
$__defaults = [
    'interactive' => null,
    'position' => 'top',
    'align' => 'center',
    'content' => null,
    'kbd' => null,
    'toggleable' => null,
];
$interactive ??= $attributes['interactive'] ?? $__defaults['interactive']; unset($attributes['interactive']);
$position ??= $attributes['position'] ?? $__defaults['position']; unset($attributes['position']);
$align ??= $attributes['align'] ?? $__defaults['align']; unset($attributes['align']);
$content ??= $attributes['content'] ?? $__defaults['content']; unset($attributes['content']);
$kbd ??= $attributes['kbd'] ?? $__defaults['kbd']; unset($attributes['kbd']);
$toggleable ??= $attributes['toggleable'] ?? $__defaults['toggleable']; unset($attributes['toggleable']);
unset($__defaults);
?>

<?php
// Support adding the .self modifier to the wire:model directive...
if (($wireModel = $attributes->wire('model')) && $wireModel->directive && ! $wireModel->hasModifier('self')) {
    unset($attributes[$wireModel->directive]);

    $wireModel->directive .= '.self';

    $attributes = $attributes->merge([$wireModel->directive => $wireModel->value]);
}
?>

<?php if ($toggleable): ?>
    <ui-dropdown position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/d496b9a6d67da283e2c0f4f95e174d25.php'); ?>
<?php if (isset($__slotsd496b9a6d67da283e2c0f4f95e174d25)) { $__slotsStackd496b9a6d67da283e2c0f4f95e174d25[] = $__slotsd496b9a6d67da283e2c0f4f95e174d25; } ?>
<?php if (isset($__attrsd496b9a6d67da283e2c0f4f95e174d25)) { $__attrsStackd496b9a6d67da283e2c0f4f95e174d25[] = $__attrsd496b9a6d67da283e2c0f4f95e174d25; } ?>
<?php $__attrsd496b9a6d67da283e2c0f4f95e174d25 = ['kbd' => $kbd]; ?>
<?php $__slotsd496b9a6d67da283e2c0f4f95e174d25 = []; ?>
<?php $__blaze->pushData($__attrsd496b9a6d67da283e2c0f4f95e174d25); ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $__slotsd496b9a6d67da283e2c0f4f95e174d25['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotsd496b9a6d67da283e2c0f4f95e174d25); ?>
<?php __d496b9a6d67da283e2c0f4f95e174d25($__blaze, $__attrsd496b9a6d67da283e2c0f4f95e174d25, $__slotsd496b9a6d67da283e2c0f4f95e174d25, ['kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackd496b9a6d67da283e2c0f4f95e174d25)) { $__slotsd496b9a6d67da283e2c0f4f95e174d25 = array_pop($__slotsStackd496b9a6d67da283e2c0f4f95e174d25); } ?>
<?php if (! empty($__attrsStackd496b9a6d67da283e2c0f4f95e174d25)) { $__attrsd496b9a6d67da283e2c0f4f95e174d25 = array_pop($__attrsStackd496b9a6d67da283e2c0f4f95e174d25); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-dropdown>
<?php else: ?>
    <ui-tooltip position="<?php echo e($position); ?> <?php echo e($align); ?>" <?php echo e($attributes); ?> data-flux-tooltip <?php if($interactive): ?> interactive <?php endif; ?>>
        <?php echo e($slot); ?>


        <?php if ($content !== null): ?>
            <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/tooltip/content.blade.php', $__blaze->compiledPath.'/d496b9a6d67da283e2c0f4f95e174d25.php'); ?>
<?php if (isset($__slotsd496b9a6d67da283e2c0f4f95e174d25)) { $__slotsStackd496b9a6d67da283e2c0f4f95e174d25[] = $__slotsd496b9a6d67da283e2c0f4f95e174d25; } ?>
<?php if (isset($__attrsd496b9a6d67da283e2c0f4f95e174d25)) { $__attrsStackd496b9a6d67da283e2c0f4f95e174d25[] = $__attrsd496b9a6d67da283e2c0f4f95e174d25; } ?>
<?php $__attrsd496b9a6d67da283e2c0f4f95e174d25 = ['kbd' => $kbd]; ?>
<?php $__slotsd496b9a6d67da283e2c0f4f95e174d25 = []; ?>
<?php $__blaze->pushData($__attrsd496b9a6d67da283e2c0f4f95e174d25); ?>
<?php ob_start(); ?><?php echo e($content); ?><?php $__slotsd496b9a6d67da283e2c0f4f95e174d25['slot'] = new \Illuminate\View\ComponentSlot($__blaze->processPassthroughContent('trim', trim(ob_get_clean())), []); ?>
<?php $__blaze->pushSlots($__slotsd496b9a6d67da283e2c0f4f95e174d25); ?>
<?php __d496b9a6d67da283e2c0f4f95e174d25($__blaze, $__attrsd496b9a6d67da283e2c0f4f95e174d25, $__slotsd496b9a6d67da283e2c0f4f95e174d25, ['kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackd496b9a6d67da283e2c0f4f95e174d25)) { $__slotsd496b9a6d67da283e2c0f4f95e174d25 = array_pop($__slotsStackd496b9a6d67da283e2c0f4f95e174d25); } ?>
<?php if (! empty($__attrsStackd496b9a6d67da283e2c0f4f95e174d25)) { $__attrsd496b9a6d67da283e2c0f4f95e174d25 = array_pop($__attrsStackd496b9a6d67da283e2c0f4f95e174d25); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    </ui-tooltip>
<?php endif; ?>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH /home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/tooltip/index.blade.php ENDPATH**/ ?>