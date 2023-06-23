@extends('base')

@section('content')
    <h2>Моделі</h2>

    @foreach ($products as $product)
        <div>
            <h3>{{ $product->name }}</h3>
            <h3>Вартість: {{ $product->price }}</h3>
            <h3>Опис: {{ $product->description }}</h3>
        </div>
    @endforeach

    @if (count($products) > 0)
        <h3>Загальна кількість моделей: {{ count($products) }}</h3>
    @else
        <h3>Немає доступних моделей.</h3>
    @endif
@endsection
