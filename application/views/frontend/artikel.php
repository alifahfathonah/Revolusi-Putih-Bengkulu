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
    <h1><b>BLOG & ARTIKEL</b></h1>
    <p>Kumpulan blog & artikel tentang <span class="w3-tag w3-red">Revolusi Putih Bengkulu</span></p>
  </header>
  
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
  <header class="w3-container w3-center w3-padding-32 w3-hide-large w3-text-red" style="margin-top:75px"> 
    <h1><b>BLOG & ARTIKEL</b></h1>
    <p>Kumpulan blog & artikel tentang <span class="w3-tag w3-red">Revolusi Putih Bengkulu</span></p>
  </header>
    <div class="w3-row-padding">
      <?php foreach($artikel->result() as $artikel){?>
        <div class="w3-third w3-container" style="margin-top: 25px">
          <img src="<?= base_url()?>assets/img/<?= $artikel->gambar?>" alt="Norway" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-light-grey">
            <p><b><?= $artikel->judul?></b></p>
            <p><?= substr($artikel->isi, 0, 90)."...";?></p>
            <p><a href="<?= base_url()?>frontend/baca/<?= $artikel->id?>"><i>Selengkapnya</i></a></p>
          </div>
        </div>
      <?php }?>
      <div class="w3-col l12 w3-padding-32 m6 w3-center">
        <div class="w3-bar">
          <a href="#" class="w3-bar-item w3-button w3-hover-red">«</a>
          <a href="#" class="w3-bar-item w3-red w3-button">1</a>
          <a href="#" class="w3-bar-item w3-button w3-hover-red">2</a>
          <a href="#" class="w3-bar-item w3-button w3-hover-red">»</a>
        </div>
      </div>
    </div>

    <div class="w3-row" style="margin-top: 75px">
    <div class="w3-col l6 s12">
      <!-- Posts -->
      <div class="w3-card w3-margin">
        <div class="w3-container w3-padding w3-red">
          <h4>Terpopuler</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
          <?php $i=1; foreach($populer->result() as $populer){?>
            <li class="w3-padding-16 <?php if($i>3){ echo 'w3-hide-medium w3-hide-small';}?>">
              <img src="<?= base_url()?>assets/img/<?= $populer->gambar?>" alt="<?= $populer->judul?>" class="w3-left w3-margin-right" style="width:50px">
              <span class="w3-large"><?= $populer->judul?></span><br>
              <span><?= substr($populer->isi, 0,35)."...";?></span>
              <span><i class="fa fa-arrow-up"></i><span>
            </li>
          <?php $i++; }?>
        </ul>
      </div>
      <hr> 
    </div>
 
    <div class="w3-col l6 s12">
      <!-- Labels / tags -->
      <div class="w3-card w3-margin">
        <div class="w3-container w3-padding w3-red">
          <h4>Tags</h4>
        </div>
        <div class="w3-container w3-white">
        <p>
          <?php $i=1; foreach($tags->result() as $tags){?>
            <a href="<?= base_url()?>frontend/artikel/<?= $tags->id ?>"><span class="w3-tag w3-light-grey w3-hover-red w3-margin-bottom"><?= $tags->judul?></span></a>
          <?php }?>
        </p>
        </div>
      </div>
      <!-- Subscribe -->
      <div class="w3-card w3-margin">
        <div class="w3-container w3-padding w3-red">
          <h4>Subscribe</h4>
        </div>
        <div class="w3-container w3-white">
          <p>Enter your e-mail below and get notified on the latest blog posts.</p>
          <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
          <p><button type="button" class="w3-button w3-block w3-red">Subscribe</button></p>
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

</script>

</body>
</html>
