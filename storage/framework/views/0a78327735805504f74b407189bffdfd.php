<?php
if (!function_exists('_0a78327735805504f74b407189bffdfd')):
function _0a78327735805504f74b407189bffdfd($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
extract(Flux::forwardedAttributes($attributes, [
    'tooltipPosition',
    'tooltipKbd',
    'tooltip',
]));
?>

<?php $tooltipPosition = $tooltipPosition ??= $attributes->pluck('tooltip:position'); ?>
<?php $tooltipKbd = $tooltipKbd ??= $attributes->pluck('tooltip:kbd'); ?>
<?php $tooltip = $tooltip ??= $attributes->pluck('tooltip'); ?>

<?php
$__defaults = [
    'tooltipPosition' => 'top',
    'tooltipKbd' => null,
    'tooltip' => null,
];
$tooltipPosition ??= $attributes['tooltip-position'] ?? $attributes['tooltipPosition'] ?? $__defaults['tooltipPosition']; unset($attributes['tooltipPosition'], $attributes['tooltip-position']);
$tooltipKbd ??= $attributes['tooltip-kbd'] ?? $attributes['tooltipKbd'] ?? $__defaults['tooltipKbd']; unset($attributes['tooltipKbd'], $attributes['tooltip-kbd']);
$tooltip ??= $attributes['tooltip'] ?? $__defaults['tooltip']; unset($attributes['tooltip']);
unset($__defaults);
?>

<?php if ($tooltip): ?>
    <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/e6b1fd8f6cbcb18397279128f52ec874.php'); ?>
<?php if (isset($__slotse6b1fd8f6cbcb18397279128f52ec874)) { $__slotsStacke6b1fd8f6cbcb18397279128f52ec874[] = $__slotse6b1fd8f6cbcb18397279128f52ec874; } ?>
<?php if (isset($__attrse6b1fd8f6cbcb18397279128f52ec874)) { $__attrsStacke6b1fd8f6cbcb18397279128f52ec874[] = $__attrse6b1fd8f6cbcb18397279128f52ec874; } ?>
<?php $__attrse6b1fd8f6cbcb18397279128f52ec874 = ['content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slotse6b1fd8f6cbcb18397279128f52ec874 = []; ?>
<?php $__blaze->pushData($__attrse6b1fd8f6cbcb18397279128f52ec874); ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $__slotse6b1fd8f6cbcb18397279128f52ec874['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotse6b1fd8f6cbcb18397279128f52ec874); ?>
<?php _e6b1fd8f6cbcb18397279128f52ec874($__blaze, $__attrse6b1fd8f6cbcb18397279128f52ec874, $__slotse6b1fd8f6cbcb18397279128f52ec874, ['content', 'position', 'kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStacke6b1fd8f6cbcb18397279128f52ec874)) { $__slotse6b1fd8f6cbcb18397279128f52ec874 = array_pop($__slotsStacke6b1fd8f6cbcb18397279128f52ec874); } ?>
<?php if (! empty($__attrsStacke6b1fd8f6cbcb18397279128f52ec874)) { $__attrse6b1fd8f6cbcb18397279128f52ec874 = array_pop($__attrsStacke6b1fd8f6cbcb18397279128f52ec874); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH /home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/with-tooltip.blade.php ENDPATH**/ ?>