              
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel">
                          <?php
                            $info=$this->session->flashdata('info');
                            $error=$this->session->flashdata('error');
                            if(!empty($info)) { ?>
                               <h4 style="color: green"><i class="fa fa-check-circle"></i> <?= $info ?></h4>
                            <?php } elseif(!empty($error)) { ?>
                                <h5 style="color: red"><i class="fa fa-exclamation-circle"> </i><?= $error ?></h5>
                            <?php } ?>
                          <table class="table table-striped table-advance table-hover">
                            <h4><i class="fa fa-angle-right"></i> Manajemen Pelaksana</h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th>No</th>
                                  <th>Nama</th>
                                  <th>Posisi</th>
                                  <th>Profil</th>
                                  <th>Gambar</th>
                                  <th><a class="btn btn-info" href="<?= base_url('backend/tambah_pelaksana')?>">Tambah</a></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($team->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= $row->name?></td>
                                  <td><?= $row->position?></td>
                                  <td><?= $row->profile?></td>
                                  <td><img src="<?= base_url()?>assets/img/<?= $row->image ?>" style="width: 100px; height: auto;"></td>
                                  <td>
                                      <a class="btn btn-primary" href="<?= base_url('backend/edit_pelaksana/'.$row->id)?>"><i class="fa fa-pencil "></i></a>
                                      <a class="btn btn-danger" onclick="confirm('Yakin ingin menghapus?');" href="<?= base_url('process/hapus_pelaksana/'.$row->id)?>"><i class="fa fa-trash-o "></i></a>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->