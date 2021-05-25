<?php 
    $menu = 'ranking';
    $title = 'Ranking';
    require_once('header.php') 
?>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <?php require_once('alert.php') ?>
        <div class="row">
          <div class="col-lg-12 col-12">
            <!-- small box -->
            <div class="table-responsive">
              <table class="table table-striped table-hover border border-secondary">
                <thead>
                    <tr class="text-center bg-white">
                      <th class="border border-secondary">No.</th>
                      <th class="border border-secondary">NIK</th>
                      <th class="border border-secondary">Nama Lengkap</th>
                      <th class="border border-secondary">Skor</th>
                      <th class="border border-secondary">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                  <?php
                    $no = 1;
                    $sql = mysqli_query($con,'SELECT a.id_rank, a.nik, b.nama_lengkap, a.total FROM rank a JOIN siswa b ON a.nik = b.nik ORDER BY a.total DESC');
                    while($data = mysqli_fetch_array($sql)){
                  ?>
                    <tr class="text-center">
                      <td class="border border-secondary"><?php echo $no; ?></td>
                      <td class="border border-secondary"><?php echo $data['nik'] ?></td>
                      <td class="border border-secondary"><?php echo $data['nama_lengkap'] ?></td>
                      <td class="border border-secondary"><?php echo $data['total'] ?></td>
                      <td class="border border-secondary">
                        <?php 
                          if($data['total'] <= 50) { 
                            echo 'Tidak dapat'; 
                          } elseif ($data['total'] > 50 && $data['total'] <= 70) {
                            echo 'Dipertimbangkan';
                          } elseif ($data['total'] > 70) {
                            echo 'Dapat Beasiswa';
                          } 
                        ?>
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
