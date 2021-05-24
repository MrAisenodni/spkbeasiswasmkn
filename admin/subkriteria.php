<?php 
  $menu = 'kriteria';
  $title = 'Subkriteria';
  require_once('header.php'); 
  if(isset($_GET['id'])) {
    $id = $_GET['id'];
  }
?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php require_once('../alert.php') ?>
        <div class="row">
          <!-- col button -->
          <div class="col-lg-9">
            <a href="tambah-subkriteria.php?id=<?= $id ?>" class="btn btn-success"><i class="fa fa-plus-circle"></i> Tambah Subkriteria</a>
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
                      <th class="border border-secondary">Subkriteria</th>
                      <th class="border border-secondary">Bobot Subkriteria</th>
                      <th class="border border-secondary">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    if(isset($_GET['id'])) {
                      $id = $_GET['id'];
                      $no = 1;
                      $sql = mysqli_query($con, "SELECT * FROM subkriteria WHERE id_kriteria = '$id' ORDER BY bobot_subkriteria ASC");
                      while ($data = mysqli_fetch_array($sql)) {
                  ?>
                    <tr class="text-center">
                      <td class="border border-secondary"><?php echo $no; ?></td>
                      <td class="border border-secondary"><?php echo $data['nama_subkriteria'] ?></td>
                      <td class="border border-secondary"><?php echo $data['bobot_subkriteria'] ?></td>
                      <td class="border border-secondary" width="180px">
                        <a href="ubah-subkriteria.php?id=<?= $data['id_subkriteria'] ?>&kd=<?= $id ?>" class="btn btn-warning">
                          <i class="fas fa-edit"></i>
                        </a>
                        <a href="hapus-subkriteria.php?id=<?= $data['id_subkriteria'] ?>&kd=<?= $id ?>" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?');">
                          <i class="fas fa-trash"></i>
                        </a>
                      </td>
                    </tr>
                    <?php $no++; } } ?>
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
