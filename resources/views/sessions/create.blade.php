@extends('layouts.default')
@section('title','登录')
@section('content')
    <div class="offset-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>用户登录</h5>
            </div>
            <div class="card-body">
                @include('shared._errors')
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1">邮箱</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">密码</label>
                        <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                    </div>
                    <button type="submit" class="btn btn-primary">登录</button>
                </form>
                <hr>
                <p>还没账号？<a href="{{ route('signup') }}">现在去注册！</a></p>
            </div>
        </div>
    </div>
@endsection
