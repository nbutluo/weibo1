@extends('layouts.default')
@section('content')
    @if(Auth::check())
        <div class="row">
            <div class="col-md-8">
                <section class="status_form">
                    @include('shared._status_form')
                </section>
            </div>
            <aside class="col-md-4">
                <section class="user_info">
                    @include('shared._user_info',['user'=>Auth::user()])
                </section>
            </aside>
        </div>
    @else
        <div class="jumbotron">
            <h1 class="display-4">Hello, Laravel!</h1>
            <p class="lead">你现在所看到的是 <a href="https://learnku.com/docs/laravel/5.7" target="_blank">Laravel 入门教程</a></p>
            <hr class="my-4">
            <p>一切从这里开始</p>
            <a class="btn btn-success btn-lg" href="{{ route('signup') }}" target="_blank" role="button">点击去注册</a>
        </div>
    @endif
@endsection
