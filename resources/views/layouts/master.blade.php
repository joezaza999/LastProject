<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{asset('css/layouts.css')}}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    </head>
    <body>


		<    <!--Navbar-->
		<nav class="navbar navbar-toggleable-md fixed-top scrolling-navbar navbar-expand-lg navbar-inverse">
			<div class="container">
				<a class="navbar-brand" href="home">
					<strong><img src="<?php echo asset('assets/img/maxsum.png'); ?>" width="200px"></strong>
				</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarNav1" aria-controls="navbarNav1" aria-expanded="false" aria-label="Toggle navigation">
					<span class="fa fa-navicon" style="color:#fff; font-size:28px;"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNav1">
					<ul class="nav navbar-nav navbar-right navbar-nav navbar-nav ml-auto">
						<li class="{{ Request::path() == 'home' ? 'active' : '' }}">
							<a class="nav-link" href="home">หน้าหลัก</a>
						</li>
						<li class="{{ Request::path() == 'activities' ? 'active' : '' }}">
							<a class="nav-link" href="activities">กิจกรรม</a>
						</li>
						  <li class="dropdown ">
							<a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">ข้อมูลสาขาวิชา <b class="caret fa fa-caret-down"></b></a>
							<ul class="dropdown-content ">
							  <li class="{{ Request::path() == 'course' ? 'active' : '' }}">
								<a class="nav-link" href="course">หลักสูตรและการสอน</a></li>
							  <li class="{{ Request::path() == 'about' ? 'active' : '' }}">
								<a class="nav-link" href="about">เกี่ยวกับสาขาวิชา</a></li>
							  <li class="{{ Request::path() == 'tact' ? 'active' : '' }}">
								<a class="nav-link" href="tact">ติดต่อเรา</a></li>
							</ul>
						</li>
						<li class="dropdown">
							<a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">นักศึกษา <b class="caret fa fa-caret-down"></b></a>
							<ul class="dropdown-content ">
							  <li class="{{ Request::path() == 'cooperative' ? 'active' : '' }}">
								<a class="nav-link" href="cooperative">สหกิจศึกษา</a></li>
							  <li class="{{ Request::path() == 'award' ? 'active' : '' }}">
								<a class="nav-link" href="award">รางวัล</a></li>
							  <li class="{{ Request::path() == 'fund' ? 'active' : '' }}">
								<a class="nav-link" href="fund">ทุนการศึกษา</a></li>
							</ul>
						</li>
						<li class="{{ Request::path() == 'newsupdate' ? 'active' : '' }}">
							<a class="nav-link" href="newsupdate">ประชาสัมพันธ์</a>
						</li>
						</ul>
				</div>
			</div>
		</nav>
		<!--/.Navbar-->
		
		@yield('content')
<footer class="footer-area footer--light">
  <div class="footer-big">
    <!-- start .container -->
    <div class="container">
      <div class="row">
        <div class="">
          <div class="footer-widget">
            <div class="widget-about">
         
              <p>สาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ<br> 
              264 ถนนจักรวรรดิ แขวงจักรวรรดิ	เขตสัมพันธวงศ์ กรุงเทพฯ 10100<br>
               โทร : 0-2222-2814 ต่อ 5319,5330,5350
					</p>
            </div>
          </div>
          <!-- Ends: .footer-widget -->
        </div>
      </div>
      <!-- end /.row -->
    </div>
    <!-- end /.container -->
  </div>
  <!-- end /.footer-big -->

  <div class="mini-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="copyright-text">
            <p>© 2018
              <a href="#">DigiPro</a>. All rights reserved. Created by
              <a href="#">AazzTech</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>


        <script>
  $(document).ready(function() {

$('.burger').click(function(){
  $('header').toggleClass('clicked');
});

$('nav ul li').click(function(){
  $('nav ul li').removeClass('selected');
  $('nav ul li').addClass('notselected');
  $(this).toggleClass('selected');
  $(this).removeClass('notselected');
});

});
$(window).scroll(function(){
    if ($(window).scrollTop() >= 300) {
        $('nav').addClass('fixed-header');
        $('nav div').addClass('visible-title');
    }
    else {
        $('nav').removeClass('fixed-header');
		$('nav div').removeClass('visible-title');
		$(document).ready(function() {
      $(".nav a").on("click", function(){
      $(".nav").find(".active").removeClass("active");
      $(this).parent().addClass("active");
   });
});
    }
});

</script>
    </body>
</html>
