<?php 
  $menu = "kriteria";
  $title = 'Kriteria';
  require_once('header.php');
?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php require_once('../alert.php') ?>
        <div class="row">
          <!-- col button -->
          <div class="col-lg-9">
            <a href="tambah-kriteria.php" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Kriteria</a>
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
                      <th class="border border-secondary">Kode Kriteria</th>
                      <th class="border border-secondary">Nama Kriteria</th>
                      <th class="border border-secondary">Bobot Kriteria</th>
                      <th class="border border-secondary">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 1;
                    $sql = mysqli_query($con,'SELECT * FROM kriteria ORDER BY id_kriteria ASC');
                    while($data = mysqli_fetch_array($sql)){
                  ?>
                    <tr class="text-center">
                      <td class="border border-secondary"><?php echo $no; ?></td>
                      <td class="border border-secondary"><?php echo $data['kd_kriteria'] ?></td>
                      <td class="border border-secondary"><?php echo $data['nama_kriteria'] ?></td>
                      <td class="border border-secondary"><?php echo $data['bobot_kriteria'] ?></td>
                      <td class="border border-secondary" width="180px">
                        <a href="ubah-kriteria.php?id=<?= $data['id_kriteria'] ?>" class="btn btn-warning">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="hapus-kriteria.php?id=<?= $data['id_kriteria'] ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">
                          <i class="fas fa-trash"></i>
                        </a>
                        <a href="subkriteria.php?id=<?= $data['id_kriteria'] ;?>" class="btn btn-info">
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
