<?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-success" role="alert">
                      <?php echo $this->session->flashdata('success'); ?>
                    </div>
                    <?php endif; ?>
                    <div class="modal-body">
                        <form method="post" action="<?php echo site_url('Karyawan/add') ?>">
                            <div class="form-group">
                                <label for="nama">NPK</label>
                               <input class="form-control <?php echo form_error('npk') ? 'is-invalid':'' ?>"
                                type="text" name="npk" placeholder="Masukan NPK" />
                                <div class="invalid-feedback">
                                <?php echo form_error('npk') ?>
                            </div>
                          </div>
                            <div class="form-group">
                                <label for="nama">Bidang</label>
                               <input class="form-control <?php echo form_error('section') ? 'is-invalid':'' ?>"
                                type="text" name="section" placeholder="Masukan Bidang" />
                                <div class="invalid-feedback">
                                <?php echo form_error('section') ?>
                            </div>
                          </div>
                          <div class="form-group">
                                <label for="gambar">Foto</label>
                                <input class="form-control-file <?php echo form_error('foto_karyawan') ? 'is-invalid':'' ?>"
                                type="file" name="image" />
                                 <div class="invalid-feedback">
                                <?php echo form_error('foto_karyawan') ?>
                                  </div>
                            </div>
                            <div class="form-group mt-3 ml-auto">
                                <input class="btn btn-success" type="submit" name="btn" value="Tambah" />
                                <button href="<?php echo site_url('admin/listkaryawan') ?>"><i class="fas fa-arrow-left"></i> Back</button>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>