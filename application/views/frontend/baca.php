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
    
    <div class="w3-row" style="margin-top:75px">
      <div class="w3-container w3-card w3-margin w3-padding-large">
        <div class="w3-center">
          <h3><?= $artikel->judul?></h3>
          <h5><?= $artikel->fullname?>, <span class="w3-opacity"><?= $artikel->tgl_upload?></span></h5>
        </div>

        <div class="w3-justify">
          <img src="<?= base_url()?>assets/img/<?= $artikel->gambar?>" alt="<?= $artikel->judul?>" style="width:100%" class="w3-padding-16">
          <p><?= $artikel->isi?> <span class="w3-opacity">(<?= $artikel->judul_tag?>)</span></p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Suka</b></button></p>
          <!--p class="w3-right"><button class="w3-button w3-red" onclick="myFunction('demo')" id="myBtn"><b>Komentar  </b> <span class="w3-tag w3-white">1</span></button></p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo" style="display:none">
            <hr>
              <div class="w3-col l2 m3">
                <img src="<?= base_url()?>assets/img/NS3FB_WP_R01_1920x1080.jpg" style="width:90px;">
              </div>
              <div class="w3-col l10 m9">
                <h4>George <span class="w3-opacity w3-medium">May 3, 2015, 6:32 PM</span></h4>
                <p>Great blog post! Following</p>
              </div>
          </div-->
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
              <a href="<?= base_url()?>frontend/baca/<?= $populer->id ?>"><span class="w3-tag w3-red w3-margin-bottom">Lihat</span></a>
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

// Toggle between hiding and showing blog replies/comments
document.getElementById("myBtn").click();
function myFunction(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

function likeFunction(x) {
    x.style.fontWeight = "bold";
    x.innerHTML = "✓ Disukai";
    
}
</script>

</body>
</html>
