<?php 
  $menu = 'siswa';
  $title = 'Siswa';
  require_once('header.php')
?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php require_once('../alert.php') ?>
        <div class="row">
          <!-- col button -->
          <div class="col-lg-9">
            <a href="tambah-siswa.php" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Siswa</a>
            <br><br>
          </div>
          <!-- ./col -->
          <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="table-responsive">
              <table class="table table-striped table-hover border border-secondary">
                <thead>
                    <tr class="text-center bg-white">
                      <th class="border border-secondary">No.</th>
                      <th class="border border-secondary">NIK</th>
                      <th class="border border-secondary">Nama Lengkap</th>
                      <th class="border border-secondary">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 1;
                    $sql = mysqli_query($con,"SELECT * FROM siswa a INNER JOIN rank b ON b.nik = a.nik ORDER BY id_siswa ASC");
                    while($data = mysqli_fetch_array($sql)){
                  ?>
                    <tr class="text-center">
                      <td class="border border-secondary"><?php echo $no; ?></td>
                      <td class="border border-secondary"><?php echo $data['nik'] ?></td>
                      <td class="border border-secondary"><?php echo $data['nama_lengkap'] ?></td>
                      <td class="border border-secondary" width="180px">
                        <a href="ubah-siswa.php?id=<?= $data['id_siswa'] ?>&kd=<?= $data['id_rank'] ?>" class="btn btn-warning">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="hapus-siswa.php?id=<?= $data['id_siswa'] ?>&kd=<?= $data['id_rank'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">
                          <i class="fas fa-trash"></i>
                        </a>
                        <a href="detail-siswa.php?id=<?= $data['id_siswa'] ;?>" class="btn btn-info">
                          <i class="fas fa-list"></i>
                        </a>
                      </td>
                    </tr>
                    <?php $no++; } ?>
                </tbody>
              </table>          
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<?php require_once('footer.php') ?>
