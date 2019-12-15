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
              <li>
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
              <li class="active">
                <a class="nav-link" href="tact">ติดต่อเรา</a>
              </li>
            </ul>
          </nav>
        </div>
      </header>
  
      <div class="content">
         
          </div>
          
          
          
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