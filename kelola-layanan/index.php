<?php
    include("../koneksi.php");
    include("../components/atas.php");
?>
<?php if($_POST['edit']): 
    $executedQuery = mysqli_query($connection, "SELECT * FROM tb_layanan WHERE nomor_layanan =".$_POST['edit']);
    $field = mysqli_fetch_assoc($executedQuery);
?>
    <h1 class="display-5"><mark>Halaman Edit</mark></h1>
<?php else: ?>
    <h1 class="display-5"><mark>Data Layanan</mark></h1>
<?php endif; ?>
<form action="../proses-layanan/" method="post">
    <div class="row mt-3">
        <div class="col-12 col-lg-2">
            <p class="lead fw-bold">Nomor Polisi</p>
        </div>
        <div class="col-12 col-lg-6">
            <select name="kendaraan_id" class="form-select form-select-lg" required>
                <option value="<?=$field['kendaraan_id']?>"><?= $field['kendaraan_id'] ?? 'Yang Mengservice' ?></option>
                <?php $executedKendaraanQuery = mysqli_query($connection, "SELECT id, nomor_polisi, pemilik, merk FROM tb_kendaraan"); 
                while($opt = mysqli_fetch_assoc($executedKendaraanQuery)): ?>
                    <option value="<?=$opt['id']?>"><?=$opt['nomor_polisi']?>. Milik <?=$opt['pemilik']?>. Dengan merk <?=$opt['merk']?></option>
                <?php endwhile; ?>
            </select>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-lg-2">
            <p class="lead fw-bold">Tanggal</p>
        </div>
        <div class="col-12 col-lg-6">
            <input name="tanggal" class="form-control form-control-lg" type="date" required value="<?=$field['tanggal']?>">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-lg-2">
            <p class="lead fw-bold">Montir</p>
        </div>
        <div class="col-12 col-lg-6">
            <select name="montir_id" class="form-select form-select-lg" required>
                <option value="<?=$field['montir_id']?>"><?= $field['montir_id'] ?? 'Yang Mengservice' ?></option>
                <?php $executedMontirQuery = mysqli_query($connection, "SELECT id, nama, telepon FROM tb_montir"); 
                while($opt = mysqli_fetch_assoc($executedMontirQuery)): ?>
                    <option value="<?=$opt['id']?>"><?=$opt['nama']?>. Nomor telepon <?=$opt['telepon']?></option>
                <?php endwhile; ?>
            </select>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-lg-2">
            <p class="lead fw-bold">Deskripsi Service</p>
        </div>
        <div class="col-12 col-lg-6">
            <textarea name="deskripsi" class="form-control" cols="20" rows="4" required><?=$field['deskripsi']?></textarea>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-lg-2">
            <p class="lead fw-bold">Biaya Service</p>
        </div>
        <div class="col-12 col-lg-6">
        <input name="biaya" class="form-control form-control-lg" type="number" required value="<?=$field['biaya']?>">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-lg-2">
            <div class="row">
                <div class="col-6">
                    <?php if($_POST['edit']): ?>
                        <input type="hidden" name="id" value="<?= $field['nomor_layanan'] ?>">
                        <button type="submit" name="submit" value="edit" class="btn btn-outline-success">simpan</button>
                    <?php else: ?>
                        <button type="submit" name="submit" value="tambah" class="btn btn-outline-success">tambah</button>
                    <?php endif; ?>
                </div>
                <div class="col-6"><a href="../layanan/" type="button" class="btn btn-outline-info">kembali</a></div>
            </div>
        </div>
    </div>
</form>

<?php
    include("../components/bawah.php");
?>

