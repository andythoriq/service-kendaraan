<?php
    include("../koneksi.php");
    include("../components/atas.php");
    $executedQuery = mysqli_query($connection, "SELECT * FROM `tb_montir`");
?>
    <h1 class="display-4 text-center">Data Karyawan / Montir</h1>
    <div class="table-responsive">
        <table class="table table-striped-columns">
            <tr class="table-secondary fw-bold">
                <td><a href="../kelola-montir/" type="button" class="btn btn-success">+</a></td>
                <td>Nama</td>
                <td>KTP</td>
                <td>Alamat</td>
                <td>Telephone</td>
                <td colspan="2">edit & hapus</td>
            </tr>
            <?php for ($i=1; $field = mysqli_fetch_assoc($executedQuery) ; $i++): ?>
            <tr>
                <td><?=$i?>.</td>
                <td><?=$field['nama']?></td>
                <td><?=$field['ktp']?></td>
                <td><?=$field['alamat']?></td>
                <td><?=$field['telepon']?></td>
                <td><form action="../kelola-montir/" method="post"><button name="edit" value="<?=$field['id']?>" type="submit" class="btn btn-warning">edit</button></form></td>
                <td><form action="../proses-montir/" method="post"><button name="hapus" value="<?=$field['id']?>" type="submit" class="btn btn-danger" onclick="return confirm('apakah yakin ingin hapus?')">hapus</button></form></td>
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