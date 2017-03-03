@extends('layout')

@section('content')
    <table class="table">
        <tr>
            <td>
                <thead>
                <tr>
                    <th>Title</th>
                    <th>Alias</th>
                    <th>Content</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td>{{$page->title}}</td>
                        <td>{{$page->alias}}</td>
                        <td>{{$page->content}}</td>
                    </tr>
                @endforeach
                </tbody>
            </td>
        </tr>
    </table>
    <a href="/pages/new" class="btn btn-default">Добавить страницу</a>
@endsection