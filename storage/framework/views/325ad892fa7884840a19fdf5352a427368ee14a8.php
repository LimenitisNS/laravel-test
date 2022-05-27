<?php $__env->startSection("content"); ?>
    <div class="container fd-c">
        <h1>Добавить товар</h1>
        <div class="message"><?php echo e($errors->message->first()); ?></div>
        <form action="/admin/add-product" enctype="multipart/form-data" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form__item">
                <input class="form__input" type="text" name="name" placeholder="Название" required>
            </div>
            <div class="form__item">
                <input class="form__input" type="text" name="author" placeholder="Автор" required>
            </div>
            <div class="form__item">
                <input class="form__input" type="number" name="price" placeholder="Цена" required>
            </div>
            <div class="form__item">
                <select required name="category_id">
                    <option value selected disabled>Категории</option>
                    <?php if(count($categories)): ?>
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($val->id); ?>"><?php echo e($val->name); ?></option>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                </select>
            </div>
            <div class="form__item">
                <input type="file" required name="image">
            </div>
            <div class="form__item">
                <button class="success__button">Добавить</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\request\resources\views/add-product.blade.php ENDPATH**/ ?>