@extends('layout')

@section('content')
    @foreach($products as $product)
        <div class="col-md-8">
            <h2>{{$product->title}}</h2>
            <p>{{$product->description}}</p>
            <p>Цена: ${{$product->price}}</p>
            <a href="/products/{{$product->alias}}" class="btn btn-primary">
                Подробное описание
            </a>
            <a href="/cart_add/{{$product->alias}}" class="btn btn-success">
                Добавить в корзину
            </a>
        </div>
    @endforeach

@endsection