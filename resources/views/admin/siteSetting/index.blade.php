@extends('admin.layouts.layout')

@section('title')
    تعديل اعدادات الموقع
@endsection


@section('header')


@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            تعديل اعدادات الموقع
        </h1>

        <ol class="breadcrumb">
            <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li class="active"><a href="{{url('/admin/siteSetting')}}">تعديل اعدادات الموقع</a></li>


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
                            <div class="row" style="margin:0px">
                                <div class="col-md-10 col-md-offset-2">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">تعديل اعدادات الموقع</div>

                                        <div class="panel-body">
                                            <form method="post" action="{{url('/admin/siteSetting')}}">
                                                @foreach($siteSetting as $setting)

                                                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                            {{csrf_field()}}
                                                            <div class="col-md-10">
                                                                @if($setting->type==0)
                                                                     {!! Form::text($setting->nameSetting,$setting->value,['class'=>'form-group form-control text']) !!}
                                                                 @else
                                                                    {!! Form::textarea($setting->nameSetting,$setting->value,['class'=>'form-group form-control text2']) !!}

                                                                @endif
                                                                @if ($errors->has($setting->nameSetting))
                                                                    <span class="help-block">
                                                                     <strong>{{ $errors->first('name') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        <div class="col-md-2">
                                                            {{$setting->slug}}

                                                        </div>
                                                    </div>

                                                @endforeach
                                                <button class="fa fa-save  btn btn-lg btn-success btn-block" style="margin: 50px;" type="submit" name="submit">&nbspحفظ</button>

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
