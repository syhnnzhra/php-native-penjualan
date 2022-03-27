<?php
include 'koneksi.php';
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$telephone=$_POST['telephone'];
mysqli_query($koneksi, "update Pelanggan set nama='$nama' where kode='$kode'");
mysqli_query($koneksi, "update Pelanggan set alamat='$alamat' where kode='$kode'");
mysqli_query($koneksi, "update Pelanggan set telephone='$telephone' where kode='$kode'");
?>
<script> window.location.href="tampil.php";</script>