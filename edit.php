<?php
require_once 'koneksi.php';

  $nis    = $_POST['tNis'];
  $nama   = $_POST['tNama'];
  $alamat = $_POST['tAlamat'];
  $jk = $_POST['tJk'];
  
  $sql = "UPDATE siswa SET  nama='$nama', alamat='$alamat', jk='$jk'
          where nis='$nis'";

  $conn->query($sql);
  header("location:index.php");


?>

 