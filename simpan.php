<?php
require_once 'koneksi.php';

  $nis    = $_POST['tNis'];
  $nama   = $_POST['tNama'];
  $alamat = $_POST['tAlamat'];
  $sql = "INSERT INTO siswa VALUES ('$nis', '$nama', '$alamat')";

  $conn->query($sql);
  header("location:index.php");


?>