@extends('layouts.master')

@section('content')

          <div class="content">
      
        <!-- Slideshow Header -->
        <div class="w3-container" id="apartment">
          <h2 class="w3-text-green">บรรยากาศในห้องเรียน</h2>
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
      
      
      @endsection