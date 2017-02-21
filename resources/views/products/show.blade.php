@extends('layout')

@section('content')
    <div class="col-md-8">
        <h2>{{$product->title}}</h2>
        <p>{{$product->description}}</p>
        <p>Цена: ${{$product->price}}</p>
        <a href="/" class="btn btn-default">Go back</a>
    </div>
@endsection