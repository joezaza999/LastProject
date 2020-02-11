<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css')}}">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="{{asset('plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
  <!-- iCheck -->
  <link rel="stylesheet" href="{{asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- JQVMap -->
  <link rel="stylesheet" href="{{asset('plugins/jqvmap/jqvmap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="{{asset('plugins/daterangepicker/daterangepicker.css')}}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{asset('plugins/summernote/summernote-bs4.css')}}">
  <!-- Google Font: Source Sans Pro -->
  <link href="{{asset('https://fonts.googleapis.com/css?family=Kanit&display=swap" rel="stylesheet')}}">
  
   <!-- DataTables -->
   <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.css')}}">

   
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
      </li>
   
  
    </ul>
  </nav>
  @guest
  @else
  @endguest
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="bhome" class="brand-link">
      <span class="brand-text font-weight-light">การจัดการข้อมูล</span>
    </a>

    <!-- Sidebar -->

    <div class="sidebar">
 
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
   
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview">
            
            <a href="#" class="nav-link ">
              <i class="nav-icon fa fa-home"></i>
              <p>
                หน้าหลัก
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
            <li class="nav-item">
                <a href="{{ route('bheader') }}" class="nav-link ">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>ส่วนบนของเว็บ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bslideshow') }}" class="nav-link ">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>สไลด์โชว์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bnewsupdate') }}" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>ประชาสัมพันธ์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bactivities') }}" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>กิจกรรม</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('babout') }}" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>เกี่ยวกับเรา</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                หลักสูตร
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('bcategory') }}" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>หมวดวิชา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bsubgroup') }}" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>กลุ่มวิชา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bsubject') }}" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>วิชา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bcoursegenaral') }}" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>หลักสูตรทั่วไป</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-users"></i>
              <p>
                คณาจารย์
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('bposition') }}" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>ตำแหน่งอาจารย์</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bmembers') }}" class="nav-link">
                  <i class="fa fa-minus nav-icon"></i>
                  <p>อาจารย์</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user"></i>
              <p>
                นักศึกษา
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('bform') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>แบบฟอร์ม</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('baward') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>รางวัล</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bsuccess') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ความสำเร็จของศิษย์เก่า</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bcooperative') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ผลงานสหกิจศึกษา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bapprentice') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ผลงานฝึกงาน</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bstudentyear') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ปีที่เข้าศึกษา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bstudent') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>รายชื่อนักศึกษา</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bbitcourse') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>หลักสูตรสารสนเทศ</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('bmitcourse') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>หลักสูตรการจัดการสารสนเทศ</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="{{ route('logout') }}"  class="nav-link" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
              
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                ออกจากระบบ
                <i class=""></i>
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
              @csrf
          </form>
          </li>
            </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

    <div class="content-header">
      @yield('content')
    </div>

  </div>

  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.2
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<!-- jQuery UI 1.11.4 -->
<script src="{{asset('plugins/jquery-ui/jquery-ui.min.js')}}"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('plugins/chart.js/Chart.min.js')}}"></script>
<!-- Sparkline -->
<script src="{{asset('plugins/sparklines/sparkline.js')}}"></script>
<!-- JQVMap -->
<script src="{{asset('plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{asset('plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<!-- jQuery Knob Chart -->
<script src="{{asset('plugins/jquery-knob/jquery.knob.min.js')}}"></script>
<!-- daterangepicker -->
<script src="{{asset('plugins/moment/moment.min.js')}}"></script>
<script src="{{asset('plugins/daterangepicker/daterangepicker.js')}}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')}}"></script>
<!-- Summernote -->
<script src="{{asset('plugins/summernote/summernote-bs4.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="{{asset('dist/js/pages/dashboard.js')}}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('dist/js/demo.js')}}"></script>


<!-- DataTables -->
<script src="{{asset('plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable();
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
    });
  });
</script>
</body>
</html>
