<?php
    if(Auth::check())
        $role = Auth::user()->role;
    else $role = "guest";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/style.css')); ?>">
</head>
<body>
<header class="header">
    <div class="container ai-c h-100">
        <div class="d-f jc-sb w-100">
            <div class="header__logo">
                <a href="/" style="color: whitesmoke; text-decoration: none" >FCL</a>
            </div>
            <div class="header__actions d-f ai-c">
                <?php if($role == "admin"): ?>
                    <a href="/profile">Личный кабинет</a>
                    <a href="/add-product">Товары</a>
                    <a href="/logout">Выход</a>
                <?php elseif($role == "user"): ?>
                    <a href="/profile">Личный кабинет</a>
                    <a href="/logout">Выход</a>
                <?php else: ?>
                    <a href="/registration">Регистрация</a>
                    <a href="/login">Войти</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</header>
<main>
    <div class="content">
        <?php echo $__env->yieldContent("content"); ?>
    </div>
</main>
</body>
</html>
<?php /**PATH C:\OpenServer\domains\request\resources\views/layout.blade.php ENDPATH**/ ?>