<?php
if (!function_exists('__f942602784b6890061a862b59cb2425b')):
function __f942602784b6890061a862b59cb2425b($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;
$__slots['slot'] ??= new \Illuminate\View\ComponentSlot('');
if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<tbody <?php echo e($attributes); ?> data-flux-rows>
    <?php echo e($slot); ?>

</tbody>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH /home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/table/rows.blade.php ENDPATH**/ ?>