<?php
if (!function_exists('_78e8109092d2a92e0a6929ab7b7f3af2')):
function _78e8109092d2a92e0a6929ab7b7f3af2($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
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
    <?php $__blaze->ensureRequired('C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/field.blade.php', $__blaze->compiledPath.'/c72e6ea7bb0cda27a51e5cadf72c201e.php'); ?>
<?php if (isset($__slotsc72e6ea7bb0cda27a51e5cadf72c201e)) { $__slotsStackc72e6ea7bb0cda27a51e5cadf72c201e[] = $__slotsc72e6ea7bb0cda27a51e5cadf72c201e; } ?>
<?php if (isset($__attrsc72e6ea7bb0cda27a51e5cadf72c201e)) { $__attrsStackc72e6ea7bb0cda27a51e5cadf72c201e[] = $__attrsc72e6ea7bb0cda27a51e5cadf72c201e; } ?>
<?php $__attrsc72e6ea7bb0cda27a51e5cadf72c201e = ['attributes' => $fieldAttributes]; ?>
<?php $__slotsc72e6ea7bb0cda27a51e5cadf72c201e = []; ?>
<?php $__blaze->pushData($__attrsc72e6ea7bb0cda27a51e5cadf72c201e); ?>
<?php ob_start(); ?>
        <?php if (isset($label)): ?>
            <?php $__blaze->ensureRequired('C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/label.blade.php', $__blaze->compiledPath.'/3db6eb6ad3bb483719458fef856254b6.php'); ?>
<?php if (isset($__slots3db6eb6ad3bb483719458fef856254b6)) { $__slotsStack3db6eb6ad3bb483719458fef856254b6[] = $__slots3db6eb6ad3bb483719458fef856254b6; } ?>
<?php if (isset($__attrs3db6eb6ad3bb483719458fef856254b6)) { $__attrsStack3db6eb6ad3bb483719458fef856254b6[] = $__attrs3db6eb6ad3bb483719458fef856254b6; } ?>
<?php $__attrs3db6eb6ad3bb483719458fef856254b6 = ['attributes' => $labelAttributes]; ?>
<?php $__slots3db6eb6ad3bb483719458fef856254b6 = []; ?>
<?php $__blaze->pushData($__attrs3db6eb6ad3bb483719458fef856254b6); ?>
<?php ob_start(); ?><?php echo e($label); ?><?php $__slots3db6eb6ad3bb483719458fef856254b6['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots3db6eb6ad3bb483719458fef856254b6); ?>
<?php _3db6eb6ad3bb483719458fef856254b6($__blaze, $__attrs3db6eb6ad3bb483719458fef856254b6, $__slots3db6eb6ad3bb483719458fef856254b6, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack3db6eb6ad3bb483719458fef856254b6)) { $__slots3db6eb6ad3bb483719458fef856254b6 = array_pop($__slotsStack3db6eb6ad3bb483719458fef856254b6); } ?>
<?php if (! empty($__attrsStack3db6eb6ad3bb483719458fef856254b6)) { $__attrs3db6eb6ad3bb483719458fef856254b6 = array_pop($__attrsStack3db6eb6ad3bb483719458fef856254b6); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php if (isset($description)): ?>
            <?php $__blaze->ensureRequired('C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/8c60231be13ba0311826a3c5e2eaeaee.php'); ?>
<?php if (isset($__slots8c60231be13ba0311826a3c5e2eaeaee)) { $__slotsStack8c60231be13ba0311826a3c5e2eaeaee[] = $__slots8c60231be13ba0311826a3c5e2eaeaee; } ?>
<?php if (isset($__attrs8c60231be13ba0311826a3c5e2eaeaee)) { $__attrsStack8c60231be13ba0311826a3c5e2eaeaee[] = $__attrs8c60231be13ba0311826a3c5e2eaeaee; } ?>
<?php $__attrs8c60231be13ba0311826a3c5e2eaeaee = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots8c60231be13ba0311826a3c5e2eaeaee = []; ?>
<?php $__blaze->pushData($__attrs8c60231be13ba0311826a3c5e2eaeaee); ?>
<?php ob_start(); ?><?php echo e($description); ?><?php $__slots8c60231be13ba0311826a3c5e2eaeaee['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots8c60231be13ba0311826a3c5e2eaeaee); ?>
<?php _8c60231be13ba0311826a3c5e2eaeaee($__blaze, $__attrs8c60231be13ba0311826a3c5e2eaeaee, $__slots8c60231be13ba0311826a3c5e2eaeaee, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack8c60231be13ba0311826a3c5e2eaeaee)) { $__slots8c60231be13ba0311826a3c5e2eaeaee = array_pop($__slotsStack8c60231be13ba0311826a3c5e2eaeaee); } ?>
<?php if (! empty($__attrsStack8c60231be13ba0311826a3c5e2eaeaee)) { $__attrs8c60231be13ba0311826a3c5e2eaeaee = array_pop($__attrsStack8c60231be13ba0311826a3c5e2eaeaee); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>

        <?php echo e($slot); ?>


        
        <?php $__getScope = fn($scope = []) => $scope; ?><?php if (isset($scope)) $__scope = $scope; ?><?php $scope = $__getScope(scope: ['attributes' => $errorAttributes->getAttributes()]); ?>
        <?php $__blaze->ensureRequired('C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/error.blade.php', $__blaze->compiledPath.'/2404d00002dd3b730d8d228f7e58b818.php'); ?>
<?php $__blaze->pushData(['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])]); ?>
<?php _2404d00002dd3b730d8d228f7e58b818($__blaze, ['attributes' => new \Illuminate\View\ComponentAttributeBag($scope['attributes'])], [], ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
        <?php if (isset($__scope)) { $scope = $__scope; unset($__scope); } ?>

        <?php if (isset($descriptionTrailing)): ?>
            <?php $__blaze->ensureRequired('C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/description.blade.php', $__blaze->compiledPath.'/8c60231be13ba0311826a3c5e2eaeaee.php'); ?>
<?php if (isset($__slots8c60231be13ba0311826a3c5e2eaeaee)) { $__slotsStack8c60231be13ba0311826a3c5e2eaeaee[] = $__slots8c60231be13ba0311826a3c5e2eaeaee; } ?>
<?php if (isset($__attrs8c60231be13ba0311826a3c5e2eaeaee)) { $__attrsStack8c60231be13ba0311826a3c5e2eaeaee[] = $__attrs8c60231be13ba0311826a3c5e2eaeaee; } ?>
<?php $__attrs8c60231be13ba0311826a3c5e2eaeaee = ['attributes' => $descriptionAttributes]; ?>
<?php $__slots8c60231be13ba0311826a3c5e2eaeaee = []; ?>
<?php $__blaze->pushData($__attrs8c60231be13ba0311826a3c5e2eaeaee); ?>
<?php ob_start(); ?><?php echo e($descriptionTrailing); ?><?php $__slots8c60231be13ba0311826a3c5e2eaeaee['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slots8c60231be13ba0311826a3c5e2eaeaee); ?>
<?php _8c60231be13ba0311826a3c5e2eaeaee($__blaze, $__attrs8c60231be13ba0311826a3c5e2eaeaee, $__slots8c60231be13ba0311826a3c5e2eaeaee, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStack8c60231be13ba0311826a3c5e2eaeaee)) { $__slots8c60231be13ba0311826a3c5e2eaeaee = array_pop($__slotsStack8c60231be13ba0311826a3c5e2eaeaee); } ?>
<?php if (! empty($__attrsStack8c60231be13ba0311826a3c5e2eaeaee)) { $__attrs8c60231be13ba0311826a3c5e2eaeaee = array_pop($__attrsStack8c60231be13ba0311826a3c5e2eaeaee); } ?>
<?php $__blaze->popData(); ?>
        <?php endif; ?>
    <?php $__slotsc72e6ea7bb0cda27a51e5cadf72c201e['slot'] = new \Illuminate\View\ComponentSlot(trim(ob_get_clean()), []); ?>
<?php $__blaze->pushSlots($__slotsc72e6ea7bb0cda27a51e5cadf72c201e); ?>
<?php _c72e6ea7bb0cda27a51e5cadf72c201e($__blaze, $__attrsc72e6ea7bb0cda27a51e5cadf72c201e, $__slotsc72e6ea7bb0cda27a51e5cadf72c201e, ['attributes'], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php if (! empty($__slotsStackc72e6ea7bb0cda27a51e5cadf72c201e)) { $__slotsc72e6ea7bb0cda27a51e5cadf72c201e = array_pop($__slotsStackc72e6ea7bb0cda27a51e5cadf72c201e); } ?>
<?php if (! empty($__attrsStackc72e6ea7bb0cda27a51e5cadf72c201e)) { $__attrsc72e6ea7bb0cda27a51e5cadf72c201e = array_pop($__attrsStackc72e6ea7bb0cda27a51e5cadf72c201e); } ?>
<?php $__blaze->popData(); ?>
<?php else: ?>
    <?php echo e($slot); ?>

<?php endif; ?>
<?php
echo ltrim(ob_get_clean());
} endif; ?><?php /**PATH C:\laragon\www\joki-web\vendor\livewire\flux\src/../stubs/resources/views/flux/with-field.blade.php ENDPATH**/ ?>