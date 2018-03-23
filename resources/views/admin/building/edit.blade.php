@extends('admin.layouts.layout')

@section('title')
    تعديل العضو
    |
    {{$user->name}}
@endsection


@section('header')


@endsection


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            تعديل العضو
        </h1>

        <ol class="breadcrumb">
            <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li class="active"><a href="{{url('/admin/users')}}">التحكم في الاعضاء</a></li>
            <li class="active"><a href="{{url('/admin/users/'.$user->id.'/edit')}}">
                    تعديل العضو
                    |
                    {{$user->name}}

                </a></li>

        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            تعديل العضو
                                            |
                                            {{$user->name}}
                                        </div>


                                        <div class="panel-body">

                                          {{-- <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">--}}

                                            {{--@include('admin.user.form')--}}

                                         {!! Form::model($user,['route'=>['users.update',$user->id],'method'=>'PATCH','class'=>'form-horizontal']) !!}
                                            @include('admin.user.form')
                                            {!! Form::close() !!}
                                            {{--</form>--}}


                                        </div>



                                    </div>
                                </div>
                            </div>
                        </div>
                        {{--user password--}}
                        <section>
                            <div class="container">
                            <div class="row">
                                <div class="col-md-8 col-md-offset-2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            تعديل كلمة المرور
                                            |

                                        </div>


                                        <div class="panel-body">
                                            {!! Form::open(['url'=>['admin/user/changePassword'],'method'=>'POST','class'=>'form-horizontal']) !!}
                                                <input type="hidden" value="{{$user->id}}" name="user_id">
                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">

                                                    <div class="col-md-12">
                                                        <input id="password" type="password" placeholder="كلمة المرور"class="form-control " name="password" required>

                                                        @if ($errors->has('password'))
                                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="form-group">

                                                    <div class="col-md-12">
                                                        <input id="password-confirm" type="password" placeholder="تاكيد كلمة المرور"class="form-control " name="password_confirmation" required>
                                                    </div>
                                                </div>
                                            <div class="form-group">
                                                <div class="col-md-6 col-md-offset-4">
                                                    <button type="submit" class="btn btn-primary center-block">
                                                    تغير كلمة المرور
                                                    </button>
                                                </div>
                                            </div>
                                            {!! Form::close() !!}



                                        </div>



                                    </div>
                                </div>
                            </div>






                        </section>





                    </div>
                </div>
            </div>
        </div>

    </section>








@endsection


@section('footer')


@endsection