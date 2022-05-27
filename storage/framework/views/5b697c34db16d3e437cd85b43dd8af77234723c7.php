<?php $__env->startSection("content"); ?>
    <div class="container fd-c">
        <h1>Войти</h1>
        <div class="message"><?php echo e($errors->message->first()); ?></div>
        <form action="/auth/login" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form__item">
                <input class="form__input" type="text" name="login" placeholder="Login (латиница)" pattern="[a-zA-Z]{1,255}" required>
            </div>
            <div class="form__item">
                <input class="form__input" type="password" name="password" placeholder="Пароль" required>
            </div>
            <div class="form__item">
                <button class="success__button">Войти</button>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\request\resources\views/login.blade.php ENDPATH**/ ?>