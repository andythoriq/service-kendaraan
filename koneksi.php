<?php
    date_default_timezone_set('Asia/Jakarta');
    $connection = mysqli_connect('localhost', 'root', null, 'paspwpb2022');
    mysqli_select_db($connection, 'paspwpb2022');
    !$connection && print_r('koneksi gagal');
?>