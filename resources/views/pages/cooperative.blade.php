@extends('layouts.master')

@section('content')
<div class="body">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="home">หน้าแรก</a></li>
    <li class="breadcrumb-item active" aria-current="page">สหกิจศึกษา</li>
  </ol>
</div>

          <div class="content">
         <!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

    <!-- First Photo Grid-->
    <div class="w3-row-padding w3-padding-16 w3-center" id="food">
      <div class="w3-quarter">
        <img src="assets/img/1.jpg" alt="Sandwich" style="width:100%">
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
        <img src="assets/img/1.jpg" alt="Popsicle" style="width:100%">
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
  
      
    
      
      
      
      
      @endsection