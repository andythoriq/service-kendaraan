<?php
    include("../koneksi.php");
    include("../components/atas.php");
    $executedQuery = mysqli_query($connection, "SELECT * FROM `tb_kendaraan`");
?>
    <h1 class="display-4 text-center">Data Member / kendaraan</h1>
    <div class="table-responsive">
        <table class="table table-striped-columns">
            <tr class="table-secondary fw-bold">
                <td><a href="../kelola-kendaraan/" type="button" class="btn btn-success">+</a></td>
                <td>Nomor Polisi</td>
                <td>Pemilik</td>
                <td>Merk</td>
                <td>Jenis</td>
                <td colspan="2">edit & hapus</td>
            </tr>
            <?php for ($i=1; $field = mysqli_fetch_assoc($executedQuery) ; $i++): ?>
            <tr>
                <td><?=$i?>.</td>
                <td><?=$field['nomor_polisi']?></td>
                <td><?=$field['pemilik']?></td>
                <td><?=$field['merk']?></td>
                <td><?=$field['jenis']?></td>
                <td><form action="../kelola-kendaraan/" method="post"><button name="edit" value="<?=$field['id']?>" type="submit" class="btn btn-warning">edit</button></form></td>
                <td><form action="../proses-kendaraan/" method="post"><button name="hapus" value="<?=$field['id']?>" type="submit" class="btn btn-danger" onclick="return confirm('apakah yakin ingin hapus?')">hapus</button></form></td>
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