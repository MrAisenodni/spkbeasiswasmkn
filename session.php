<?php
  require_once('koneksi.php');
  session_start();
  if(isset($_SESSION['akses'])){
    $idu = $_SESSION['id'];
    $namau = $_SESSION['nama'];
    $unameu = $_SESSION['uname'];
    $aksesu = $_SESSION['akses'];
  }else{
    header('location:login.php?stat=session_timeout');
    exit();
  }
?>
