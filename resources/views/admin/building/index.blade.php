@extends('admin.layouts.layout')

@section('title')
    التحكم في العقارات
@endsection


@section('header')
    <!-- DataTables -->
    {!! Html::style('Design/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
    <style>
        body {
            font-family: 'Cairo', sans-serif;
        }
    </style>

@endsection


@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            التحكم في الاعضاء
        </h1>

        <ol class="breadcrumb">
            <li><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li class="active"><a href="{{url('/admin/building')}}">التحكم في العقارات</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                {!! $dataTable->table([
                    'class'=>'table table-bordered table-hover table-responsive'

                ]) !!}
                <!-- /.box -->
                </div>
            </div>
        </div>
    </section>
@endsection




@section('footer')
    <!-- DataTables -->
    {!! Html::script('Design/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')!!}
    {!! Html::script('Design/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')!!}
    {!! Html::script('Design/adminlte/bower_components/datatables.net-bs/js/dataTables.buttons.min.js')!!}

    <script src="/vendor/datatables/buttons.server-side.js"></script>

    @push('js')
        {!! $dataTable->scripts() !!}
    @endpush

@endsection