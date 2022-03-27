<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table border="1">
		<tr>
			<th> Kode Pelanggan </th>
			<th> Nama Pelanggan </th>
			<th> Alamat </th>
			<th> Telephone </th>
			<th> Fungsi</th>
		</tr>
		<?php
		include 'koneksi.php';
		$data=mysqli_query($koneksi, 'SELECT*FROM Pelanggan');
		while ($a=mysqli_fetch_array($data)) {
		?>
		<tr>
			<td> <?php echo $a ['kode'];?> </td>
			<td> <?php echo $a ['nama'];?> </td>
			<td> <?php echo $a ['alamat'];?> </td>
			<td> <?php echo $a ['telephone'];?> </td>
		<td>
			<a href="edit.php?kode=<?php echo$a['kode'];?>">edit</a>
			<a href="hapus.php?kode=<?php echo$a['kode'];?>">hapus</a>
		</td>
		</tr>
		<?php
	}
	?>
	</table>

</body>
</html>