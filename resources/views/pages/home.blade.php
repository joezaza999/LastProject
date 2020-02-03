@extends('layouts.master')

@section('content')
<div class="body">
  <br><br><br>
  <div class="fakeimg" style="height:100%;"></div>
  <div id="carouselExampleControls" id="myCarousel" class="carousel slide" data-ride="carousel">

    <div class="carousel-inner">

        @foreach ($slideshows as $slideshow)

      <div class="carousel-item @if($loop->first)active @endif">
      <img class="d-block mx-auto img-fluid" src="{{asset("images/$slideshow->image")}}" width="1160px"   alt="">
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
  </div><br>

      <div class="content">

  <div class="row">
    <div class="leftcolumn">
      <h3><i style="font-size:24px" class="fa">&#xf1ea;</i> กิจกรรม</h3>

      @foreach ($activities as $activitie)
      <div class="wrapper1">
        <div class="grid">
          <div class="card">
            <div class="card__image1">
              <img src="{{ asset('images/'.$activitie->image) }}" class="card-img-top">
              <div class="card__overlay">
                <div class="card__overlay-content">
                  <h6 class="card__title">{{ $activitie->title }}</h6>
                  <p class="card__title1">{{ $activitie->content }}</p><br>
                  <a href="{{ url('/activities/show/'.$activitie->id)  }}">ดูรายละเอียด</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      @endforeach

      <div class="textright"><a href="{{ route('activities') }}">ดูทั้งหมด</a></div>
    </div>
    <div class="rightcolumn">
      <h3><c class="icon-calendar"></c> ปฎิทิน/ประชาสัมพันธ์</h3>
      <div id="content">
        
      @foreach ($newsupdate as $newsupdate)
        <ul class="timeline">
          <li class="event" data-date="27 Jan">
            <h3><a href="{{ url('/newsupdate/show/'.$newsupdate->id)  }}">{{ $newsupdate->title }}</a></h3>
            <p>{{ $newsupdate->content }}</p>
          </li>
        </ul>
        @endforeach
        <div><a href="newsupdate">ดูทั้งหมด</a></div>
      </div><br><br>
      <div class="w3-card w3-margin">
    <div class="w3-container w3-padding w3">
      <h5>หน่วยงานภายใน</h5>
    </div>
    <ul class="w3-ul w3-hoverable w3-white">
      <li class="w3-padding-5">
        <a href="https://bua.rmutr.ac.th/">คณะบริหารธุรกิจ</a>
      </li>
      <li class="w3-padding-5">
        <a href="https://reg.rmutr.ac.th/registrar/home.asp">งานทะเบียน</a>
      </li>
      </li>
      <li class="w3-padding-5">
        <a href="https://th-th.facebook.com/pages/category/College---University/งานกองทุนฯ-บพิตรพิมุข-จักรวรรดิ-858180540866398/">ระบบงานกองทุน</a>
      </li>
      </li>
      <li class="w3-padding-5">
        <a href="https://th-th.facebook.com/งานทะเบียนและฐานข้อมูล-บพิตรพิมุข-จักรวรรดิ-576140065834581/">ระบบฐานข้อมูล</a>
      </li>
    </ul>
  </div>
    </div>
    <div class="leftcolumn">
      <br>
      <h3><c class="icon-book"></c> เกี่ยวกับเรา</h3><br>

      @foreach ($abouts as $about)
    <div class="indent2">
        <p>{{ $about->text }}</p>
    </div>
    @endforeach
    </div>
    <div class="rightcolumn">
     <!-- Posts -->
  <div class="w3 w3-margin">
    <div class="w3-container w3-padding w3">
      <h5>video</h5>
    </div>
    <iframe width="100%"  src="https://www.youtube.com/embed/RKqq6kX0H5Q" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
