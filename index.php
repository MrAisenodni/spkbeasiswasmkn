<?php 
  $menu = 'home';
  $title = 'Dashboard';
  require_once('header.php');

  $diterima = mysqli_query($con,"SELECT COUNT('total') as ket FROM rank WHERE total > 70");
  $cditerima  = mysqli_fetch_array($diterima);
  
  $dipertimbangkan = mysqli_query($con,"SELECT COUNT('total') as ket FROM rank WHERE total > 50 && total <= 70");
  $cdipertimbangkan  = mysqli_fetch_array($dipertimbangkan);

  $ditolak = mysqli_query($con,"SELECT COUNT('total') as ket FROM rank WHERE total < 50");
  $cditolak  = mysqli_fetch_array($ditolak);

  $siswa = mysqli_query($con,"SELECT COUNT('id_siswa') as ket FROM siswa");
  $csiswa  = mysqli_fetch_array($siswa);
?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?= $cditerima['ket'] ?></h3>

                <p>Diterima</p>
              </div>
              <div class="icon">
                <i class="fas fa-check"></i>
              </div>
              <a href="ranking.php" class="small-box-footer">Lebih banyak <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?= $cdipertimbangkan['ket'] ?></h3>

                <p>Dipertimbangkan</p>
              </div>
              <div class="icon">
                <i class="fas fa-book-reader"></i>
              </div>
              <a href="ranking.php" class="small-box-footer">Lebih banyak <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?= $cditolak['ket'] ?></h3>

                <p>Tidak Diterima</p>
              </div>
              <div class="icon">
                <i class="fas fa-times"></i>
              </div>
              <a href="ranking.php" class="small-box-footer">Lebih banyak <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?= $csiswa['ket'] ?></h3>

                <p>Siswa</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="ranking.php" class="small-box-footer">Lebih banyak <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-lg-12 col-12 text-center">
            <h2 class="fw-bold">Selamat Datang Di SPK Beasiswa</h2>
            <img src="dist/img/logo.png" width="35%" height="35%">
            <h4>(SMK Negeri 12 Jakarta Utara)</h4>
            <p>Alamat : JL. Kebon Bawang 15</p>
            <p>Kode Pos : 14320</p>
            <p>Desa/Kelurahan : Kebon Bawang</p>
            <p>Kecamatan : Kec. Tanjung Priok</p>
            <p>Kab./Kota : Kota Jakarta Utara</p>
            <p>Provinsi : Prov. DKI Jakarta</p>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php require_once('footer.php') ?>
