<!DOCTYPE html>
<html>
<title>Revolusi Putih Bengkulu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?= base_url()?>assets/frontend/w3.css">
<link rel="stylesheet" href="<?= base_url()?>assets/frontend/poppins.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<body>

<?php $this->load->view('frontend/sidebar')?>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span>Revolusi Putih Bengkulu</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-content" style="margin-left:300px; max-width:2000px;" id="home">
  <!-- Header -->
  <header class="w3-container w3-center w3-padding-32 w3-hide-small w3-text-red"> 
    <h1><b>DOKUMENTASI</b></h1>
    <p>Kumpulan dokumentasi kegiatan <span class="w3-tag w3-red">Revolusi Putih Bengkulu</span></p>
  </header>
  
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-red" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-red w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Produk -->
  <div class="w3-container" id="foto" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Foto Kegiatan.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Kumpulan foto kegiatan yang telah atau sedang dilaksanakan.</p>
    <div class="w3-row-padding w3-center">
      <?php foreach($gambar->result() as $gambar){?>
        <div class="w3-col l6 m6 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-red w3-padding"><?= $gambar->judul?></div>
            <img src="<?= base_url()?>assets/img/<?= $gambar->src?>" onclick="onClick(this)" alt="<?= $gambar->judul?>" style="width:100%">
          </div>
        </div>
      <?php }?>
    </div>
      <div class="w3-col l12 w3-padding-32 m6 w3-center">
        <div class="w3-bar">
          <a href="#" class="w3-bar-item w3-button w3-hover-red">«</a>
          <a href="#" class="w3-bar-item w3-red w3-button">1</a>
          <a href="#" class="w3-bar-item w3-button w3-hover-red">2</a>
          <a href="#" class="w3-bar-item w3-button w3-hover-red">»</a>
        </div>
      </div>
  </div>

  <!-- Video-->
  <div class="w3-container" id="video" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Video Terkait.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Kumpulan video dokumentasi program.</p>
    <!-- Slideshow -->
    <div class="w3-container">
      <?php foreach($video->result() as $video1){?>
        <div class="w3-display-container mySlider">
          <iframe src="https://www.youtube.com/embed/<?= $video1->src ?>?controls=1" style="width:100%; height: 400px;"></iframe>
        </div>
      <?php }?>
      <!-- Slideshow next/previous buttons -->
      <div class="w3-container w3-dark-grey w3-padding w3-xlarge">
        <div class="w3-left" onclick="plusDivs(-1)"><i class="fa fa-arrow-circle-left w3-hover-text-teal"></i></div>
        <div class="w3-right" onclick="plusDivs(1)"><i class="fa fa-arrow-circle-right w3-hover-text-teal"></i></div>
      
        <div class="w3-center">
          <?php $i=1; foreach($video->result() as $video2){?>
            <span class="w3-tag demodots w3-border w3-transparent w3-hover-white" onclick="currentDiv(<?= $i?>)"></span>
          <?php $i++; }?>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-padding-32">
  <a href="#home" class="w3-button w3-red"><i class="fa fa-arrow-up w3-margin-right"></i>Kembali ke Atas</a>
  <div class="w3-xlarge w3-section">
    <a href="#"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Designed by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-red">manasuka.inc</a>. Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-red">w3.css</a></p>
</footer>

<!-- End page content -->
</div>

<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}

// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Slideshow
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
  var x = document.getElementsByClassName("mySlider");
  var dots = document.getElementsByClassName("demodots");
  if (n > x.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = x.length} ;
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

</body>
</html>
