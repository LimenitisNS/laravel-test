@extends("layout")

@section("content")
<div class="container">
    <div class="w-100">
        @if(count($categories))
            <h2>Категории (всего {{ $categories_count }})</h2>
            @foreach($categories as $val)
                <form action="/admin/category/delete" method="POST">
                    @csrf
                    <div class="categories w-100">
                        <span class="bold">{{ $val->name }}</span>
                        <button value="{{ $val->id }}" name="category_id" class="delete-button">Удалить</button>
                    </div>
                </form>
            @endforeach
        @endif
        @if(count($products))
            <h2>Товары (всего {{ $products_count }})</h2>
            <div class="w-100 d-f ai-c jc-sb">
                <span class="bold">Имя</span>
                <span class="bold">Автор</span>
                <span class="bold">Цена</span>
            </div>
            @foreach($products as $val)
                <form action="/admin/category/delete" method="POST">
                    @csrf
                    <div class="categories w-100">
                        <span class="bold">{{ $val->name }}</span>
                        <span class="bold">{{ $val->author }}</span>
                        <span class="bold">{{ $val->price }}</span>
                    </div>
                </form>
            @endforeach
        @endif
    </div>
</div>
@endsection
