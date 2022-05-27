<?php $__env->startSection("content"); ?>
<div class="container fd-c">
    <div class="message"><?php echo e($errors->message->first()); ?></div>
    <h1>Главная</h1>
</div>
<?php $__env->stopSection(); ?>









<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\request\resources\views/index.blade.php ENDPATH**/ ?>