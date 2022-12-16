<?php
    include("../koneksi.php");
    include("../components/atas.php");
?>
<?php if($_POST['edit']): 
    $executedQuery = mysqli_query($connection, "SELECT * FROM tb_kendaraan WHERE id =".$_POST['edit']);
    $field = mysqli_fetch_assoc($executedQuery);
?>
    <h1 class="display-5"><mark>Halaman Edit</mark></h1>
<?php else: ?>
    <h1 class="display-5"><mark>Tambah data kendaraan</mark></h1>
<?php endif; ?>
<form action="../proses-kendaraan/" method="post">
    <div class="row mt-3">
        <div class="col-12 col-lg-2">
            <p class="lead fw-bold">Nomor Polisi</p>
        </div>
        <div class="col-12 col-lg-6">
            <input <?=$_POST['edit'] ? 'readonly' : ''?> name="nomor_polisi" class="form-control form-control-lg" type="text" required value="<?=$field['nomor_polisi']?>">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-lg-2">
            <p class="lead fw-bold">Pemilik</p>
        </div>
        <div class="col-12 col-lg-6">
            <input name="pemilik" class="form-control form-control-lg" type="text" required value="<?=$field['pemilik']?>">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-lg-2">
            <p class="lead fw-bold">Merk</p>
        </div>
        <div class="col-12 col-lg-6">
            <input name="merk" class="form-control form-control-lg" type="text" required value="<?=$field['merk']?>">
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-12 col-lg-2">
            <p class="lead fw-bold">Jenis</p>
        </div>
        <div class="col-12 col-lg-6">
        <select name="jenis" class="form-select form-select-lg" required>
            <option value="<?=$field['jenis']?>"><?= $field['jenis'] ?? 'pilih jenis mobil' ?></option>
            <option value="Mobil">Mobil</option>
            <option value="Truk">Truk</option>
            <option value="Sedan">Sedan</option>
            <option value="Sport">Sport</option>
            <option value="Off Road">Off Road</option>
            <option value="Station Wagon">Station Wagon</option>
        </select>
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
                <div class="col-6"><a href="../kendaraan/" type="button" class="btn btn-outline-info">kembali</a></div>
            </div>
        </div>
    </div>
</form>

<?php
    include("../components/bawah.php");
?>

