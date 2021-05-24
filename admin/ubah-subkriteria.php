<?php
    $menu = 'kriteria';
    $title = 'Tambah Kriteria';
    require_once('header.php');

    if(isset($_GET['kd'])){
        $kd = $_GET['kd'];
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = mysqli_query($con, "SELECT * FROM subkriteria WHERE id_subkriteria = '$id'");
        $data = mysqli_fetch_array($sql);
      }

    if(isset($_POST['tambah'])){
      date_default_timezone_set('Asia/Jakarta');
      $nama_subkriteria = $_POST['nama_subkriteria'];
      $bobot_subkriteria = $_POST['bobot_subkriteria'];

      $add = mysqli_query($con, "UPDATE subkriteria SET
        nama_subkriteria   = '$nama_subkriteria',
        bobot_subkriteria  = '$bobot_subkriteria' WHERE id_subkriteria = '$id'"
      );

      if($add){
          header('location:subkriteria.php?id='.$kd.'&stat=update_success');
      }else{
          header('location:subkriteria.php?id='.$kd.'&stat=update_failed');
      }
    }
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid center">
        <div class="row">
          <div class="col-md-12 bg-white">
            <form method="post" class="p-2 mb-2">
                <div class="form-group">
                    <label for="nama_subkriteria">Nama Kriteria</label>
                    <input type="text" required class="form-control" id="nama_subkriteria" name="nama_subkriteria" value="<?= $data['nama_subkriteria'] ?>" required>
                </div>
                <div class="form-group">
                    <label for="bobot_subkriteria">Bobot Kriteria</label>
                    <input type="text" required class="form-control" id="bobot_subkriteria" name="bobot_subkriteria" value="<?= $data['bobot_subkriteria'] ?>" required>
                </div>
                <div class="modal-footer">
                  <a href="kriteria.php">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                      <i class="fas fa-window-close"></i> Batal
                    </button>
                  </a>
                  <button type="submit" class="btn btn-primary" name="tambah">
                    <i class="fas fa-check"></i> Simpan
                  </button>
                </div>
              </div>
            </form>
          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php require_once('footer.php');?>