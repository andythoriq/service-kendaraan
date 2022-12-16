<?php
include("../koneksi.php");
$np = htmlspecialchars(strtoupper($_POST['nomor_polisi'])); $p = htmlspecialchars($_POST['pemilik']); $m = htmlspecialchars($_POST['merk']); $j = htmlspecialchars($_POST['jenis']); $id = htmlspecialchars(intval($_POST['id']));

switch ($_POST['submit']) {
    case 'tambah':
        $uniqueFieldQuery = mysqli_query($connection, "SELECT nomor_polisi FROM tb_kendaraan WHERE nomor_polisi = '$np'");
        $uniqueField = mysqli_fetch_assoc($uniqueFieldQuery);
        if($uniqueField['nomor_polisi'] != $np){
            mysqli_query($connection, "INSERT INTO `tb_kendaraan` (`nomor_polisi`, `pemilik`, `merk`, `jenis`) VALUES ('$np', '$p', '$m', '$j')");
        }
    case 'edit':
        mysqli_query($connection, "UPDATE `tb_kendaraan` SET `nomor_polisi` = '$np', `pemilik` = '$p', `merk` = '$m', `jenis` = '$j' WHERE `tb_kendaraan`.`id` = $id");
}
if($_POST['hapus']){
    mysqli_query($connection, "DELETE FROM `tb_kendaraan` WHERE `tb_kendaraan`.`id` = ".intval($_POST['hapus']));
}
header("Location: ../kendaraan/");
?>