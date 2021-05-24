<?php
    require_once('../koneksi.php');

    if(isset($_GET['kd'])){
        $kd = $_GET['kd'];
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $del = mysqli_query($con, "DELETE FROM subkriteria WHERE id_subkriteria='$id'");
        if($del){
            header('location:subkriteria.php?id='.$kd.'&stat=delete_success');
        }else{
            header('location:subkriteria.php?id='.$kd.'&stat=delete_failed');
        }
    }
?>
