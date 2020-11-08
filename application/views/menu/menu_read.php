<div class="container-fluid">
    <div class="d-sm-flex justify-content-between mb-4">
        <h1 class="h3 mb-0 text gray-800">Menu</h1>
    </div>
    <div class="row">
        <table class="table">
            <tr><td>Tanggal</td><td><?php echo $tanggal; ?></td></tr>
            <tr><td>Makanan Pokok</td><td><?php echo $makanan_pokok; ?></td></tr>
            <tr><td>Lauk Hewani</td><td><?php echo $lauk_hewani; ?></td></tr>
            <tr><td>Lauk Nabati</td><td><?php echo $lauk_nabati; ?></td></tr>
            <tr><td>Sayur</td><td><?php echo $sayur; ?></td></tr>
            <tr><td>Buah</td><td><?php echo $buah; ?></td></tr>
            <tr><td>Minuman</td><td><?php echo $minuman; ?></td></tr>
            <tr><td></td><td><?php echo anchor(site_url('menu'),'Kembali','class="btn btn-primary"');?></td></tr>
        </table>
    </div>
</div>
        