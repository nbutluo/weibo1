@extends('layouts.default')
@section('title','更新密码')
@section('content')
    <div class="offset-2 col-md-8">
        <div class="card">
            <div class="card-header">
                <h5>密码更新</h5>
            </div>
            <div class="card-body">
                @if ( session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('password.update') }}" method="post">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="exampleInputPassword1">邮箱</label>
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <span class="form-text">
                                <strong>{{ $errors->first('email') }}</strong>
                              </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">密码</label>
                        <input type="password" class="form-control{{ $errors->has('email') ? ' has-error' : '' }}"
                               name="password"
                               value="{{ old('password') }}">
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">确认密码</label>
                        <input type="password" class="form-control" name="password_confirmation"
                               value="{{ old('password') }}">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">重置密码</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
