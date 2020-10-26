<div class="container-fluid">
    <div class="d-sm-flex justify-content-between mb-4">
        <h1 class="h3 mb-0 text gray-800">Karyawan</h1>
    </div>
    <div class="row">
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Nama <?php echo form_error('nama') ?></label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="<?php echo $nama; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Npk <?php echo form_error('npk') ?></label>
            <input type="text" class="form-control" name="npk" id="npk" placeholder="Npk" value="<?php echo $npk; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Bidang <?php echo form_error('bidang') ?></label>
            <input type="text" class="form-control" name="bidang" id="bidang" placeholder="Bidang" value="<?php echo $bidang; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto Karyawan <?php echo form_error('foto_karyawan') ?></label>
            <input type="text" class="form-control" name="foto_karyawan" id="foto_karyawan" placeholder="Foto Karyawan" value="<?php echo $foto_karyawan; ?>" />
        </div>
	    <input type="hidden" name="id_karyawan" value="<?php echo $id_karyawan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('karyawan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </div>
</div>
        