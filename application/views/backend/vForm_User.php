
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
                      <form action="<?= base_url('process/tambahUser')?>" class="form-horizontal style-form" method="post">
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Username</label>
                              <div class="col-sm-10">
                                  <input type="text" name="username" class="form-control" value="<?= $username ?>" placeholder="Username" required="required">
                                  <input type="hidden" name="usernamee" class="form-control" value="<?= $username ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Nama Lengkap</label>
                              <div class="col-sm-10">
                                  <input type="text" placeholder="Nama Lengkap" name="fullname" class="form-control" value="<?= $fullname ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Password</label>
                              <div class="col-sm-10">
                                  <input type="password" placeholder="Password"  name="password" class="form-control" value="<?= $password ?>" required="required">
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 control-label">Ulangi Password</label>
                              <div class="col-sm-10">
                                  <input type="password" placeholder="Ulangi Password" name="ulangipassword" class="form-control" value="<?= $password ?>" required="required">
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