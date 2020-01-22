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
    <header>

	<div><img  class="img-fluid" src="<?php echo asset('assets/img/logo.png'); ?>" alt=""></div>
</header>

		<div class="navbar navbar-inverse navbar-fixedd-top bs-docs-nav navbar-expand-lg navbar-expand-lg  static-top" role="banner">
			<a class="navbar-brand" href="#">
		
			  </a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon">   
					<i class="fa fa-navicon" style="color:#fff; font-size:28px;"></i>
				</span>
			  </button>
          <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation" id="navbarResponsive">
            <ul class="nav navbar-nav navbar-right navbar-nav navbar-nav ml-auto">
			<li class="{{ Request::path() == 'home' ? 'active' : '' }}">
                <a class="nav-link" href="home">หน้าแรก</a>
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
            <li class="{{ Request::path() == 'newupdate' ? 'active' : '' }}">
                <a class="nav-link" href="newupdate">ประชาสัมพันธ์</a>
            </li>
            </ul>
          </nav>
	</div>
		@yield('content')

		
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

<!-- Footer -->
<section id="footer">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>รายละเอียด</h5>
					
						<a>สาขาวิชาเทคโนโลยีสารสนเทศทางธุรกิจ</a><br><br>
						<a>264 ถนนจักรวรรดิ แขวงจักรวรรดิ</a><br><br>
						<a>เขตสัมพันธวงศ์ กรุงเทพฯ 10100</a><br><br>
						<a>โทร : 0-2222-2814 ต่อ 5319,5330,5350</a>
						<a></a>
			
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Quick links</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="activities"><i class="fa fa-angle-double-right"></i>กิจกรรม</a></li>
						<li><a href="course"><i class="fa fa-angle-double-right"></i>หลักสูตรและการสอน</a></li>
						<li><a href="about"><i class="fa fa-angle-double-right"></i>เกี่ยวกับสาขาวิชา</a></li>
						<li><a href="tact"><i class="fa fa-angle-double-right"></i>ติดต่อเรา</a></li>
						<li><a href="cooperative"><i class="fa fa-angle-double-right"></i>สหกิจศึกษา</a></li>
						<li><a href="award"><i class="fa fa-angle-double-right"></i>รางวัล</a></li>
						<li><a href="fund"><i class="fa fa-angle-double-right"></i>ทุนการศึกษา</a></li>
						<li><a href="newupdate"><i class="fa fa-angle-double-right"></i>ประชาสัมพันธ์</a></li>
				
					</ul>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>หน่วยงานอื่น</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="https://www.rmutr.ac.th/" target="_blank"><i class="fa fa-angle-double-right"></i>มทร.รัตนโกสินทร์</a></li>
						<li><a href="https://bua.rmutr.ac.th/" target="_blank"><i class="fa fa-angle-double-right"></i>คณะบริหารธุรกิจ</a></li>
						<li><a href="https://reg.rmutr.ac.th/registrar/login.asp" target="_blank"><i class="fa fa-angle-double-right"></i>งานทะเบียน</a></li>
						<li><a href="https://www.facebook.com/%E0%B8%87%E0%B8%B2%E0%B8%99%E0%B8%81%E0%B8%AD%E0%B8%87%E0%B8%97%E0%B8%B8%E0%B8%99%E0%B8%AF-%E0%B8%9A%E0%B8%9E%E0%B8%B4%E0%B8%95%E0%B8%A3%E0%B8%9E%E0%B8%B4%E0%B8%A1%E0%B8%B8%E0%B8%82-%E0%B8%88%E0%B8%B1%E0%B8%81%E0%B8%A3%E0%B8%A7%E0%B8%A3%E0%B8%A3%E0%B8%94%E0%B8%B4-858180540866398/" target="_blank">
							<i class="fa fa-angle-double-right"></i>งานกองทุน</a></li>
					</ul>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://bua.rmutr.ac.th/" target="_blank"><i class="fa fa-facebook"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p>สาขาเทคโนโลยีสารสนเทศทางธุรกิจ</p>
					<p> มหาวิทยาลัยเทคโนโลยีราชมงคลรัตนโกสินทร์ บพิตรพิมุข จักรวรรดิ</p>
				</div>
				<hr>
			</div>	
		</div>
	</section>
    </body>
</html>
