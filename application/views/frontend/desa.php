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
    <h1><b>Desa <?= $desa->nama?></b></h1>
      <p>Desa Binaan <span class="w3-tag w3-red">Revolusi Putih Bengkulu</span></p>
  </header>
  
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">
    <header class="w3-container w3-center w3-padding-32 w3-hide-large w3-text-red" style="margin-top:75px"> 
      <h1><b>Desa <?= $desa->nama?></b></h1>
      <p>Desa Binaan <span class="w3-tag w3-red">Revolusi Putih Bengkulu</span></p>
    </header>
    <div class="w3-row" style="margin-top:50px">
      <div class="w3-container w3-card w3-margin w3-padding-large">

        <div class="w3-justify">
          <img src="<?= base_url()?>assets/img/<?= $desa->gambar?>" alt="<?= $desa->nama?>" style="width:100%" class="w3-padding-16">
          <p><?= $desa->deskripsi?></p>
        </div>
      </div>
    </div>
  <!-- team -->
    <div class="w3-container" id="team" style="margin-top:75px">
      <h1 class="w3-xxlarge w3-text-red"><b>Mahasiswa KKN-PPM.</b></h1>
      <hr style="width:50px;border:5px solid red" class="w3-round">
      <p>Kelompok KKN-PPM Revolusi Putih Universitas Bengkulu Periode 85.</p>
      <!-- The Team -->
      <div class="w3-row-padding w3-grayscale">
        <?php foreach($team->result() as $team){?>
          <div class="w3-col m4 w3-margin-bottom">
            <div class="w3-light-grey">
              <img src="<?= base_url()?>assets/img/<?= $team->image ?>" alt="<?= $team->name ?>" style="width:100%">
              <div class="w3-container">
                <h3><?= $team->name ?></h3>
                <p class="w3-opacity"><?= $team->position ?></p>
                <p><?= $team->instansi.','.$team->profile ?></p>
              </div>
            </div>
          </div>
        <?php }?>
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
