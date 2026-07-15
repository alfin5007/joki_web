<?php
if (!function_exists('_ebe8fb79545aaada00e10f3d912c29f1')):
function _ebe8fb79545aaada00e10f3d912c29f1($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<?php
$__defaults = [
    'iconVariant' => 'mini',
    'size' => null,
];
$iconVariant ??= $attributes['icon-variant'] ?? $attributes['iconVariant'] ?? $__defaults['iconVariant']; unset($attributes['iconVariant'], $attributes['icon-variant']);
$size ??= $attributes['size'] ?? $__defaults['size']; unset($attributes['size']);
unset($__defaults);
?>

<?php
$attributes = $attributes->merge([
    'variant' => 'subtle',
    'class' => '-me-1',
    'square' => true,
    'size' => null,
]);
?>

<?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/ec4ec44278de094141c3d96226ca947d.php'); ?>
<?php if (isset($__slotsec4ec44278de094141c3d96226ca947d)) { $__slotsStackec4ec44278de094141c3d96226ca947d[] = $__slotsec4ec44278de094141c3d96226ca947d; } ?>
<?php if (isset($__attrsec4ec44278de094141c3d96226ca947d)) { $__attrsStackec4ec44278de094141c3d96226ca947d[] = $__attrsec4ec44278de094141c3d96226ca947d; } ?>
<?php $__attrsec4ec44278de094141c3d96226ca947d = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','xData' => 'fluxInputViewable','xOn:click' => 'toggle()','xBind:dataViewableOpen' => 'open','ariaLabel' => e(__('Toggle password visibility'))]; ?>
<?php $__slotsec4ec44278de094141c3d96226ca947d = []; ?>
<?php $__blaze->pushData($__attrsec4ec44278de094141c3d96226ca947d); ?>
<?php ob_start(); ?>
    <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/icon/eye-slash.blade.php', $__blaze->compiledPath.'/bb0637f59748cad9df59e4fd27a91208.php'); ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block']); ?>
<?php _bb0637f59748cad9df59e4fd27a91208($__blaze, ['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/icon/eye.blade.php', $__blaze->compiledPath.'/2bebf752b8cdaee383c669d532e7b3fa.php'); ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden']); ?>
<?php _2bebf752b8cdaee383c669d532e7b3fa($__blaze, ['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php $__slotsec4ec44278de094141c3d96226ca947d['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsec4ec44278de094141c3d96226ca947d); ?>
<?php _ec4ec44278de094141c3d96226ca947d($__blaze, $__attrsec4ec44278de094141c3d96226ca947d, $__slotsec4ec44278de094141c3d96226ca947d, ['attributes', 'size'], ['xData' => 'x-data', 'xOn:click' => 'x-on:click', 'xBind:dataViewableOpen' => 'x-bind:data-viewable-open', 'ariaLabel' => 'aria-label'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackec4ec44278de094141c3d96226ca947d)) { $__slotsec4ec44278de094141c3d96226ca947d = array_pop($__slotsStackec4ec44278de094141c3d96226ca947d); } ?>
<?php if (! empty($__attrsStackec4ec44278de094141c3d96226ca947d)) { $__attrsec4ec44278de094141c3d96226ca947d = array_pop($__attrsStackec4ec44278de094141c3d96226ca947d); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH /home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/input/viewable.blade.php ENDPATH**/ ?>