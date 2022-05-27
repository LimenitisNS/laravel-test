<?php $__env->startSection("content"); ?>
<div class="registration container fd-c">
    <h1>Регистрация</h1>
    <div class="message"><?php echo e($errors->message->first()); ?></div>
    <form action="/auth/register" method="POST">
        <?php echo csrf_field(); ?>
        <div class="form__item">
            <input class="form__input" type="text" name="name" placeholder="Имя (кириллица, тире, пробел)" pattern="[а-яА-ЯёЁ\-\s]{1,255}" required>
        </div>
        <div class="form__item">
            <input class="form__input" type="text" name="surname" placeholder="Фамилия (кириллица, тире, пробел)" pattern="[а-яА-ЯёЁ\-\s]{1,255}" required>
        </div>
        <div class="form__item">
            <input class="form__input" type="text" name="patronymic" placeholder="Отчество (кириллица, тире, пробел)" pattern="[а-яА-ЯёЁ\-\s]{1,255}">
        </div>
        <div class="form__item">
            <input class="form__input" type="text" name="login" placeholder="Login (латиница)" pattern="[a-zA-Z]{1,255}" required>
        </div>
        <div class="form__item">
            <input class="form__input" type="email" name="email" placeholder="Email" required>
        </div>
        <div class="form__item">
            <input class="form__input" type="password" name="password" placeholder="Пароль" required>
        </div>
        <div class="form__item">
            <input class="form__input" type="password" name="password_confirmation" placeholder="Повтор пароля" required>
        </div>
        <div class="form__item d-f ai-c">
            <input type="checkbox" required>
            <span style="margin-left: 8px">Согласие на обработку персональных данных</span>
        </div>
        <div class="form__item">
            <button class="success__button">Зарегистрироваться</button>
        </div>
    </form>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\OpenServer\domains\request\resources\views/registration.blade.php ENDPATH**/ ?>