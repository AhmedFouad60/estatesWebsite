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
            اضافة عضو جديد
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
                                        <div class="panel-heading">تسجيل عضوية جديدة</div>

                                        <div class="panel-body">
                                            <form class="form-horizontal" method="POST" action="{{ route('users.store') }}">



                                                @include('admin.user.form')




                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>







                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection


@section('footer')


@endsection