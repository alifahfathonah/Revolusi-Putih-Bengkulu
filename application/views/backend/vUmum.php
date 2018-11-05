
          	<h3><i class="fa fa-angle-right"></i> <?= $title?></h3>
            <?php 
              $error = $this->session->flashdata('error');
              if(isset($error)) {
              ?>
            	   <h5 style="color: red"><i class="fa fa-exclamation-circle"></i> <?= $error?></h5>
            <?php }?>
          	<!-- BASIC FORM ELELEMNTS -->
          	<div class="row mt">
              <div class="col-lg-12">
                  <div class="form-panel">
                      <form action="<?= base_url('process/tambahConfig')?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                          <h4><i class="fa fa-globe"></i> Info Website</h4>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nama Website</label>
                              <div class="col-sm-10">
                                  <input type="text" name="web_name" class="form-control" value="<?= $web_name ?>" placeholder="Nama Website" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Deskripsi Website</label>
                              <div class="col-sm-10">
                                  <textarea name="web_desc" class="form-control" required="required"><?= $web_desc ?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Logo Website</label>
                              <div class="col-sm-7">
                                  <input type="file" name="web_icon" class="form-control">
                              </div>
                              <div class="col-sm-3">
                                  <img src="<?= base_url()?>assets/img/<?= $web_icon ?>" style="width: 100px; height: auto;">
                              </div>
                          </div>
                          <br>
                          <h4><i class="fa fa-phone"></i> Info Kontak</h4>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Alamat</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="Alamat" name="kontak_alamat" class="form-control" value="<?= $kontak_alamat ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Telepon</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="Telepon" name="kontak_telp" class="form-control" value="<?= $kontak_telp ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Email</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="Email" name="kontak_email" class="form-control" value="<?= $kontak_email ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Lokasi</label>
                              <div class="col-sm-10 form-inline">
                                  <input type="text" placeholder="Latitude" name="kontak_map_latitude" class="form-control" value="<?= $kontak_map_latitude ?>" required="required">
                                  <input type="text" placeholder="Langitude" name="kontak_map_langitude" class="form-control" value="<?= $kontak_map_langitude ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <div class="col-sm-2 col-sm-offset-2">
                                  <input type="submit" name="submit" class="btn btn-primary" value="Simpan">
                              </div>
                          </div>
                      </form>
                  </div>
              </div><!-- col-lg-12-->       
            </div><!-- /row -->