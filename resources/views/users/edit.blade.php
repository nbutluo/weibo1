@extends('layouts.default')
@section('title','用户编辑')
@section('content')
    <div class="offset-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>用户资料编辑</h5>
            </div>
            <div class="card-body">
                @include('shared._errors')
                <div class="gravatae_edit">
                    <a href="http://gravatar.com/emails" target="_blank" class="gravatar_edit">
                        <img src="{{ $user->gravatar('100') }}" alt="" class="gravatar">
                    </a>
                </div>
                <form method="POST" action="{{ route('users.update',$user->id) }}">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <label for="name">用户名</label>
                        <input type="text" class="form-control" id="name"  name="name"  value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">邮箱</label>
                        <input type="email" class="form-control" name="email" value="{{ $user->email }}" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">密码</label>
                        <input type="password" class="form-control" name="password" value="{{ $user->password }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">确认密码</label>
                        <input type="password" class="form-control" name="password_confirmation" value="{{ $user->password }}">
                    </div>
                    <button type="submit" class="btn btn-primary">更新</button>
                </form>
            </div>
        </div>
    </div>
@endsection
