<?php
if (!function_exists('_3d140a2798f32cbc8ad40430773db770')):
function _3d140a2798f32cbc8ad40430773db770($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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

<?php $__blaze->ensureRequired('C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/button/index.blade.php', $__blaze->compiledPath.'/9eb2cf6a27cfd6774045e89b4e1c10b8.php'); ?>
<?php if (isset($__slots9eb2cf6a27cfd6774045e89b4e1c10b8)) { $__slotsStack9eb2cf6a27cfd6774045e89b4e1c10b8[] = $__slots9eb2cf6a27cfd6774045e89b4e1c10b8; } ?>
<?php if (isset($__attrs9eb2cf6a27cfd6774045e89b4e1c10b8)) { $__attrsStack9eb2cf6a27cfd6774045e89b4e1c10b8[] = $__attrs9eb2cf6a27cfd6774045e89b4e1c10b8; } ?>
<?php $__attrs9eb2cf6a27cfd6774045e89b4e1c10b8 = ['attributes' => $attributes,'size' => $size === 'sm' || $size === 'xs' ? 'xs' : 'sm','xData' => 'fluxInputViewable','xOn:click' => 'toggle()','xBind:dataViewableOpen' => 'open','ariaLabel' => e(__('Toggle password visibility'))]; ?>
<?php $__slots9eb2cf6a27cfd6774045e89b4e1c10b8 = []; ?>
<?php $__blaze->pushData($__attrs9eb2cf6a27cfd6774045e89b4e1c10b8); ?>
<?php ob_start(); ?>
    <?php $__blaze->ensureRequired('C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye-slash.blade.php', $__blaze->compiledPath.'/8a9579a32a6190527589d72decc59127.php'); ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block']); ?>
<?php _8a9579a32a6190527589d72decc59127($__blaze, ['variant' => $iconVariant,'class' => 'hidden [[data-viewable-open]>&]:block'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
    <?php $__blaze->ensureRequired('C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/icon/eye.blade.php', $__blaze->compiledPath.'/f75d964719c5ee290d08dee70fac4962.php'); ?>
<?php $__blaze->pushData(['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden']); ?>
<?php _f75d964719c5ee290d08dee70fac4962($__blaze, ['variant' => $iconVariant,'class' => 'block [[data-viewable-open]>&]:hidden'], [], ['variant'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
<?php $__slots9eb2cf6a27cfd6774045e89b4e1c10b8['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots9eb2cf6a27cfd6774045e89b4e1c10b8); ?>
<?php _9eb2cf6a27cfd6774045e89b4e1c10b8($__blaze, $__attrs9eb2cf6a27cfd6774045e89b4e1c10b8, $__slots9eb2cf6a27cfd6774045e89b4e1c10b8, ['attributes', 'size'], ['xData' => 'x-data', 'xOn:click' => 'x-on:click', 'xBind:dataViewableOpen' => 'x-bind:data-viewable-open', 'ariaLabel' => 'aria-label'], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack9eb2cf6a27cfd6774045e89b4e1c10b8)) { $__slots9eb2cf6a27cfd6774045e89b4e1c10b8 = array_pop($__slotsStack9eb2cf6a27cfd6774045e89b4e1c10b8); } ?>
<?php if (! empty($__attrsStack9eb2cf6a27cfd6774045e89b4e1c10b8)) { $__attrs9eb2cf6a27cfd6774045e89b4e1c10b8 = array_pop($__attrsStack9eb2cf6a27cfd6774045e89b4e1c10b8); } ?>
<?php $__blaze->popData(); ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/input/viewable.blade.php ENDPATH**/ ?>