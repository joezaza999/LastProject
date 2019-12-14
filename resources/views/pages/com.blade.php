@extends('layouts.master')

@section('content')
<div>
        <img id="logo-main" src="<?php echo asset('assets/img/logos.png'); ?>" width="100%" height="100%" alt=""/>
        </div>
    <header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav navbar-expand-lg" role="banner">
            <div class="container">
              <div class="navbar-header">
                <a href="./" class="navbar-brand">เทคโนโลยีสารสนเทศ</a>
              </div>
              <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
                <ul class="nav navbar-nav navbar-right navbar-nav ml-auto ">
                  <li class="active">
                    <a class="nav-link" href="/">หน้าแรก</a>
                  </li>
                  <li>
                        <a class="nav-link" href="member">บุคลากร</a>
                      </li>
                      <li>
                        <a class="nav-link" href="course">หลักสูตร</a>
                      </li>
                  <li class="dropdown">
                    <a class="nav-link" href="#" class="dropdown-toggle" data-toggle="dropdown">หน่วยงานอื่น <b class="caret"></b></a>
                    <ul class="dropdown-content ">
                      <li><a class="nav-link" href="https://bua.rmutr.ac.th/" target="blank">คณะบริหารธุรกิจ</a></li>
                      <li><a class="nav-link" href="https://www.rmutr.ac.th/">มทร.รัตนโกสินทร์</a></li>
                      <li><a class="nav-link" href="https://reg.rmutr.ac.th/registrar/home.asp">งานทะเบียน</a></li>
                    </ul>
                  </li>
                  <li>
                    <a class="nav-link" href="tact">ติดต่อเรา</a>
                  </li>
                </ul>
              </nav>
            </div>
          </header>
          <div class="content">
      
        <!-- Slideshow Header -->
        <div class="w3-container" id="apartment">
          <h2 class="w3-text-green">The Apartment</h2>
          <div class="w3-display-container mySlides">
          <img src="assets/img/1004.jpg" style="width:500px;margin-bottom:-6px">
            <div class="w3-display-bottomleft w3-container w3-black">
              <p>Living Room</p>
            </div>
          </div>
          <div class="w3-display-container mySlides">
          <img src="assets/img/1004.jpg" style="width:500px;margin-bottom:-6px">
            <div class="w3-display-bottomleft w3-container w3-black">
              <p>Dining Room</p>
            </div>
          </div>
          <div class="w3-display-container mySlides">
          <img src="assets/img/1004.jpg" style="width:100%;margin-bottom:-6px">
            <div class="w3-display-bottomleft w3-container w3-black">
              <p>Bedroom</p>
            </div>
          </div>
          <div class="w3-display-container mySlides">
          <img src="assets/img/1004.jpg" style="width:100%;margin-bottom:-6px">
            <div class="w3-display-bottomleft w3-container w3-black">
              <p>Living Room II</p>
            </div>
          </div>
          <div class="w3-display-container mySlides">
                <img src="assets/img/1004.jpg" style="width:100%;margin-bottom:-6px">
                  <div class="w3-display-bottomleft w3-container w3-black">
                    <p>Living Room II</p>
                  </div>
                </div>
          
        </div>
        <div class="w3-row-padding w3-section">
          <div class="w3-col s3">
            <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/1004.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(1)" title="Living room">
          </div>
          <div class="w3-col s3">
            <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/1004.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(2)" title="Dining room">
          </div>
          <div class="w3-col s3">
            <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/1004.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(3)" title="Bedroom">
          </div>
          <div class="w3-col s3">
            <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/1004.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(4)" title="Second Living Room">
          </div><br>

          <div class="w3-col s3">
                <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/1004.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(5)" title="Second Living Room">
              </div>
              <div class="w3-col s3">
                    <img class="demo w3-opacity w3-hover-opacity-off" src="assets/img/1004.jpg" style="width:100%;cursor:pointer" onclick="currentDiv(6)" title="Second Living Room">
                  </div>
        </div>
        <hr>
      
        <div class="w3-container">
          <h4><strong>ห้องปฏิบัติการทางคอมพิวเตอร์</strong></h4>
          <div class="w3-row w3-large">
            <div class="w3-col s6">
              <p><i class="fa fa-fw fa-tv"></i> Max people: 4</p>
              <p><i class="fa fa-fw fa-tv"></i> Bathrooms: 2</p>
              <p><i class="fa fa-fw fa-tv"></i> Bedrooms: 1</p>
            </div>
            <div class="w3-col s6">
              <p><i class="fa fa-fw fa-tv"></i> Check In: After 3PM</p>
              <p><i class="fa fa-fw fa-tv"></i> Check Out: 12PM</p>
              <p><i class="fa fa-fw fa-tv"></i> Check Out: 12PM</p>
            </div>
          </div>
          <hr>
        </div>
          </div>
          

    
      
      <script>
      // Script to open and close sidebar when on tablets and phones
      function w3_open() {
        document.getElementById("mySidebar").style.display = "block";
        document.getElementById("myOverlay").style.display = "block";
      }
       
      function w3_close() {
        document.getElementById("mySidebar").style.display = "none";
        document.getElementById("myOverlay").style.display = "none";
      }
      
      // Slideshow Apartment Images
      var slideIndex = 1;
      showDivs(slideIndex);
      
      function plusDivs(n) {
        showDivs(slideIndex += n);
      }
      
      function currentDiv(n) {
        showDivs(slideIndex = n);
      }
      
      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("demo");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
          dots[i].className = dots[i].className.replace(" w3-opacity-off", "");
        }
        x[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " w3-opacity-off";
      }
      </script>
      <footer>
            <div class="container">
              <div class="row">
                
                <div class="col-lg-4 col-md-6">
                  <h3>Site Map</h3>
                  <ul class="list-unstyled three-column">
                    <li>Home</li>
                    <li>Services</li>
                    <li>About</li>
                    <li>Code</li>
                    <li>Design</li>
                    <li>Host</li>
                    <li>Contact</li>
                    <li>Company</li>
                  </ul>
                  <ul class="list-unstyled socila-list">
                    <li><img src="http://placehold.it/48x48" alt="" /></li>
                    <li><img src="http://placehold.it/48x48" alt="" /></li>
                    <li><img src="http://placehold.it/48x48" alt="" /></li>
                    <li><img src="http://placehold.it/48x48" alt="" /></li>
                    <li><img src="http://placehold.it/48x48" alt="" /></li>
                    <li><img src="http://placehold.it/48x48" alt="" /></li>
                  </ul>
                </div>
                
                <div class="col-lg-4 col-md-6">
                  <h3>latest Articles</h3>
                  <div class="media">
                    <a href="#" class="pull-left">
                      <img src="http://placehold.it/64x64" alt="" class="media-object" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Programming</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  
                  <div class="media">
                    <a href="#" class="pull-left">
                      <img src="http://placehold.it/64x64" alt="" class="media-object" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Coding</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  
                  <div class="media">
                    <a href="#" class="pull-left">
                      <img src="http://placehold.it/64x64" alt="" class="media-object" />
                    </a>
                    <div class="media-body">
                      <h4 class="media-heading">Web Sesign</h4>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                  </div>
                  
                </div>
                
                <div class="col-lg-4">
                  <h3>Our Work</h3>
                  <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
                  <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
                  <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
                  <img class="img-thumbnail" src="http://placehold.it/150x100" alt="" />
                </div>
                
              </div>
            </div>
            <div class="copyright text-center">
              Copyright &copy; 2017 <span>Your Template Name</span>
            </div>
          </footer>
      
      @endsection