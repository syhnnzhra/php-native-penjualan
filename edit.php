<!DOCTYPE html>
<html>
<head>
	<title> Edit Data</title>
</head>
<body>
	<?php
	include 'koneksi.php';
	$Kode_Member=$_GET['Kode_Member'];
	$data=mysqli_query($koneksi,"SELECT*FROM login where Kode_Member='$Kode_Member'");
	while ($a=mysqli_fetch_array($data)) {
	?>
	<form method="post" action="ubah.php">
		<table>
			<tr>
				<input type="hidden" name="Kode_Member" value="<?php echo $a['Kode_Member'];?>">
				<td> Username </td>
				<td> <input type="text" name="Username" value="<?php echo $a['Username'];?>"></td>
				<tr>
				<td> Password  </td>
				<td> <input type="text" name="Password" value="<?php echo $a['Password'];?>"></td>
				</tr>
				<tr>
			<tr>
				<td> </td>
				<td> <input type="submit" value="simpan"></td>
			</tr>
		</table>
	</form>
	<?php
	}
	?>

</body>
</html>