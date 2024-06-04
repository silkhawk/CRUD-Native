<?php
require_once 'koneksi.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];
 
  $q = $conn->query("DELETE FROM siswa WHERE nis = '$id'");
  header('Location: index.php');
  
 
}