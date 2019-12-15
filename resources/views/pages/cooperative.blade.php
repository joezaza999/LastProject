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
         <!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
      <div class="w3-quarter">
        <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
        <h3>The Perfect Sandwich, A Real NYC Classic</h3>
        <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="w3-quarter">
        <img src="/w3images/steak.jpg" alt="Steak" style="width:100%">
        <h3>Let Me Tell You About This Steak</h3>
        <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="w3-quarter">
        <img src="/w3images/cherries.jpg" alt="Cherries" style="width:100%">
        <h3>Cherries, interrupted</h3>
        <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
        <p>What else?</p>
      </div>
      <div class="w3-quarter">
        <img src="/w3images/wine.jpg" alt="Pasta and Wine" style="width:100%">
        <h3>Once Again, Robust Wine and Vegetable Pasta</h3>
        <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
    </div>
    
    <!-- Second Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center">
      <div class="w3-quarter">
        <img src="/w3images/popsicle.jpg" alt="Popsicle" style="width:100%">
        <h3>All I Need Is a Popsicle</h3>
        <p>Lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="w3-quarter">
        <img src="/w3images/salmon.jpg" alt="Salmon" style="width:100%">
        <h3>Salmon For Your Skin</h3>
        <p>Once again, some random text to lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="w3-quarter">
        <img src="/w3images/sandwich.jpg" alt="Sandwich" style="width:100%">
        <h3>The Perfect Sandwich, A Real Classic</h3>
        <p>Just some random text, lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
      <div class="w3-quarter">
        <img src="/w3images/croissant.jpg" alt="Croissant" style="width:100%">
        <h3>Le French</h3>
        <p>Lorem lorem lorem lorem ipsum text praesent tincidunt ipsum lipsum.</p>
      </div>
    </div>
  
    <!-- Pagination -->
    <div class="w3-center w3-padding-32">
      <div class="w3-bar">
        <a href="#" class="w3-bar-item w3-button w3-hover-black">«</a>
        <a href="#" class="w3-bar-item w3-black w3-button">1</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">2</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">3</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">4</a>
        <a href="#" class="w3-bar-item w3-button w3-hover-black">»</a>
      </div>
    </div>
    
    <hr id="about">
  
  
    
  
  <!-- End page content -->
  </div>
          </div>
  <script>
  // Script to open and close sidebar
  function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
  }
   
  function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
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