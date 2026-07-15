<?php
if (!function_exists('__eafc97c1f1c2b278840f5d1369cd8be2')):
function __eafc97c1f1c2b278840f5d1369cd8be2($__blaze, $__data = [], $__slots = [], $__bound = [], $__keys = [], $__this = null) {
$__env = $__blaze->env;

if (($__data['attributes'] ?? null) instanceof \Illuminate\View\ComponentAttributeBag) { $__data = $__data + $__data['attributes']->all(); unset($__data['attributes']); }
extract($__slots, EXTR_SKIP); unset($__slots);
extract($__data, EXTR_SKIP);
$attributes = \Livewire\Blaze\Runtime\BlazeAttributeBag::make($__data, $__bound, $__keys);
unset($__data, $__bound, $__keys);
ob_start();
?>


<div class="-mx-[.3125rem] my-[.3125rem] h-px" <?php echo e($attributes); ?> data-flux-menu-separator>
    <?php $__blaze->ensureRequired('/home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/separator.blade.php', $__blaze->compiledPath.'/dbd975427bd1da9a75e3fb3d93179616.php'); ?>
<?php $__blaze->pushData(['class' => 'dark:bg-zinc-600!']); ?>
<?php __dbd975427bd1da9a75e3fb3d93179616($__blaze, ['class' => 'dark:bg-zinc-600!'], [], [], [], $__this ?? (isset($this) ? $this : null)); ?>
<?php $__blaze->popData(); ?>
</div>
<?php
echo $__blaze->processPassthroughContent('ltrim', ltrim(ob_get_clean()));
} endif; ?><?php /**PATH /home/caplinux/project/joki_web/vendor/livewire/flux/src/../stubs/resources/views/flux/menu/separator.blade.php ENDPATH**/ ?>