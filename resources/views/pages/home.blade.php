@extends('layouts.master')

@section('content')
<div class="body">
  <div class="fakeimg" style="height:100%;"></div><br><br>
  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">

        @foreach ($slideshows as $slideshow)

      <div class="carousel-item @if($loop->first)active @endif">
      <img class="d-block mx-auto img-fluid" src="{{asset("images/$slideshow->image")}}" width="1520px" height="30px"  alt="">
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
      <div class="card">
          <div class="slideshow-container">

              <div class="mySlides">
           
                <img class="img-fluid" src="<?php echo asset('assets/img/1004.jpg'); ?>" width="100%" height="550px" alt=""/>
                <div class="text">Caption Text</div>
              </div>

              <div class="mySlides">
                
                <img class="img-fluid" src="<?php echo asset('assets/img/10.jpg'); ?>" width="100%" height="" alt=""/>
                <div class="text">Caption Two</div>
              </div>

              <div class="mySlides">
              
                <img class="img-fluid" src="<?php echo asset('assets/img/10.jpg'); ?>" width="100%" height="100%" alt=""/>
                <div class="text">Caption Three</div>
              </div>

              <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
              <a class="next" onclick="plusSlides(1)">&#10095;</a>

              </div>

              <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
              </div>
              <br>
            

    <!-- /.row -->

      </div>
    </div>
    <div class="rightcolumn">
      <div class="card">
        <div class="w3-container w3-padding w3-indigo">
          <h4>BIT Video</h4>
        </div>
        <br>
        <div class="fakeimg">
            <video width="100%" controls>
              <source src="<?php echo asset('assets/img/bit.mp4'); ?>" type="video/mp4">
              <source src="<?php echo asset('assets/img/bit.ogg'); ?>" type="video/ogg">
            </video>

        </div><br>


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
<div class="w3-container w3-padding-64 w3-black  w3-xlarge" id="about">
  <div class="w3-content">
    <img class="img-fluid" src="<?php echo asset('assets/img/com.jpg'); ?>" width="100%" height="" alt=""/>
  </div>
</div>
</div>



@endsection
