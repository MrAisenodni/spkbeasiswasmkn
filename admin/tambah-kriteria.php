<?php
    $menu = 'kriteria';
    $title = 'Tambah Kriteria';
    require_once('header.php');

    if(isset($_POST['tambah'])){
      date_default_timezone_set('Asia/Jakarta');
      $kd_kriteria = $_POST['kd_kriteria'];
      $nama_kriteria = $_POST['nama_kriteria'];
      $bobot_kriteria = $_POST['bobot_kriteria'];

      $add = mysqli_query($con, "INSERT INTO kriteria VALUES('','$kd_kriteria','$nama_kriteria','$bobot_kriteria')");
      if($add){
          header('location:kriteria.php?stat=input_success');
      }else{
          header('location:kriteria.php?stat=input_failed');
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
                    <label for="kd_kriteria">Kode Kriteria</label>
                    <input type="text" required class="form-control" id="kd_kriteria" name="kd_kriteria" required>
                </div>
                <div class="form-group">
                    <label for="nama_kriteria">Nama Kriteria</label>
                    <input type="text" required class="form-control" id="nama_kriteria" name="nama_kriteria" required>
                </div>
                <div class="form-group">
                    <label for="bobot_kriteria">Bobot Kriteria</label>
                    <input type="text" required class="form-control" id="bobot_kriteria" name="bobot_kriteria" required>
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