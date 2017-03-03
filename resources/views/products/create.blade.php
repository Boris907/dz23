@extends('layout')

@section('content')
    <div class="col-sm-push-2 col-sm-8">
        <h2>Новый товар</h2>
        <form action="/products" method="POST" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="title">Название</label>
                <input type="text" class="form-control" name="title" id="title">
            </div>
            <div class="form-group">
                <label for="alias">Alias</label>
                <input type="text" class="form-control" name="alias" id="alias">
            </div>
            <div class="form-group">
                <label for="price">Цена</label>
                <input type="text" class="form-control" name="price" id="price">
            </div>
            <div class="form-group">
                <label for="description">Описание</label>
                <textarea class="form-control" name="description" id="description"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Добавить товар</button>
        </form>
    </div>
@endsection