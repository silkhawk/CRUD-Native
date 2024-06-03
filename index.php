<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>tugas</title>
	<style type="text/css">
		#a{
			border: 1px solid red;
			border-radius: 10px;
		}
		a{
			text-decoration: none;
			color: #0A6847;

		}

	</style>
	<?php
		include_once('koneksi.php');
		$sql = "SELECT * FROM siswa";
		$hasil = $conn->query($sql);
	?>
</head><body>
<table border="0" width="400" >
	<tr>
		<th>NO</th>
		<th>NAMA</th>
		<th>ALAMAT</th>
		<th><a href="formAdd.php">ADD</a></th>
	</tr>
	<?php 	
	while ($data = mysqli_fetch_array($hasil)) {	
 	?>
	<tr>
		<td><?php echo $data['nis']?></td>
		<td><?php echo $data['nama']?></td>
		<td><?php echo $data['alamat']?></td>
		<td> <a href="">Edit</a> | <a href="">Delete</a> </td>
	</tr>
	<?php }?>
	
	
</table>
</body>
</html>