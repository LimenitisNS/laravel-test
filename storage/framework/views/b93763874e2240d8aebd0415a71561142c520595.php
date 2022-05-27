<?php $__env->startSection("content"); ?>
<div class="container">
    <div class="w-100">
        <?php if(count($categories)): ?>
            <h2>Категории (всего <?php echo e($categories_count); ?>)</h2>
            <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="/admin/category/delete" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="categories w-100">
                        <span class="bold"><?php echo e($val->name); ?></span>
                        <button value="<?php echo e($val->id); ?>" name="category_id" class="delete-button">Удалить</button>
                    </div>
                </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
        <?php if(count($products)): ?>
            <h2>Товары (всего <?php echo e($products_count); ?>)</h2>
            <div class="w-100 d-f ai-c jc-sb">
                <span class="bold">Имя</span>
                <span class="bold">Автор</span>
                <span class="bold">Цена</span>
            </div>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <form action="/admin/category/delete" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="categories w-100">
                        <span class="bold"><?php echo e($val->name); ?></span>
                        <span class="bold"><?php echo e($val->author); ?></span>
                        <span class="bold"><?php echo e($val->price); ?></span>
                    </div>
                </form>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\request\resources\views/admin.blade.php ENDPATH**/ ?>