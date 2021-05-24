<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LOGIN PAGE</title>

    <!-- Icon -->
    <link rel="icon" href="dist/img/logo.png">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css">
    <!-- overlayScrollbars -->
    <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="dist/css/custom.css">
</head>
<?php 
    require_once('koneksi.php');
    if(isset($_POST['login'])){
        $un = mysqli_real_escape_string($con, $_POST['user']);
        $pw = mysqli_real_escape_string($con, $_POST['pass']);

        $sql = mysqli_query($con, "SELECT * FROM pengguna WHERE username='$un' AND password='$pw'");
        $data = mysqli_fetch_array($sql);
        $num = mysqli_num_rows($sql);

        if($num>0){
            session_start();
            $_SESSION['id'] = $data['id_user'];
            $_SESSION['nama'] = $data['nama_user'];
            $_SESSION['uname'] = $data['username'];
            $_SESSION['akses'] = $data['level'];

            if($data['level']=='admin'){
                header('location:admin/index.php?stat=login_success');
            }else{
                header('location:index.php?stat=login_success');
            }

        }else{
            header('location:login.php?stat=wrong_password');
        }
    }
?>
<body>
    <div class="container">
        <div class="row">
        <form method="post">
            <div class="login">
                <div class="avatar">
                    <i class="fa fa-user"></i>
                </div>
                <h2>Login</h2>
                <?php require_once('alert.php') ?>
                <div class="box-login">
                    <i class="fas fa-id-card"></i>
                    <input type="text" name="user" placeholder="Username" required="">
                </div>

                <div class="box-login">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="pass" placeholder="Password" required="">
                </div>

                <button type="submit" name="login" class="btn-login">
                    Masuk
                </button>
            </div>
        </form>	
        </div>
    </div>
</body>
</html>