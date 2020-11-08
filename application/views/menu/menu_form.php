<div class="container-fluid">
    <div class="d-sm-flex justify-content-between mb-4">
        <h1 class="h3 mb-0 text gray-800">Menu</h1>
    </div>
    <div class="row">
    <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="varchar">Tanggal <?php echo form_error('tanggal') ?></label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" placeholder="Tanggal" value="<?php echo $tanggal; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Makanan Pokok <?php echo form_error('makanan_pokok') ?></label>
            <input type="text" class="form-control" name="makanan_pokok" id="makanan_pokok" placeholder="Makanan Pokok" value="<?php echo $makanan_pokok; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Lauk Hewani <?php echo form_error('lauk_hewani') ?></label>
            <input type="text" class="form-control" name="lauk_hewani" id="lauk_hewani" placeholder="Lauk Hewani" value="<?php echo $lauk_hewani; ?>" />
        </div>
	    <div class="form-group">
            <label for="varchar">Lauk Nabati <?php echo form_error('lauk_nabati') ?></label>
            <input type="text" class="form-control" name="lauk_nabati" id="lauk_nabati" placeholder="Lauk Nabati" value="<?php echo $lauk_nabati; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Sayur <?php echo form_error('sayur') ?></label>
            <input type="text" class="form-control" name="sayur" id="sayur" placeholder="Sayur" value="<?php echo $sayur; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Buah <?php echo form_error('buah') ?></label>
            <input type="text" class="form-control" name="buah" id="buah" placeholder="Buah" value="<?php echo $buah; ?>" />
        </div>
        <div class="form-group">
            <label for="varchar">Minuman <?php echo form_error('minuman') ?></label>
            <input type="text" class="form-control" name="minuman" id="minuman" placeholder="Minuman" value="<?php echo $minuman; ?>" />
        </div>
	    <input type="hidden" name="id_menu" value="<?php echo $id_menu; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('menu') ?>" class="btn btn-default">Kembali</a>
	</form>
    </div>
</div>
        