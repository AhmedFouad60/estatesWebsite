@extends('layouts.app')

@section('title')
    تسجيل الدخول
@endsection

@section('header')

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">تسجيل الدخول</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">

                            <div class="col-md-12 text">
                                <input id="email" placeholder="البريد الالكتروني" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                            <div class="col-md-12 text">
                                <input id="password" placeholder="كلمة المرور" type="password" class=" form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group text ">
                            <div class="col-md-6 pull-right ">
                                <div class="checkbox " >
                                    <label>
                                        <input class="pull-right" type="checkbox" style="margin-left:5px;" name="remember" {{ old('remember') ? 'checked' : '' }}> ذكرني
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success pull-left">
                                    تسجيل الدخول
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
هل نسيت كلمة المرور                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')

@endsection
