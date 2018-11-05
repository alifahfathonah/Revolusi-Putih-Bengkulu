<!DOCTYPE html>
<html>
<title>Revolusi Putih Bengkulu</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" type="image/x-icon" href="<?= base_url()?>assets/img/<?= $config->web_icon?>" />
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

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-indigo w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Tutup Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-32"><b>Revolusi Putih<br>Bengkulu</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#deskripsi" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Deskripsi</a> 
    <a href="#program" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Program Kerja</a>
    <a href="#produk" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Produk Olahan</a>
    <a href="#foto" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Foto Kegiatan</a>
    <a href="#video" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Video Terkait</a>
    <a href="#blog" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Blog & Artikel</a>
    <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Pelaksana</a>
    <a href="#desa" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Desa Binaan</a>
    <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kontak</a>
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-indigo w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-indigo w3-margin-right" onclick="w3_open()">☰</a>
  <span>Revolusi Putih</span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<div class="w3-content w3-hide-small w3-hide-medium" style="margin-left:300px; max-width:2000px;">
  <!-- Automatic Slideshow Images -->
  <div id="home">
    <?php foreach($slider->result() as $slider){?>
      <div class="mySlides w3-display-container w3-center">
        <img src="<?= base_url()?>assets/img/<?= $slider->gambar?>" style="width:100%">
        <div class="w3-display-bottommiddle w3-container w3-text-white w3-padding-16 w3-grey w3-hover-white" style="opacity:0.75;width:100%">
          <h3><b><?= $slider->judul?></b></h3>
          <a href="<?= $slider->url?>"><button class="w3-button w3-indigo"><i class="fa fa-plus"></i> <?= $slider->tombol?></button></a>
        </div>
      </div>
    <?php }?>
  </div>
</div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Modal for full size images on click-->
  <div id="modal01" class="w3-modal w3-indigo" style="padding-top:0" onclick="this.style.display='none'">
    <span class="w3-button w3-indigo w3-xxlarge w3-display-topright">×</span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
      <img id="img01" class="w3-image">
      <p id="caption"></p>
    </div>
  </div>

  <!-- Services -->
  <div class="w3-container" id="deskripsi" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Deskripsi.</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p>Tentang Revolusi Putih Bengkulu</p>
    <p class="w3-justify"><?= $config->web_desc?></p>
  </div>

  <!-- Blog -->
  <div class="w3-container" id="blog" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Program Kerja.</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p>Program Kerja unggulan yang dilaksanakan.</p>
    <div class="w3-row-padding">
      <?php foreach($proker->result() as $proker){?>
        <div class="w3-half w3-container w3-margin-bottom">
          <img src="<?= base_url()?>assets/img/<?= $proker->icon ?>" alt="<?= $proker->judul ?>" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-light-grey w3-center w3-justify">
            <h3><?= $proker->judul ?></h3>
            <p><?= $proker->deskripsi ?></p>
          </div>
        </div>
      <?php }?>
    </div>
  </div>

  <!-- Produk -->
  <div class="w3-container" id="produk" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Produk Olahan.</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p>Kumpulan foto kegiatan yang telah atau sedang dilaksanakan.</p>
    <div class="w3-row-padding w3-center">
      <?php foreach($produk->result() as $produk){?>
        <div class="w3-col l4 m6 w3-margin-bottom">
          <div class="w3-display-container">
            <div class="w3-display-topleft w3-indigo w3-padding"><?= $produk->judul ?></div>
            <img src="<?= base_url()?>assets/img/<?= $produk->src ?>" onclick="onClick(this)" alt="<?= $produk->judul ?>" style="width:100%">
          </div>
        </div>
      <?php }?>
    </div>
  </div>

  <!-- Gallery -->
  <div class="w3-container" id="foto" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Foto Kegiatan.</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p>Kumpulan foto kegiatan yang telah atau sedang dilaksanakan.</p>
    <div class="w3-row-padding w3-center">
      <?php $i=0; foreach($gambar->result() as $gambar){?>
        <div class="w3-col <?php if($i==0){echo 'l6';}else{echo 'l3';}?> m6 w3-margin-bottom">
          <div class="w3-display-container">
            <img src="<?= base_url()?>assets/img/<?= $gambar->src ?>" onclick="onClick(this)" alt="<?= $gambar->judul ?>" style="width:100%">
          </div>
        </div>
      <?php $i++; }?>
      <div class="w3-col l12 m6 w3-margin-bottom">
        <a href="<?= base_url()?>galeri"><button class="w3-button w3-indigo" style="margin-top:32px"><i class="fa fa-plus"></i> LAINNYA </button></a>
      </div>
    </div>
  </div>

  <!-- Video-->
  <div class="w3-container" id="video" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Video Terkait.</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
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

  <!-- Blog -->
  <div class="w3-container" id="blog" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Blog & Artikel.</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p>Kumpulan blog dan artikel menarik tentang susu.</p>
    <div class="w3-row-padding">
      <?php foreach($artikel->result() as $artikel){?>
        <div class="w3-third w3-container w3-margin-bottom">
          <img src="<?= base_url()?>assets/img/<?= $artikel->gambar ?>" alt="<?= $artikel->judul ?>" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-light-grey">
            <p><b><?= $artikel->judul ?></b></p>
            <p><?= $artikel->isi ?></p>
            <p><a href="<?= base_url()?>baca/<?= $artikel->id?>"><i>Selengkapnya</i></a></p>
          </div>
        </div>
      <?php }?>
      <div class="w3-col l12 m6 w3-center">
        <a href="<?= base_url()?>artikel"><button class="w3-button w3-indigo" style="margin-top:32px"><i class="fa fa-plus"></i> LAINNYA </button></a>
      </div>
    </div>
  </div>

  <!-- team -->
  <div class="w3-container" id="team" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Pelaksana Program.</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p>Para pencetus dan pelaksana program.</p>
    <!-- The Team -->
    <div class="w3-row-padding w3-grayscale">
      <?php foreach($team->result() as $team){?>
        <div class="w3-col m4 w3-margin-bottom">
          <div class="w3-light-grey">
            <img src="<?= base_url()?>assets/img/<?= $team->image ?>" alt="<?= $team->name ?>" style="width:100%">
            <div class="w3-container">
              <h3><?= $team->name ?></h3>
              <p class="w3-opacity"><?= $team->position ?></p>
              <p><?= $team->profile ?></p>
            </div>
          </div>
        </div>
      <?php }?>
    </div>
  </div>

  <!-- team -->
  <div class="w3-container" id="desa" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Desa Binaan.</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p>Desa binaan Revolusi Putih Bengkulu.</p>
    <!-- The Team -->
    <div class="w3-row-padding">
      <?php foreach($desa->result() as $desa){?>
        <div class="w3-col m4 w3-margin-bottom">
          <a href="#"></a>
          <div class="w3-light-grey">
            <img src="<?= base_url()?>assets/img/<?= $desa->gambar ?>" alt="<?= $desa->nama ?>" style="width:100%">
            <a href="<?= base_url('desa/').$desa->id?>" class="w3-button w3-indigo w3-xlarge" style="width: 100%"><i class="fa fa-arrow-up w3-margin-right"></i><?= $desa->nama?></a>
          </div>
        </div>
      <?php }?>
    </div>
  </div>

  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:50px">
    <h1 class="w3-xxxlarge w3-text-indigo"><b>Kontak Kami.</b></h1>
    <hr style="width:50px;border:5px solid blue" class="w3-round">
    <p>Jangan ragu untuk menghubungi kami.</p>
    <div class="w3-row w3-padding-32 w3-section">
      <div class="w3-col m4 w3-container">
        <!-- Add Google Maps -->
        <div id="googleMap" class="w3-round-large w3-greyscale" style="width:100%;height:400px;"></div>
      </div>
      <div class="w3-col m8 w3-panel">
        <div class="w3-large w3-margin-bottom">
          <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> <?= $config->kontak_alamat?><br>
          <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Telepon: <?= $config->kontak_telp?><br>
          <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: <?= $config->kontak_email?><br>
        </div>
        <div class="w3-container w3-card-4 w3-padding-16 w3-white">
          <p>Silahkan tinggalkan pesan, kritik, atau saran:</p>
          <form action="<?= base_url()?>process/tambahPesan" method="post" target="_blank">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Nama" requiindigo name="name">
              </div>
              <div class="w3-half">
                <input class="w3-input w3-border" type="text" placeholder="Email" requiindigo name="email">
              </div>
            </div>
            <textarea class="w3-input w3-border" placeholder="Pesan" requiindigo name="message"></textarea>
            <button class="w3-button w3-indigo w3-right w3-section" type="submit">
              <i class="fa fa-paper-plane"></i> Kirim Pesan
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <footer class="w3-center w3-padding-32">
  <a href="#home" class="w3-button w3-indigo"><i class="fa fa-arrow-up w3-margin-right"></i>Kembali ke Atas</a>
  <div class="w3-xlarge w3-section">
    <a href="#"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p>Designed by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-indigo">manasuka.inc</a>. Poweindigo by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-indigo">w3.css</a></p>
</footer>

<!-- End page content -->
</div>

<script>

// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

function myMap()
{
  myCenter=new google.maps.LatLng(<?= $config->kontak_map_latitude?>,<?= $config->kontak_map_langitude?>);
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

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDLtVi0H4w9mVTJbrShUo8P0AIsIRzOZ6c&callback=myMap"></script>

</body>
</html>
