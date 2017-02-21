@extends('layout')

@section('content')
    @foreach($products as $product)
        <div class="col-md-8">
            <h2>{{$product->title}}</h2>
            <p>{{$product->description}}</p>
            <p>Цена: ${{$product->price}}</p>
            <a href="/products/{{$product->alias}}" class="btn btn-default">Оформить</a>
        </div>
    @endforeach

@endsection