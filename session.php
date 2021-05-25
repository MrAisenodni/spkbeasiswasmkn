<?php
  require_once('koneksi.php');
  session_start();
  if(isset($_SESSION['akses'])){
    $idu = $_SESSION['id'];
    $namau = $_SESSION['nama'];
    $unameu = $_SESSION['uname'];
    $aksesu = $_SESSION['akses'];
  }else{
    $idu = NULL;
    $namau = NULL;
    $unameu = NULL;
    $aksesu = NULL;
    header('location:/spkbeasiswasmkn/login.php?stat=session_timeout');
  }
?>
