<?php
if (!function_exists('_4e71d64aa7947e14c572074d2d84f900')):
function _4e71d64aa7947e14c572074d2d84f900($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    'name',
    'descriptionTrailing',
    'description',
    'label',
    'badge',
]));
?>

<?php $descriptionTrailing = $descriptionTrailing ??= $attributes->pluck('description:trailing'); ?>

<?php
$__defaults = [
    'name' => $attributes->whereStartsWith('wire:model')->first(),
    'descriptionTrailing' => null,
    'description' => null,
    'label' => null,
    'badge' => null,
];
$name ??= $attributes['name'] ?? $__defaults['name']; unset($attributes['name']);
$descriptionTrailing ??= $attributes['description-trailing'] ?? $attributes['descriptionTrailing'] ?? $__defaults['descriptionTrailing']; unset($attributes['descriptionTrailing'], $attributes['description-trailing']);
$description ??= $attributes['description'] ?? $__defaults['description']; unset($attributes['description']);
$label ??= $attributes['label'] ?? $__defaults['label']; unset($attributes['label']);
$badge ??= $attributes['badge'] ?? $__defaults['badge']; unset($attributes['badge']);
unset($__defaults);
?>

<?php if (isset($label) || isset($description)): ?>
    <?php

        $fieldAttributes = Flux::attributesAfter('field:', $attributes, []);
        $labelAttributes = Flux::attributesAfter('label:', $attributes, ['badge' => $badge]);
        $descriptionAttributes = Flux::attributesAfter('description:', $attributes, []);
        $errorAttributes = Flux::attributesAfter('error:', $attributes, ['name' => $name]);
    ?>
    <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/field.blade.php', $__blaze->compiledPath.'/9021a2d92d79947fecebdf880ea29ba3.php'); ?>
<?php if (isset($__slots9021a2d92d79947fecebdf880ea29ba3)) { $__slotsStack9021a2d92d79947fecebdf880ea29ba3[] = $__slots9021a2d92d79947fecebdf880ea29ba3; } ?>
<?php if (isset($__attrs9021a2d92d79947fecebdf880ea29ba3)) { $__attrsStack9021a2d92d79947fecebdf880ea29ba3[] = $__attrs9021a2d92d79947fecebdf880ea29ba3; } ?>
<?php $__attrs9021a2d92d79947fecebdf880ea29ba3 = ['attributes' => $fieldAttributes]; ?>
<?php $__slots9021a2d92d79947fecebdf880ea29ba3 = []; ?>
<?php $__blaze->pushData($__attrs9021a2d92d79947fecebdf880ea29ba3); ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/label.blade.php', $__blaze->compiledPath.'/c3190d4d881ba947cd08850b055ba839.php'); ?>
<?php if (isset($__slotsc3190d4d881ba947cd08850b055ba839)) { $__slotsStackc3190d4d881ba947cd08850b055ba839[] = $__slotsc3190d4d881ba947cd08850b055ba839; } ?>
<?php if (isset($__attrsc3190d4d881ba947cd08850b055ba839)) { $__attrsStackc3190d4d881ba947cd08850b055ba839[] = $__attrsc3190d4d881ba947cd08850b055ba839; } ?>
<?php $__attrsc3190d4d881ba947cd08850b055ba839 = ['attributes' => $labelAttributes]; ?>
<?php $__slotsc3190d4d881ba947cd08850b055ba839 = []; ?>
<?php $__blaze->pushData($__attrsc3190d4d881ba947cd08850b055ba839); ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slotsc3190d4d881ba947cd08850b055ba839['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsc3190d4d881ba947cd08850b055ba839); ?>
<?php _c3190d4d881ba947cd08850b055ba839($__blaze, $__attrsc3190d4d881ba947cd08850b055ba839, $__slotsc3190d4d881ba947cd08850b055ba839, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackc3190d4d881ba947cd08850b055ba839)) { $__slotsc3190d4d881ba947cd08850b055ba839 = array_pop($__slotsStackc3190d4d881ba947cd08850b055ba839); } ?>
<?php if (! empty($__attrsStackc3190d4d881ba947cd08850b055ba839)) { $__attrsc3190d4d881ba947cd08850b055ba839 = array_pop($__attrsStackc3190d4d881ba947cd08850b055ba839); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/5ba5f7f354a939354d7c93f0628c5386.php'); ?>
<?php if (isset($__slots5ba5f7f354a939354d7c93f0628c5386)) { $__slotsStack5ba5f7f354a939354d7c93f0628c5386[] = $__slots5ba5f7f354a939354d7c93f0628c5386; } ?>
<?php if (isset($__attrs5ba5f7f354a939354d7c93f0628c5386)) { $__attrsStack5ba5f7f354a939354d7c93f0628c5386[] = $__attrs5ba5f7f354a939354d7c93f0628c5386; } ?>
<?php $__attrs5ba5f7f354a939354d7c93f0628c5386 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots5ba5f7f354a939354d7c93f0628c5386 = []; ?>
<?php $__blaze->pushData($__attrs5ba5f7f354a939354d7c93f0628c5386); ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slots5ba5f7f354a939354d7c93f0628c5386['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots5ba5f7f354a939354d7c93f0628c5386); ?>
<?php _5ba5f7f354a939354d7c93f0628c5386($__blaze, $__attrs5ba5f7f354a939354d7c93f0628c5386, $__slots5ba5f7f354a939354d7c93f0628c5386, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack5ba5f7f354a939354d7c93f0628c5386)) { $__slots5ba5f7f354a939354d7c93f0628c5386 = array_pop($__slotsStack5ba5f7f354a939354d7c93f0628c5386); } ?>
<?php if (! empty($__attrsStack5ba5f7f354a939354d7c93f0628c5386)) { $__attrs5ba5f7f354a939354d7c93f0628c5386 = array_pop($__attrsStack5ba5f7f354a939354d7c93f0628c5386); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        
        <?php $__getScope = fn($scope = []) => $scope; ?><?php if (isset($scope)) $__scope = $scope; ?><?php $scope = $__getScope(scope: ['attributes' => $errorAttributes->getAttributes()]); ?>
        <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/error.blade.php', $__blaze->compiledPath.'/89e3d77fd3f13e34c0b0d85b0a3c4d83.php'); ?>
<?php $__blaze->pushData(['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])]); ?>
<?php _89e3d77fd3f13e34c0b0d85b0a3c4d83($__blaze, ['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])], [], ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
        <?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>

        <?php if (isset($descriptionTrailing)): ?>
            <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/5ba5f7f354a939354d7c93f0628c5386.php'); ?>
<?php if (isset($__slots5ba5f7f354a939354d7c93f0628c5386)) { $__slotsStack5ba5f7f354a939354d7c93f0628c5386[] = $__slots5ba5f7f354a939354d7c93f0628c5386; } ?>
<?php if (isset($__attrs5ba5f7f354a939354d7c93f0628c5386)) { $__attrsStack5ba5f7f354a939354d7c93f0628c5386[] = $__attrs5ba5f7f354a939354d7c93f0628c5386; } ?>
<?php $__attrs5ba5f7f354a939354d7c93f0628c5386 = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots5ba5f7f354a939354d7c93f0628c5386 = []; ?>
<?php $__blaze->pushData($__attrs5ba5f7f354a939354d7c93f0628c5386); ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slots5ba5f7f354a939354d7c93f0628c5386['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots5ba5f7f354a939354d7c93f0628c5386); ?>
<?php _5ba5f7f354a939354d7c93f0628c5386($__blaze, $__attrs5ba5f7f354a939354d7c93f0628c5386, $__slots5ba5f7f354a939354d7c93f0628c5386, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack5ba5f7f354a939354d7c93f0628c5386)) { $__slots5ba5f7f354a939354d7c93f0628c5386 = array_pop($__slotsStack5ba5f7f354a939354d7c93f0628c5386); } ?>
<?php if (! empty($__attrsStack5ba5f7f354a939354d7c93f0628c5386)) { $__attrs5ba5f7f354a939354d7c93f0628c5386 = array_pop($__attrsStack5ba5f7f354a939354d7c93f0628c5386); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slots9021a2d92d79947fecebdf880ea29ba3['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots9021a2d92d79947fecebdf880ea29ba3); ?>
<?php _9021a2d92d79947fecebdf880ea29ba3($__blaze, $__attrs9021a2d92d79947fecebdf880ea29ba3, $__slots9021a2d92d79947fecebdf880ea29ba3, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack9021a2d92d79947fecebdf880ea29ba3)) { $__slots9021a2d92d79947fecebdf880ea29ba3 = array_pop($__slotsStack9021a2d92d79947fecebdf880ea29ba3); } ?>
<?php if (! empty($__attrsStack9021a2d92d79947fecebdf880ea29ba3)) { $__attrs9021a2d92d79947fecebdf880ea29ba3 = array_pop($__attrsStack9021a2d92d79947fecebdf880ea29ba3); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH /home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/with-field.blade.php ENDPATH**/ ?>