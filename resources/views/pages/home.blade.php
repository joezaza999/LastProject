@extends('layouts.master')

@section('content')
<div class="body">
  <div class="fakeimg" style="height:100%;"></div>
  <div id="carouselExampleControls" id="myCarousel" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">

        @foreach ($slideshows as $slideshow)

      <div class="carousel-item @if($loop->first)active @endif">
      <img class="d-block mx-auto img-fluid" src="{{asset("images/$slideshow->image")}}" width="1200px"   alt="">
      </div>
      @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

      <div class="content">
        
  <div class="row">
    <div class="leftcolumn">
      <h1><b class="icon-book"></b>กิจกรรม</h1>
   
      <div class="">
        <div class="wrapper">
          <div class="grid">
            <div class="card">
              <div class="card__image">
                <img src="<?php echo asset('assets/img/23.jpg'); ?>" class="card-img-top">
                <div class="card__overlay">
                  <div class="card__overlay-content">
                    <ul class="card__meta">
                      <li><a href="#0"><i class="fa fa-tag"></i> Posted</a></li>
                      <li><a href="#0"><i class="fa fa-clock-o"></i></a></li>
                    </ul>
        
                    <h5><a href="#0" class="card__title">sdfsdfsdfsdfsdf</a></h5>
                    <h6><a href="#0" class="card__title1">sdfsdfsdfsdfsdfsd</a></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper">
          <div class="grid">
            <div class="card">
              <div class="card__image">
                <img src="<?php echo asset('assets/img/1.jpg'); ?>" class="card-img-top">
                <div class="card__overlay">
                  <div class="card__overlay-content">
                    <ul class="card__meta">
                      <li><a href="#0"><i class="fa fa-tag"></i> Posted</a></li>
                      <li><a href="#0"><i class="fa fa-clock-o"></i></a></li>
                    </ul>
        
                    <h5><a href="#0" class="card__title"></a></h5>
                    <h6><a href="#0" class="card__title1"></a></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper">
          <div class="grid">
            <div class="card">
              <div class="card__image">
                <img src="<?php echo asset('assets/img/1.jpg'); ?>" class="card-img-top">
                <div class="card__overlay">
                  <div class="card__overlay-content">
                    <ul class="card__meta">
                      <li><a href="#0"><i class="fa fa-tag"></i> Posted</a></li>
                      <li><a href="#0"><i class="fa fa-clock-o"></i></a></li>
                    </ul>
        
                    <h5><a href="#0" class="card__title"></a></h5>
                    <h6><a href="#0" class="card__title1"></a></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper">
          <div class="grid">
            <div class="card">
              <div class="card__image">
                <img src="<?php echo asset('assets/img/1.jpg'); ?>" class="card-img-top">
                <div class="card__overlay">
                  <div class="card__overlay-content">
                    <ul class="card__meta">
                      <li><a href="#0"><i class="fa fa-tag"></i> Posted</a></li>
                      <li><a href="#0"><i class="fa fa-clock-o"></i></a></li>
                    </ul>
        
                    <h5><a href="#0" class="card__title"></a></h5>
                    <h6><a href="#0" class="card__title1"></a></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper">
          <div class="grid">
            <div class="card">
              <div class="card__image">
                <img src="<?php echo asset('assets/img/1.jpg'); ?>" class="card-img-top">
                <div class="card__overlay">
                  <div class="card__overlay-content">
                    <ul class="card__meta">
                      <li><a href="#0"><i class="fa fa-tag"></i> Posted</a></li>
                      <li><a href="#0"><i class="fa fa-clock-o"></i></a></li>
                    </ul>
        
                    <h5><a href="#0" class="card__title"></a></h5>
                    <h6><a href="#0" class="card__title1"></a></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="wrapper">
          <div class="grid">
            <div class="card">
              <div class="card__image">
                <img src="<?php echo asset('assets/img/1.jpg'); ?>" class="card-img-top">
                <div class="card__overlay">
                  <div class="card__overlay-content">
                    <ul class="card__meta">
                      <li><a href="#0"><i class="fa fa-tag"></i> Posted</a></li>
                      <li><a href="#0"><i class="fa fa-clock-o"></i></a></li>
                    </ul>
        
                    <h5><a href="#0" class="card__title"></a></h5>
                    <h6><a href="#0" class="card__title1"></a></h6>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    <div class="rightcolumn">
      <h1><b class="icon-calendar"></b>Calendar</h1>
      <div id="content">     
        <ul class="timeline">
          <li class="event" data-date="27 Jan">
            <h3>ชวนฟัง Tech Talk Season 6 ครั้งที่ 3</h3>
            <p>Short interval training circuits to</p>
          </li>
          <li class="event" data-date="28-29 Jan">
            <h3>Total tone</h3>
            <p>Focuses on strength</p>    
          </li>
          <li class="event" data-date="31 Jan">
            <h3>Total tone</h3>
            <p>Focuses on strength</p>    
          </li>
          <li class="event" data-date="27 Jan">
            <h3>ชวนฟัง Tech Talk Season 6 ครั้งที่ 3</h3>
            <p>Short interval training circuits to</p>
          </li>
          <li class="event" data-date="27 Jan">
            <h3>ชวนฟัง Tech Talk Season 6 ครั้งที่ 3</h3>
            <p>Short interval training circuits to</p>
          </li>
          <li class="event" data-date="27 Jan">
            <h3>ชวนฟัง Tech Talk Season 6 ครั้งที่ 3</h3>
            <p>Short interval training circuits to</p>
          </li>
          
        </ul>
      </div>
      

    </div>
  </div>
  <br>
<script>
  var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

</div>

</div>



@endsection
