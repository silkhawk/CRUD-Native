<?php
require_once 'koneksi.php';

  $nis    = $_POST['tNis'];
  $nama   = $_POST['tNama'];
  $alamat = $_POST['tAlamat'];
  $jk = $_POST['tJk'];
  $sql = "INSERT INTO siswa VALUES ('$nis', '$nama', '$alamat','$jk')";

  $conn->query($sql);
  header("location:index.php");


?>