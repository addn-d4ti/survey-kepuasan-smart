<div class="container-fluid">
    <div class="d-sm-flex justify-content-between mb-4">
        <h1 class="h3 mb-0 text gray-800">List Menu</h1>
    </div>
    <div class="row">
        <div class="col-md-6">
            <?php echo anchor(site_url('menu/create'),'Tambah Menu', 'class="btn btn-primary"'); ?>
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
		<th>Tanggal</th>
		<th>Makanan Pokok</th>
		<th>Lauk Hewani</th>
		<th>Lauk Nabati</th>
        <th>Sayur</th>
        <th>Buah</th>
        <th>Minuman</th>
		<th>Action</th>
    </tr>
        <?php
            foreach ($menu_data as $menu)
            {
        ?>
   <tr>
		<td width="80px"><?php echo ++$start ?></td>
		<td><?php echo $menu->tanggal ?></td>
		<td><?php echo $menu->makanan_pokok ?></td>
		<td><?php echo $menu->lauk_hewani ?></td>
		<td><?php echo $menu->lauk_nabati ?></td>
		<td><?php echo $menu->sayur ?></td>
		<td><?php echo $menu->buah ?></td>
		<td><?php echo $menu->minuman ?></td>
		<td style="text-align:center" width="200px">
			<?php 
			echo anchor(site_url('menu/read/'.$menu->id_menu),'Lihat'); 
			echo ' | '; 
			echo anchor(site_url('menu/update/'.$menu->id_menu),'Ubah'); 
			echo ' | '; 
			echo anchor(site_url('menu/delete/'.$menu->id_menu),'Hapus','onclick="javasciprt: return confirm(\'Are You Sure ?\')"'); 
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
        <a href="#" class="btn btn-primary">Jumlah Menu : <?php echo $total_rows ?></a>
    </div>
</div>
</div>
<div class="col-md-3 text-right">
    <form action="<?php echo site_url('menu/index'); ?>" class="form-inline" method="get">
    <div class="input-group">
        <input type="text" class="form-control" name="q" value="<?php echo $q; ?>">
        <span class="input-group-btn">
            <?php 
                if ($q <> '')
                {
                    ?>
                    <a href="<?php echo site_url('menu'); ?>" class="btn btn-default">Reset</a>
                    <?php
                }
            ?>
            <button class="btn btn-primary" type="submit">Cari</button>
        </span>
    </div>
    </form>
</div>