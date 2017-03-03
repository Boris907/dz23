@extends('layout')

@section('content')
    <div class="col-md-8">
        <h2>{{$page->title}}</h2>
        <div class="panel panel-default">
            <div class="panel-body">
                <pre>{{$page->content}}</pre>
            </div>
        </div>
        <br>
        <a href="/" class="btn btn-default">Go back</a>
    </div>
@endsection