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