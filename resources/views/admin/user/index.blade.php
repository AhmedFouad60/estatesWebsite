@extends('admin.layouts.layout')

@section('title')
التحكم في الاعضاء
@endsection


@section('header')
    <!-- DataTables -->
    {!! Html::style('Design/adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')!!}
    <style>
        body{
            font-family:'Cairo', sans-serif ;
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
            <li class="active"><a href="{{url('/admin/users')}}">التحكم في الاعضاء</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">عرض كل الاعضاء</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>الاميل</th>
                                <th>اضيف في</th>
                                <th>العضوية</th>
                                <th>التحكم</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($user as $userInfo)
                                <tr>
                                    <td>{{$userInfo->id}}</td>

                                    <td>{{$userInfo->name}}</td>
                                    <td>
                                        {{$userInfo->email}}
                                    </td>
                                    <td>{{$userInfo->created_at}}</td>
                                    <td>
                                        {{$userInfo->admin==1?'مدير': 'عضو'}}
                                    </td>
                                    <td>
                                        <a href="{{url('admin/users/'.$userInfo->id.'/edit')}}">تعديل</a>
                                        <a href="{{url('admin/users/'.$userInfo->id.'/delete')}}">حزف</a>
                                    </td>
                                </tr>
                                @endforeach




                            </tbody>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>الاسم</th>
                                <th>الاميل</th>
                                <th>اضيف في</th>
                                <th>العضوية</th>
                                <th>التحكم</th>
                            </tr>

                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
        </div>
    </section>
@endsection




@section('footer')
    <!-- DataTables -->
    <script src="../../"></script>
    <script src="../../"></script>

    {!! Html::script('Design/adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js')!!}
    {!! Html::script('Design/adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')!!}
    <!-- page script -->
    <script>
        $(function () {
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': true,
                'searching'   : true,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : true
            })
        })
    </script>

@endsection