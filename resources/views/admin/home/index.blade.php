@extends('admin.layouts.layout')



@section('content')
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>الرئيسية </h1>
        <ol class="breadcrumb">
            <li class="active"><a href="{{url('/admin')}}"><i class="fa fa-dashboard"></i> الرئيسية</a></li>
            <li><a href="{{url('/admin/users')}}">التحكم في الاعضاء</a></li>
        </ol>
    </section>
 @endsection