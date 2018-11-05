
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
                      <form action="<?= base_url('process/tambahPelaksana/')?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="id" class="form-control" value="<?= $id ?>">
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nama</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="Nama" name="name" class="form-control" value="<?= $name ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">NIP/NPM</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="NIP/NPM" name="nipm" class="form-control" value="<?= $nipm ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Posisi</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="Posisi" name="position" class="form-control" value="<?= $position ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Profile</label>
                              <div class="col-sm-10">
                                  <textarea name="profile" class="form-control" required="required"><?= $profile ?></textarea>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Desa</label>
                              <div class="col-sm-10">
                                  <select name="desa" class="form-control" required="required">
                                      <?php if($desa==""){ echo '<option>Pilih...</option>' ;}
                                            else{ echo '<option value="'.$desa.'">'.$desa.'</option>';}
                                      ?>
                                      <?php foreach($desas->result() as $row){
                                        if($desa==$row->id){continue;}
                                        else{?>
                                          <option value="<?= $row->id?>"><?= $row->nama?></option>
                                      <?php }}?>
                                  <select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Gambar</label>
                              <div class="col-sm-7">
                                  <input type="file" name="image" class="form-control">
                              </div>
                              <div class="col-sm-3">
                                  <img src="<?= base_url()?>assets/img/<?= $image ?>" style="width: 100px; height: auto;">
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