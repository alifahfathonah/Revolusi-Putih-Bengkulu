              
              <div class="row mt">
                  <div class="col-md-12">
                      <div class="content-panel col-md-12">
                          <?php
                            $info=$this->session->flashdata('info');
                            $error=$this->session->flashdata('error');
                            if(!empty($info)) { ?>
                               <h4 style="color: green"><i class="fa fa-check-circle"></i> <?= $info ?></h4>
                            <?php } elseif(!empty($error)) { ?>
                                <h5 style="color: red"><i class="fa fa-exclamation-circle"> </i><?= $error ?></h5>
                            <?php } ?>
                          <table id="myTable" class="table table-bordered table-striped table-condensed table-hover">
                            <h4><i class="fa fa-angle-right"></i> Desa </h4>
                            <hr>
                              <thead>
                              <tr>
                                  <th width="5%">No</th>
                                  <th>ID</th>
                                  <th>Nama</th>
                                  <th>Gambar</th>
                                  <th width="15%"><a class="btn btn-xs btn-info" href="<?= base_url('backend/tambah_desa')?>">Tambah</a></th>
                              </tr>
                              </thead>
                              <tbody>
                                <?php $i=1; foreach($desa->result() as $row){?>
                              <tr>
                                  <td><?= $i++?></td>
                                  <td><?= $row->id?></td>
                                  <td><?= $row->nama?></td>
                                  <td><!--img src="<?= base_url()?>assets/img/<?= $row->gambar ?>" style="width: 100px; height: auto;"--></td>
                                  <td>
                                      <a class="btn btn-xs btn-primary" href="<?= base_url('backend/edit_desa/'.$row->id)?>"><i class="fa fa-pencil "> Edit</i></a>
                                      <a class="btn btn-xs btn-danger" onclick="confirm('Yakin ingin menghapus?');" href="<?= base_url('process/hapus_desa/'.$row->id)?>"><i class="fa fa-trash-o "> Hapus</i></a>
                                  </td>
                              </tr>
                              <?php }?>
                              </tbody>
                          </table>
                      </div><!-- /content-panel -->
                  </div><!-- /col-md-12 -->
              </div><!-- /row -->