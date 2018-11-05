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

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-red"><b>Kontak Kami.</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <p>Jangan ragu untuk menghubungi kami.</p>
    <div class="w3-row w3-padding-32 w3-section">
      <div class="w3-col m4 w3-container">
        <!-- Add Google Maps -->
        <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
      </div>
      <div class="w3-col m8 w3-panel">
        <div class="w3-large w3-margin-bottom">
          <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <?= $alamat?><br>
          <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Telepon: <?= $telp?><br>
          <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: <?= $email?><br>
        </div>
        <div class="w3-container w3-card-4 w3-padding-16 w3-white">
          <p>Silahkan tinggalkan pesan, kritik, atau saran:</p>
          <form action="<?= base_url()?>process/tambahPesan" target="_blank">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Nama" required name="name">
              </div>
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Email" required name="email">
              </div>
            </div>
            <textarea class="w3-input w3-border" placeholder="Pesan" required name="message"></textarea>
            <button class="w3-button w3-red w3-right w3-section" type="submit">
              <i class="fa fa-paper-plane"></i> Kirim Pesan
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-padding-32">
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

function myMap()
{
  myCenter=new google.maps.LatLng(-3.7369276,102.3343096);
  var mapOptions= {
    center:myCenter,
    zoom:11, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLtVi0H4w9mVTJbrShUo8P0AIsIRzOZ6c&callback=myMap"></script>

</body>
</html>
