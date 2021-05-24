<?php
  require_once('../koneksi.php');
  if(isset($_GET['id'])){
    $id = $_GET['id'];
    $del = mysqli_multi_query($con, "DELETE FROM subkriteria WHERE id_kriteria='$id'; DELETE FROM kriteria WHERE id_kriteria='$id';");
    if($del){
      header('location:kriteria.php?stat=delete_success');
    }else{
      header('location:kriteria.php?stat=delete_failed');
    }
  }
?>
