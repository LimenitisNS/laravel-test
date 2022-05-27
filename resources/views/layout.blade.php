@php
    if(Auth::check())
        $role = Auth::user()->role;
    else $role = "guest";
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Request</title>
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
</head>
<body>
<header class="header">
    <div class="container ai-c h-100">
        <div class="d-f jc-sb w-100">
            <div class="header__logo">
                <a href="/" style="color: whitesmoke; text-decoration: none" >FCL</a>
            </div>
            <div class="header__actions d-f ai-c">
                @if($role == "admin")
                    <a href="/profile">Личный кабинет</a>
                    <a href="/add-product">Товары</a>
                    <a href="/logout">Выход</a>
                @elseif($role == "user")
                    <a href="/profile">Личный кабинет</a>
                    <a href="/logout">Выход</a>
                @else
                    <a href="/registration">Регистрация</a>
                    <a href="/login">Войти</a>
                @endif
            </div>
        </div>
    </div>
</header>
<main>
    <div class="content">
        @yield("content")
    </div>
</main>
</body>
</html>
