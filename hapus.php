<?php
include 'koneksi.php';
$kode = $_GET['kode'];
mysqli_query($koneksi,"delete from Pelanggan where kode='$kode'");
?>
<script>
	window.location.href="tampil.php";
</script>