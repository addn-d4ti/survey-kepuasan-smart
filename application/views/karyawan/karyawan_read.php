<div class="container-fluid">
    <div class="d-sm-flex justify-content-between mb-4">
        <h1 class="h3 mb-0 text gray-800">Karyawan</h1>
    </div>
    <div class="row">
        <table class="table">
            <tr><td>Nama</td><td><?php echo $nama; ?></td></tr>
            <tr><td>Npk</td><td><?php echo $npk; ?></td></tr>
            <tr><td>Bidang</td><td><?php echo $bidang; ?></td></tr>
            <tr><td>Foto Karyawan</td><td><?php echo $foto_karyawan; ?></td></tr>
            <tr><td></td><td><?php echo anchor(site_url('karyawan'),'Kembali','class="btn btn-primary"');?></td></tr>
        </table>
    </div>
</div>
        