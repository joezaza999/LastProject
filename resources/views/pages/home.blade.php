@extends('layouts.master')

@section('content')
<div class="body">
  <div class="fakeimg" style="height:100%;"></div>
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <!-- Slide One - Set the background image for this slide in the line below -->
      <div class="carousel-item active fill" style="background-image: url('assets/img/s1.png')">
        <div class="carousel-caption d-none d-md-block">
        
        </div>
      </div>
      <!-- Slide Two - Set the background image for this slide in the line below -->
      <div class="carousel-item fill" style="background-image: url('assets/img/s2.png')">
        <div class="carousel-caption d-none d-md-block">
      
        </div>
      </div>
      <!-- Slide Three - Set the background image for this slide in the line below -->
      <div class="carousel-item fill" style="background-image: url('assets/img/s3.png')">
        <div class="carousel-caption d-none d-md-block">

        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
  </div>
      <div class="content">
<br>

  <div class="row">
    <div class="leftcolumn">
      <div class="card">
          <img class="card-img-top img-fluid" src="<?php echo asset('assets/img/header11.png'); ?>" width="100%" height="100%" alt="">
          <div class="slideshow-container">

              <div class="mySlides">
                <div class="numbertext">1 / 3</div>
                <img class="img-fluid" src="<?php echo asset('assets/img/1004.jpg'); ?>" width="100%" height="550px" alt=""/>
                <div class="text">Caption Text</div>
              </div>
              
              <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                <img class="img-fluid" src="<?php echo asset('assets/img/10.jpg'); ?>" width="100%" height="" alt=""/>
                <div class="text">Caption Two</div>
              </div>
              
              <div class="mySlides">
                <div class="numbertext">3 / 3</div>
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
              <div class="row">
                  <div class="col-lg-4 col-sm-6 mb-4">
                    <div>
                        <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/1000.jpg'); ?>" width="100%" height="100%" alt=""></a>  
                        <p class="card-text">เทคโนโลยีสารสนเทศ</p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-4">
                    <div>
                        <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/1002.jpg'); ?>" width="100%" height="100%" alt=""></a>   
                        <p class="card-text">เทคโนโลยีสารสนเทศ</p>
                    </div>
                  </div>
                  <div class="col-lg-4 col-sm-6 mb-4">
                    <div>
                        <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/1002.jpg'); ?>" width="100%" height="100%" alt=""></a>              
                        <p class="card-text">เทคโนโลยีสารสนเทศ</p>
                    </div>
                  </div>
            </div>
    
    <!-- /.row -->
  
      </div>
    </div>
    <div class="rightcolumn">
   
      <div class="card">
        <h2>BIT VDO</h2>
        <div class="fakeimg">
            <video width="300" controls>
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
</div>



@endsection