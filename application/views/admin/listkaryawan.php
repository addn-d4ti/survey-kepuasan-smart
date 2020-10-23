<!-- Begin Page Content -->
        <div class="container-fluid">
          <!-- DataTales Example -->
          <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                      <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php endif; ?>

                    <div class="modal-body">
                        <form method="post" action="<?php echo site_url('karyawan/add') ?>">
          <div class="card shadow mb-4">
            <div class="card-header py-3">
               <div class="form-group mt-3 ml-auto">
                <input class="btn btn-success" type="submit" name="btn" value="Tambah Karyawan" /></div>
              <h6 class="m-0 font-weight-bold text-primary">Data Karyawan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>NPK</th>
                      <th>Bidang</th>
                      <th>Foto</th>
                    </tr>
                  </thead>
                </table>
              </div>
            </div>
          </div>
        </div>
        <!-- /.container-fluid -->
                    
                          
                           
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit karyawan -->
        <div class="modal fade" id="editKaryawan" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">>
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Karyawan</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="" action="">
                            <div class="form-group">
                                <label for="nama">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="">
                            </div>
                            <div class="form-group">
                                <label for="npk">NPK</label>
                                <input type="email" class="form-control" name="npk" id="npk" placeholder="" >
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="text" class="form-control" name="password" id="password">
                            </div>
                            <div class="form-group">
                                <label for="section">Section</label>
                                <select class="form-control custom-select-sm" id="section">
                                <option value="Accounting">Accounting</option>
                                <option value="Credit Control">Credit Control</option>
                                <option value="Customer Care">Customer Care</option>
                                <option value="General Affairs">General Affairs</option>
                                <option value="HRD">HRD</option>
                                <option value="Inovasi">Inovasi</option>
                                <option value="Logistic">Logistic</option>
                                <option value="Engineering">Engineering</option>
                                <option value="Production Poultry">Production Poultry</option>
                                <option value="Production Shrimp">Production Shrimp</option>
                                <option value="Purchasing">Purchasing</option>
                                <option value="QA/QC">QA/QC</option>
                                <option value="Sales Poultry">Sales Poultry</option>
                                <option value="TSS Shrimp">TSS Shrimp</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="gambar">Foto</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="gambar">
                                    <label class="custom-file-label" for="gambar">Upload file</label>
                                </div>
                            </div>
                            <div class="form-group mt-3 ml-auto">
                                <button type="button" type="submit" class="btn btn-primary">Simpan Data</button>
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>