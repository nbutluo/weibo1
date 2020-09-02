@extends('layouts.default')
@section('title','用户注册')
@section('content')
<div class="offset-md-2 col-md-8">
    <div class="card">
        <div class="card-header">
            <h5>用户注册</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('users.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">用户名</label>
                    <input type="text" class="form-control" id="name"  name="name"  value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">邮箱</label>
                    <input type="email" class="form-control" name="email" value="{{ old('email') }}" >
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">密码</label>
                    <input type="password" class="form-control" name="password" value="{{ old('password') }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">确认密码</label>
                    <input type="password" class="form-control" name="password_confirmation" value="{{ old('password') }}">
                </div>
                <button type="submit" class="btn btn-primary">注册</button>
            </form>
        </div>
    </div>
</div>
@endsection
