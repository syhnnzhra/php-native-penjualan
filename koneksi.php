<?php
$koneksi=mysqli_connect("localhost", "root","", "Penjualan");
if ($koneksi) {
	echo "koneksi host berhasil!";
}else {
	echo "koneksi gagal";
}
?>