<header class="main-header">
  <!-- Logo -->
  <a href="index2.html" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg">لوحة تحكم الموقع</span>
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top">
    <!-- Sidebar toggle button-->
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
@include('admin.layouts.menu')

  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-right image">
        <img src="{{url('Design/adminlte')}}/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-right info">
        <p>{{Auth::user()->name}}</p>
        <a href="#"></a><i class="fa fa-circle text-success user-icon-status"></i>  متاح
      </div>
    </div>
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header">القائمة الرئيسية</li>


      <li class="treeview">
        <a href="#">
          <i class="fa fa-dashboard"></i> <span>اعدادات الموقع</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-left pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="{{url('/admin/siteSetting')}}"><i class="fa fa-circle-o"></i>الاعدادات الرئيسية</a></li>

        </ul>
      </li>

      {{---------------------------Users-------------------}}
      <li class="treeview">
        <a href="#">
          <i class="fa fa-users"></i> <span>التحكم في الاعضاء</span>
          <span class="pull-left-container">
            <i class="fa fa-angle-left pull-left"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li class="active"><a href="{{url('/admin/users/create')}}"><i class="fa fa-circle-o"></i>  اضف عضو</a></li>
          <li><a href="{{url('/admin/users')}}"><i class="fa fa-circle-o"></i>  كل الاعضاء</a></li>

        </ul>
      </li>





    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
