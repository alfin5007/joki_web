<?php
if (!function_exists('_45f4b1d0e6ae06342e9f7d86e607a1b1')):
function _45f4b1d0e6ae06342e9f7d86e607a1b1($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    <?php $__blaze->ensureRequired('C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/tooltip/index.blade.php', $__blaze->compiledPath.'/22edaf4a6ce1a850b5ec89e869d9aa77.php'); ?>
<?php if (isset($__slots22edaf4a6ce1a850b5ec89e869d9aa77)) { $__slotsStack22edaf4a6ce1a850b5ec89e869d9aa77[] = $__slots22edaf4a6ce1a850b5ec89e869d9aa77; } ?>
<?php if (isset($__attrs22edaf4a6ce1a850b5ec89e869d9aa77)) { $__attrsStack22edaf4a6ce1a850b5ec89e869d9aa77[] = $__attrs22edaf4a6ce1a850b5ec89e869d9aa77; } ?>
<?php $__attrs22edaf4a6ce1a850b5ec89e869d9aa77 = ['content' => $tooltip,'position' => $tooltipPosition,'kbd' => $tooltipKbd]; ?>
<?php $__slots22edaf4a6ce1a850b5ec89e869d9aa77 = []; ?>
<?php $__blaze->pushData($__attrs22edaf4a6ce1a850b5ec89e869d9aa77); ?>
<?php ob_start(); ?>
        <?php echo e($slot); ?>

    <?php $__slots22edaf4a6ce1a850b5ec89e869d9aa77['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots22edaf4a6ce1a850b5ec89e869d9aa77); ?>
<?php _22edaf4a6ce1a850b5ec89e869d9aa77($__blaze, $__attrs22edaf4a6ce1a850b5ec89e869d9aa77, $__slots22edaf4a6ce1a850b5ec89e869d9aa77, ['content', 'position', 'kbd'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack22edaf4a6ce1a850b5ec89e869d9aa77)) { $__slots22edaf4a6ce1a850b5ec89e869d9aa77 = array_pop($__slotsStack22edaf4a6ce1a850b5ec89e869d9aa77); } ?>
<?php if (! empty($__attrsStack22edaf4a6ce1a850b5ec89e869d9aa77)) { $__attrs22edaf4a6ce1a850b5ec89e869d9aa77 = array_pop($__attrsStack22edaf4a6ce1a850b5ec89e869d9aa77); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/with-tooltip.blade.php ENDPATH**/ ?>