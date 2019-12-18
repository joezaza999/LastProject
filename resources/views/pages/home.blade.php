@extends('layouts.master')

@section('content')

      <div class="content">
        <h2>เทคโนโลยีสารสนเทศทางธุรกิจ</h2>
      <div class="fakeimg" style="height:100%;"></div>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <!-- Slide One - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('assets/img/s1.png')">
                  <div class="carousel-caption d-none d-md-block">
                  
                  </div>
                </div>
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://source.unsplash.com/bF2vsubyHcQ/1920x1080')">
                  <div class="carousel-caption d-none d-md-block">
                
                  </div>
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://source.unsplash.com/szFUQoyvrxM/1920x1080')">
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
<br>

  <div class="row">
    <div class="leftcolumn">
      <div class="card">
          <img class="card-img-top" src="<?php echo asset('assets/img/header11.png'); ?>" width="100%" height="100%" alt="">
          <div class="slideshow-container">

              <div class="mySlides">
                <div class="numbertext">1 / 3</div>
                <img src="<?php echo asset('assets/img/1004.jpg'); ?>" width="100%" height="550px" alt=""/>
                <div class="text">Caption Text</div>
              </div>
              
              <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                <img src="<?php echo asset('assets/img/10.jpg'); ?>" width="100%" height="" alt=""/>
                <div class="text">Caption Two</div>
              </div>
              
              <div class="mySlides">
                <div class="numbertext">3 / 3</div>
                <img src="<?php echo asset('assets/img/10.jpg'); ?>" width="100%" height="100%" alt=""/>
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
        <img class="card-img-top" src="<?php echo asset('assets/img/leder2.png'); ?>" width="100%" height="100%" alt=""><br>
        <div class="fakeimg" style="height:100%;">
            <div class="row justify-content-md-center">
          <div class="col-lg-7 col-sm-6 mb-4" >
            <div>
              <a href="member"><img class="card-img-top" src="<?php echo asset('assets/img/60.png'); ?>" width="141px" height="213px" alt=""></a>
            </div>
          </div>
        </div>
      </div>
      <p>ผู้ช่วยศาสตราจารย์ ดร.หงษ์ศิริ ภิยโยดิลกชัย</p>
      </div>
      <div class="card">
        <h2>BIT VDO</h2>
        <div class="fakeimg">
            <img src="<?php echo asset('assets/img/2.png'); ?>" width="100%" height="100%" alt=""/>
          
        </div><br>
        
        <div class="fakeimg">Image</div>
      
      </div>
     
    </div>
  </div>
  <br>
  <div class="row">
      <div class="left">
        <div class="card">
            <img id="logo-main" src="<?php echo asset('assets/img/nav.png'); ?>" width="100%" height="80px" alt=""/><br>
          <div class="fakeimg" style="height:100%;"></div>
          <div class="row">
              <div class="col-lg-4 col-sm-6 mb-4">
                <div>
                    <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/51.jpg'); ?>" width="100%" height="100%" alt=""></a>  
                    <p class="card-text">เทคโนโลยีสารสนเทศ</p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 mb-4">
                <div>
                    <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/52.jpg'); ?>" width="100%" height="100%" alt=""></a>   
                    <p class="card-text">เทคโนโลยีสารสนเทศ</p>
                </div>
              </div>
              <div class="col-lg-4 col-sm-6 mb-4">
                <div>
                    <a href="#"><img class="card-img-top" src="<?php echo asset('assets/img/53.jpg'); ?>" width="100%" height="100%" alt=""></a>              
                    <p class="card-text">เทคโนโลยีสารสนเทศ</p>
                </div>
              </div>
        </div>
        </div>
      </div>
</div>

  
      <div class="row">
          <div class="left">
            <div class="card">
                <img id="logo-main" src="<?php echo asset('assets/img/sty.png'); ?>" width="100%" height="100%" alt=""/><br>
              <div class="fakeimg" style="height:100%;"></div>
              
            </div>
          </div>
</div>







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



@endsection