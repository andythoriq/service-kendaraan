<?php
    include("../koneksi.php");
    include("../components/atas.php");
?>
<?php if($_POST['edit']): 
    $executedQuery = mysqli_query($connection, "SELECT * FROM tb_montir WHERE id =".$_POST['edit']);
    $field = mysqli_fetch_assoc($executedQuery);
?>
    <h1 class="display-5"><mark>Halaman Edit</mark></h1>
<?php else: ?>
    <h1 class="display-5"><mark>Tambah data karyawan montir</mark></h1>
<?php endif; ?>
<form action="../proses-montir/" method="post">
    <div class="row mt-3">
        <div class="col-12 col-lg-2">
            <p class="lead fw-bold">KTP</p>
        </div>
        <div class="col-12 col-lg-6">
            <input <?=$_POST['edit'] ? 'readonly' : ''?> name="ktp" class="form-control form-control-lg" type="text" required value="<?=$field['ktp']?>">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-lg-2">
            <p class="lead fw-bold">Nama</p>
        </div>
        <div class="col-12 col-lg-6">
            <input name="nama" class="form-control form-control-lg" type="text" required value="<?=$field['nama']?>">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-lg-2">
            <p class="lead fw-bold">Alamat</p>
        </div>
        <div class="col-12 col-lg-6">
            <textarea name="alamat" class="form-control" cols="20" rows="4" required><?=$field['alamat']?></textarea>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-lg-2">
            <p class="lead fw-bold">Telephone</p>
        </div>
        <div class="col-12 col-lg-6">
            <input name="telepon" <?=$_POST['edit'] ? 'readonly' : ''?> class="form-control form-control-lg" type="number" required value="<?=$field['telepon']?>">
        </div>
    </div>
    <div class="row mt-5">
        <div class="col-12 col-lg-2">
            <div class="row">
                <div class="col-6">
                    <?php if($_POST['edit']): ?>
                        <input type="hidden" name="id" value="<?= $field['id'] ?>">
                        <button type="submit" name="submit" value="edit" class="btn btn-outline-success">simpan</button>
                    <?php else: ?>
                        <button type="submit" name="submit" value="tambah" class="btn btn-outline-success">tambah</button>
                    <?php endif; ?>
                </div>
                <div class="col-6"><a href="../montir/" type="button" class="btn btn-outline-info">kembali</a></div>
            </div>
        </div>
    </div>
</form>

<?php
    include("../components/bawah.php");
?>

