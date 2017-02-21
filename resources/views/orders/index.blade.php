@extends('layout')

@section('content')
    <table class="table">
        <tr>
            <td>
                <thead>
                <tr>
                    <th>Имя клиента</th>
                    <th>e-mail</th>
                    <th>Телефон</th>
                </tr>
                </thead>
                <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->customer_name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->phone}}</td>
                    </tr>
                @endforeach
                </tbody>
            </td>
        </tr>
    </table>
@endsection