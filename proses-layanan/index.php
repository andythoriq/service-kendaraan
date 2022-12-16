<?php
include("../koneksi.php");
$t = htmlspecialchars($_POST['tanggal']); $mid = intval($_POST['montir_id']); $d = htmlspecialchars($_POST['deskripsi']); $b = htmlspecialchars(intval($_POST['biaya'])); $nl = intval($_POST['id']); $kid = intval($_POST['kendaraan_id']);

switch ($_POST['submit']) {
    case 'tambah':
        mysqli_query($connection, "INSERT INTO `tb_layanan` (`tanggal`, `kendaraan_id`, `montir_id`, `deskripsi`, `biaya`) VALUES ('$t', '$kid', '$mid', '$d', '$b')");
    case 'edit':
        mysqli_query($connection, "UPDATE `tb_layanan` SET `tanggal` = '$t', `kendaraan_id` = '$kid', `montir_id` = '$mid', `deskripsi` = '$d', `biaya` = '$b' WHERE `tb_layanan`.`nomor_layanan` = $nl");
        
}
if($_POST['hapus']){
    mysqli_query($connection, "DELETE FROM `tb_layanan` WHERE `tb_layanan`.`nomor_layanan` = ".intval($_POST['hapus']));
}
header("Location: ../layanan/");
?>