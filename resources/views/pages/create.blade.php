@extends('layout')

@section('content')
    <div class="col-sm-push-2 col-sm-8">
        <h2>Новая страница</h2>
        <form action="/pages" method="POST" role="form">
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
                <label for="content">Описание</label>
                <textarea class="form-control" name="content" id="content"></textarea>
            </div>

            <button type="submit" class="btn btn-default">Добавить страницу</button>
        </form>
    </div>
@endsection