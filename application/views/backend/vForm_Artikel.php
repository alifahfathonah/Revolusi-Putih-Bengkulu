
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
                      <form action="<?= base_url('process/tambahArtikel/')?>" class="form-horizontal style-form" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="id" class="form-control" value="<?= $id ?>">
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Judul</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="Judul" name="judul" class="form-control" value="<?= $judul ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Tag</label>
                              <div class="col-sm-10">
                                  <select name="tag" class="form-control" required="required">
                                      <?php if($tag==""){ echo '<option>Pilih...</option>' ;}
                                            else{ echo '<option value="'.$id_tag.'">'.$tag.'</option>';}
                                      ?>
                                      <?php foreach($tags->result() as $row){
                                        if($id_tag==$row->id){continue;}
                                        else{?>
                                          <option value="<?= $row->id?>"><?= $row->judul?></option>
                                      <?php }}?>
                                  </select>
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Gambar</label>
                              <div class="col-sm-7">
                                  <input type="file" name="gambar" class="form-control">
                              </div>
                              <div class="col-sm-3">
                                  <img src="<?= base_url()?>assets/img/<?= $gambar ?>" style="width: 100px; height: auto;">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Isi</label>
                              <div class="col-sm-10">
                                  <textarea name="isi" class="form-control" id="textarea" required="required"><?= $isi ?></textarea>
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