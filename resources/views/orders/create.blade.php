@extends('layout')

@section('content')
    <div class="col-sm-push-2 col-sm-8">
        <h2>Укажите данные</h2>
        <form action="/orders" method="POST" role="form">
            {{csrf_field()}}
            <div class="form-group">
                <label for="customer_name">Ваше имя</label>
                <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Ваше имя">
            </div>
            <div class="form-group">
                <label for="email">e-mail</label>
                <input type="text" class="form-control" name="email" id="email" placeholder="e-mail">
            </div>
            <div class="form-group">
                <label for="phone">Телефон</label>
                <input type="text" class="form-control" name="phone" id="phone" placeholder="777-77-77">
            </div>
            <div class="form-group">
                <label for="feedback">Комментарий</label>
                <textarea name="feedback" id="feedback" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Оформить заказ</button>
        </form>
    </div>
@endsection