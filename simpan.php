<html>
<body>
<?php
include('koneksi.php');
$kode=$_POST['kode'];
$nama=$_POST['nama'];
$alamat=$_POST['alamat'];
$no=$_POST['no'];
$query="INSERT INTO Penjualan values ('$kode','$nama', '$alamat', '$no')";
mysqli_query($koneksi , $query);
echo "Data tersimpan";
?>
</body>
<script type="text/javascript">
	window.location="tampil.php";
</script>
</html>