@extends("layout")

@section("content")
    <div class="container fd-c">
        <h1>Добавить товар</h1>
        <div class="message">{{ $errors->message->first() }}</div>
        <form action="/admin/add-product" enctype="multipart/form-data" method="POST">
            @csrf
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
                    @if(count($categories))
                        @foreach($categories as $val)
                            <option value="{{ $val->id }}">{{ $val->name }}</option>
                        @endforeach
                    @endif
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
@endsection
