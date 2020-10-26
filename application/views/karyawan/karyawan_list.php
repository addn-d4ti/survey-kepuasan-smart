<div class="container-fluid">
    <div class="d-sm-flex justify-content-between mb-4">
        <h1 class="h3 mb-0 text gray-800">List Karyawan</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php echo anchor(site_url('karyawan/create'),'Tambah Karyawan', 'class="btn btn-primary"'); ?>
        </div>
    </div>
    <div class="col-md-4 text-center">
        <div style="margin-top: 8px" id="message">
            <?php echo $this->session->userdata('message') <> '' ? $this->session->userdata('message') : ''; ?>
        </div>
    </div>
    <div class="row">
<table class="table table-bordered">
    <tr>
        <th>No</th>
		<th>Nama</th>
		<th>Npk</th>
		<th>Bidang</th>
		<th>Foto Karyawan</th>
		<th>Action</th>
    </tr>
        <?php
            foreach ($karyawan_data as $karyawan)
            {
        ?>
   <tr>
		<td width="80px"><?php echo ++$start ?></td>
		<td><?php echo $karyawan->nama ?></td>
		<td><?php echo $karyawan->npk ?></td>
		<td><?php echo $karyawan->bidang ?></td>
		<td><?php echo $karyawan->foto_karyawan ?></td>
		<td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('karyawan/read/'.$karyawan->id_karyawan),'Lihat'); 
			echo ' | '; 
			echo anchor(site_url('karyawan/update/'.$karyawan->id_karyawan),'Ubah'); 
			echo ' | '; 
			echo anchor(site_url('karyawan/delete/'.$karyawan->id_karyawan),'Hapus','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
			?>
		</td>
	</tr>
        <?php
            }
        ?>
</table>
</div>
<div class="row">
    <div class="col-md-6">
        <a href="#" class="btn btn-primary">Jumlah Karyawan : <?php echo $total_rows ?></a>
    </div>
</div>
</div>
<div class="col-md-3 text-right">
    <form action="<?php echo site_url('karyawan/index'); ?>" class="form-inline" method="get">
    <div class="input-group">
        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
        <span class="input-group-btn">
            <?php 
                if ($q <> '')
                {
                    ?>
                    <a href="<?php echo site_url('karyawan'); ?>" class="btn btn-default">Reset</a>
                    <?php
                }
            ?>
            <button class="btn btn-primary" type="submit">Cari</button>
        </span>
    </div>
    </form>
</div>