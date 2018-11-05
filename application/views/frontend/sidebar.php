<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-button w3-hide-large w3-display-topleft" style="width:100%;font-size:22px">Tutup Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-32"><b>Revolusi Putih<br>Bengkulu</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="<?= base_url()?>" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Halaman Utama</a> 
    <a href="<?= base_url()?>artikel" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Blog & Artikel</a>
    <a href="<?= base_url()?>galeri" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Dokumentasi</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-bar-item w3-button w3-hover-white">
      Desa Binaan <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-show w3-padding-large w3-medium">
      <?php 
      $data = $this->mDatabase->get('desa');
      foreach($data->result() as $data){?>
        <a href="<?= base_url('desa/'.$data->id)?>" onclick="w3_close()" class="w3-bar-item w3-button"><?= $data->nama?></a>
      <?php }?>
    </div>
    <a href="<?= base_url()?>kontak" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Kontak</a>
  </div>
</nav>