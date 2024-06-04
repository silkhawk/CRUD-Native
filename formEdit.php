<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>form Edit</title>
    <link rel="stylesheet" href="style.css">
    <?php
require_once 'koneksi.php';
if (isset($_GET['id'])) {
  $nis = $_GET['id'];
  $data = $conn->query("SELECT * FROM siswa WHERE nis = '$nis'");
  foreach ($data as $row) :
 ?>
</head>
<body>
<form action="edit.php" method="POST">
<table border="0" width="300" id="a">
	<tr>
		<th colspan="2">FORM TAMBAH</th>
	</tr>
	<tr>
		<td>NIS</td>
		<td><input type="" name="tNis" value="<?= $row['nis'] ?>"></td>
	</tr>
	<tr>
		<td>NAMA</td>
		<td><input type="" name="tNama" value="<?= $row['nama'] ?>"></td>
	</tr>
	<tr>
		<td>ALAMAT</td>
		<td><input type="" name="tAlamat" value="<?= $row['alamat'] ?>"></td>
	</tr>
    <tr>
		<td>GENDER</td>
		<td><input type="" name="tJk" value="<?= $row['jk'] ?>"></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td><input type="submit" name="" value="UPDATE"></td>
	</tr>
</table>
</form>
<?php 
	endforeach; } 
?>
</body>
</html>