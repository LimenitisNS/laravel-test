@extends("layout")

@section("content")
<div class="container fd-c">
    <div class="message">{{ $errors->message->first() }}</div>
    <h1>Главная</h1>
</div>
@endsection

{{--@if(count($categories))--}}
{{--    @foreach($categories as $val)--}}
{{--        <div class="col">--}}
{{--            <h3>{{ $val->name }}</h3>--}}
{{--        </div>--}}
{{--    @endforeach--}}
{{--@endif--}}
