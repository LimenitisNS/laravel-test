@extends("layout")

@section("content")
    <div class="container fd-c">
        <h1>Войти</h1>
        <div class="message">{{ $errors->message->first() }}</div>
        <form action="/auth/login" method="POST">
            @csrf
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
@endsection
