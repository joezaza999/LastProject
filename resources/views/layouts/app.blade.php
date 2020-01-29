<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" href="{{asset('css/layouts.back.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="bhome">หลังบ้าน</a>

    <!-- Navbar Search -->
    @guest
    @else
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
    </div>
    </form>
    @endguest

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto ml-md-0">
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('เข้าสู่ระบบ') }}</a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('สมัครสมาชิก') }}</a>
                </li>
            @endif
        @else
        <li class="nav-item">
                <a class="nav-link" href="{{ route('bhome') }}">{{ __('หน้าแรก') }}</a>
            </li>
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
    @guest
    @else
      <li class="nav-item active">
        <a class="nav-link" href="{{ route('bhome') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{ __('Dashboard') }}</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('bslideshow') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{ __('สไลด์โชว์') }}</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('bposition') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{ __('ตำแหน่ง') }}</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('bmembers') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{ __('บุคลากร') }}</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('bcourse') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{ __('หลักสูตร') }}</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('babout') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{ __('เกี่ยวกับเรา') }}</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('baward') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{ __('รางวัล') }}</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('bactivities') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{ __('กิจกรรม') }}</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('bnewsupdate') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{ __('ประชาสัมพันธ์') }}</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('bcooperative') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{ __('สหกิจศึกษา') }}</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{ route('bapprentice') }}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>{{ __('ฝึกงาน') }}</span></a>
      </li>
      @endguest
    </ul>


        @yield('content')


      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Your Website 2019</span>
          </div>
        </div>
      </footer>

    </div>



  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div> -->

</body>

</html>
