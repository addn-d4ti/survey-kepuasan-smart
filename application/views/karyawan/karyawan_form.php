<div class="container-fluid">
    <div class="d-sm-flex justify-content-between mb-4">
        <h1 class="h3 mb-0 text gray-800">Karyawan</h1>
    </div>
    <div class="row">
    <form action="<?php echo base_url(). 'karyawan/create_action'?>" method="post" enctype="multipart/form-data">
	    <div class="form-group">
            <label for="varchar">Nama </label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" value="" />
        </div>
	    <div class="form-group">
            <label for="varchar">Npk </label>
            <input type="text" class="form-control" name="npk" id="npk" placeholder="Npk" value="" />
        </div>
	    <div class="form-group">
            <label for="varchar">Bidang</label>
            <input type="text" class="form-control" name="bidang" id="bidang" placeholder="Bidang" value="" />
        </div>
	    <div class="form-group">
            <label for="varchar">Foto Karyawan</label>
            <input type="file" class="form-control" name="foto_karyawan" id="foto_karyawan" placeholder="Foto Karyawan" value="" />
        </div>
	    <input type="hidden" name="id_karyawan" value="" /> 
	    <button type="submit" class="btn btn-primary"></button> 
	    <a href="<?php echo site_url('karyawan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </div>
</div>
        