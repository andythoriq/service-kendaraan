<?php
    include("koneksi.php");
    include("components/atas.php");
?>
<div class="row">
    <div class="col-12 col-lg-4">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kelola Montir</h5>
                <p class="card-text">Mengelola Semua data karyawan Montir dengan melalukan operasi CRUD.</p>
                <a href="montir/" class="btn btn-outline-success">Pergi !</a>
            </div>
        </div>

    </div>
    <div class="col-12 col-lg-4">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Kelola Member</h5>
                <p class="card-text">Sebelum pelanggan membeli jasa service mereka harus menjadi member dan data mereka akan disimpan di database kami. Kami juga bisa melakukan proses CRUD terhadap data member.</p>
                <a href="kendaraan/" class="btn btn-outline-warning">Pergi !</a>
            </div>
        </div>

    </div>
    <div class="col-12 col-lg-4">

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Pelayanan Service</h5>
                <p class="card-text">Mencetak data berupa riwayat aktifitas service.</p>
                <a href="layanan/" class="btn btn-outline-info">Lihat !</a>
            </div>
        </div>

    </div>
</div>
<?php
    include("components/bawah.php");
     //TODO INSERT INTO `tb_kendaraan` (`nomor_polisi`, `pemilik`, `merk`, `jenis`) VALUES ('B 1919 KZY', 'Jayadi Rifai', 'Avanza Veloz', 'Mobil'), ('F 2020 JKK', 'Ajay Kardi', 'Pajero Dakar', 'Mobil');
?>

