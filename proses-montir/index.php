<?php
include("../koneksi.php");
$ktp = htmlspecialchars(strtoupper($_POST['ktp'])); $n = htmlspecialchars($_POST['nama']); $a = htmlspecialchars($_POST['alamat']); $t = htmlspecialchars($_POST['telepon']); $id = htmlspecialchars(intval($_POST['id']));
$uniqueField1 = mysqli_fetch_assoc(mysqli_query($connection, "SELECT ktp FROM tb_montir WHERE ktp = '$ktp'"));
$uniqueField2 = mysqli_fetch_assoc(mysqli_query($connection, "SELECT telepon FROM tb_montir WHERE telepon = '$t'"));
switch ($_POST['submit']) {
    case 'tambah':
        if($uniqueField1['ktp'] != $ktp && $uniqueField2['telepon'] != $t){
            mysqli_query($connection, "INSERT INTO `tb_montir` (`nama`, `ktp`, `alamat`, `telepon`) VALUES ('$n', '$ktp', '$a', '$t')");
        }
    case 'edit':
        mysqli_query($connection, "UPDATE `tb_montir` SET `nama` = '$n', `ktp` = '$ktp', `alamat` = '$a', `telepon` = '$t' WHERE `tb_montir`.`id` = $id");

}
if($_POST['hapus']){
    mysqli_query($connection, "DELETE FROM `tb_montir` WHERE `tb_montir`.`id` = ".intval($_POST['hapus']));
}
header("Location: ../montir/");
?>