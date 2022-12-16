<?php
    include("../koneksi.php");
    include("../components/atas.php");
    $executedQuery = mysqli_query($connection, "SELECT * FROM `tb_layanan`, `tb_montir`, tb_kendaraan WHERE `tb_layanan`.`montir_id` = `tb_montir`.`id` AND `tb_layanan`.`kendaraan_id` = `tb_kendaraan`.`id` ");
?>
    <h1 class="display-4 text-center">Data Layanan Service</h1>
    <div class="table-responsive">
        <table class="table table-striped-columns">
            <tr class="table-secondary fw-bold">
                <td><a href="../kelola-layanan/" type="button" class="btn btn-success">+</a></td>
                <td>Nomor Layanan</td>
                <td>Tanggal</td>
                <td>Nomor Polisi</td>
                <td>Nama Pemilik</td>
                <td>ID Montir</td>
                <td>Nama Montir</td>
                <td>Merk</td>
                <td>Jenis Kendaraan</td>
                <td>Deskripsi Service</td>
                <td>Biaya Service</td>
                <td colspan="2">edit & hapus</td>
            </tr>
            <?php for ($i=1; $field = mysqli_fetch_assoc($executedQuery) ; $i++): ?>
            <tr>
                <td><?=$i?>.</td>
                <td><?=$field['nomor_layanan']?></td>
                <td><?=$field['tanggal']?></td>
                <td><?=$field['nomor_polisi']?></td>
                <td><?=$field['pemilik']?></td>
                <td><?=$field['montir_id']?></td>
                <td><?=$field['nama']?></td>
                <td><?=$field['merk']?></td>
                <td><?=$field['jenis']?></td>
                <td><?=$field['deskripsi']?></td>
                <td>Rp <?=number_format($field['biaya'], 0,',','.')?></td>
                <td><form action="../kelola-layanan/" method="post"><button name="edit" value="<?=$field['nomor_layanan']?>" type="submit" class="btn btn-warning">edit</button></form></td>
                <td><form action="../proses-layanan/" method="post"><button name="hapus" value="<?=$field['nomor_layanan']?>" type="submit" class="btn btn-danger" onclick="return confirm('apakah yakin ingin hapus?')">hapus</button></form></td>
            </tr>
            <?php endfor; ?>
            <tr>
                <td colspan="7"><a href="../" class="text-decoration-none">Kembali ke halaman utama</a></td>
            </tr>
        </table>
    </div>
<?php
    include("../components/bawah.php");
?>