@extends('layouts.master')

@section('content')
<div class="body">
  <br><br><br>
  <div class="fakeimg" style="height:100%;"></div>
  <div id="carouselExampleControls" id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($slideshows as $slideshow)
      <div class="carousel-item @if($loop->first)active @endif">
      <img class="d-block mx-auto img-fluid" src="{{asset("images/$slideshow->image")}}" width="1110px"   alt="">
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
    <h2><i style="font-size:24px" class="fa">&#xf1ea;</i> BIT Newsupdate</h2>
    <div class="row">
      @foreach ($newsupdatess as $newsupdate)
      <div class="col-md-4">
        <div class="card-wrapper">
          <div class="thumbnail-container">
            <a href="#">
              <img src="{{ asset('images/'.$newsupdate->image) }}" width="100%">
            </a>
          </div>
          <div class="card-desc-wrapper">
            <div class="card-desc-container">
              <div class="card-desc-cont">
                  <div class="card-desc-header">Have your say on the plan for Johnstone park</div>
                  <div class="card-desc-desc app"><p>Comment on the concept and raingarden plan that will guide future improvements within and surrounding the park.</p></div>
              </div>
              <div class="card-desc-link"><a href="{{ url('/newsupdate/show/'.$newsupdate->id)  }}">Read more</a></div>
                  <div class="card-desc-tag">ประชาสัมพันธ์</div>
            </div>
            </div>
        </div>
      </div>
      @endforeach
  </div> 
  <div class="row">
    <div class="leftcolumn">
      <h2><i style="font-size:24px" class="fa">&#xf1ea;</i> BIT activities</h2>
      @foreach ($activities as $activitie)
      <div class="wrapper1">
        <div class="grid">
          <div class="card-wrapper">
            <div class="thumbnail-container">
              <img src="{{ asset('images/'.$activitie->image) }}" class="card-img-top">
              <div class="card-desc-wrapper">
                <div class="card-desc-container">
                  <div class="card-desc-cont">
                      <div class="card-desc-header">Have your say on the plan for Johnstone park</div>
                      <div class="card-desc-desc appp"><p>Comment on the concept and raingarden plan that will guide future improvements within and surrounding the park. </p></div>
                  </div>
                  <div class="card-desc-link"><a href="{{ url('/activities/show/'.$activitie->id)  }}">Read more</a></div>
                      <div class="card-desc-tag1">กิจกรรม</div>
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
      <h2><c class="icon-calendar"></c> BIT/Calendar</h2>
      <div id="content">     
      @foreach ($newsupdates as $newsupdate)
        <ul class="timeline">
          <li class="event" data-date="{{ $newsupdate->date }}">
            <h3><a href="{{ url('/newsupdate/show/'.$newsupdate->id)  }}">{{ $newsupdate->title }}</a></h3>
            <p>{{ $newsupdate->content }}</p>
          </li>
        </ul>
        @endforeach
        <div><a href="newsupdate">ดูทั้งหมด</a></div>
      </div><br><br>
    </div>
    <div class="leftcolumn">
      <br>
      <h3><c class="icon-book"></c> BIT About</h3><br>
      @foreach ($abouts as $about)
    <div class="indent2">
        <p>{!! $about->text !!}</p>  
    </div>
    @endforeach
    </div>
    <div class="rightcolumn">
    <div class=" w3-margin">
    <div class="w3-container w3-padding w3">
      <h5>หน่วยงานภายใน</h5>
    </div>
    <ul class="w3-ul w3-hoverable">
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
  </div>
  <div class="content">

    
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
