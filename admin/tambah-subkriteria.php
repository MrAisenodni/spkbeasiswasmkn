<?php
    $menu = 'kriteria';
    $title = 'Tambah Subkriteria';
    require_once('header.php');

    if(isset($_GET['id'])){
      $id = $_GET['id'];
      $sql = mysqli_query($con, "SELECT * FROM kriteria WHERE id_kriteria = '$id'");
      $data = mysqli_fetch_array($sql);
      $nama_kriteria = $data['nama_kriteria'];
    }

    if(isset($_POST['tambah'])){
      date_default_timezone_set('Asia/Jakarta');
      $nama_subkriteria = $_POST['nama_subkriteria'];
      $bobot_subkriteria = $_POST['bobot_subkriteria'];

      $add = mysqli_query($con, "INSERT INTO subkriteria VALUES('','$id','$nama_kriteria','$nama_subkriteria','$bobot_subkriteria')");
      
      if($add){
          header('location:subkriteria.php?id='.$id.'&stat=input_success');
      }else{
          header('location:subkriteria.php?id='.$id.'&stat=input_failed');
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
                    <label for="nama_subkriteria">Nama Subkriteria</label>
                    <input type="text" required class="form-control" id="nama_subkriteria" name="nama_subkriteria" required>
                </div>
                <div class="form-group">
                    <label for="bobot_subkriteria">Bobot Subkriteria</label>
                    <input type="text" required class="form-control" id="bobot_subkriteria" name="bobot_subkriteria" required>
                </div>
                <div class="modal-footer">
                  <a href="subkriteria.php?id=<?= $id ?>">
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