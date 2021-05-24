<?php
  require_once('../koneksi.php');
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $kd = $_GET['kd'];
    $del = mysqli_multi_query($con, "DELETE FROM rank WHERE id_rank='$kd'; DELETE FROM siswa WHERE id_siswa='$id';");
    if($del){
      header('location:siswa.php?stat=delete_success');
    }else{
      header('location:siswa.php?stat=delete_failed');
    }
  }
?>
