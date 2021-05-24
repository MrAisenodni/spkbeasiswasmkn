<?php
    $menu = 'siswa';
    $title = 'Detail Siswa';
    require_once('header.php');

    if(isset($_GET['kd'])){
        $kd = $_GET['kd'];
        $sqlrank = mysqli_query($con, "SELECT * FROM rank WHERE id_rank = '$kd'");
        $datarank = mysqli_fetch_array($sqlrank);
    }

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = mysqli_query($con, "SELECT * FROM siswa WHERE id_siswa = '$id'");
        $data = mysqli_fetch_array($sql);
    }
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid center">
        <div class="row">
          <div class="col-md-12 bg-white">
            <form method="post" class="p-2 mb-2">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" disabled class="form-control" id="nik" name="nik" value="<?php echo $data['nik']; ?>">
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" disabled class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?php echo $data['nama_lengkap']; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" disabled>
                    <?php if($data['jenis_kelamin'] == 'laki-laki') { ?>
                        <option value="laki-laki">Laki-Laki</option>
                        <option value="perempuan">Perempuan</option>
                    <?php } else { ?>
                        <option value="perempuan">Perempuan</option>
                        <option value="laki-laki">Laki-Laki</option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="penghasilan">Penghasilan Orang Tua</label>
                    <select class="form-control" id="penghasilan" name="penghasilan" disabled>
                    <?php if($data['penghasilan'] == '100') { ?>
                        <option value="100">< Rp.1.500.000</option>
                        <option value="80">Rp.1.500.000 – Rp.3.000.000</option>
                        <option value="40">Rp.3.000.001 – Rp.4.500.000</option>
                        <option value="20">Rp.4.500.001 – Rp.5.500.000</option>
                        <option value="0">> Rp.5.500.000</option>
                    <?php } elseif($data['penghasilan'] == '80') { ?>
                        <option value="80">Rp.1.500.000 – Rp.3.000.000</option>
                        <option value="100">< Rp.1.500.000</option>
                        <option value="80">Rp.1.500.000 – Rp.3.000.000</option>
                        <option value="40">Rp.3.000.001 – Rp.4.500.000</option>
                        <option value="20">Rp.4.500.001 – Rp.5.500.000</option>
                        <option value="0">> Rp.5.500.000</option>
                    <?php } elseif($data['penghasilan'] == '40') { ?>
                        <option value="40">Rp.3.000.001 – Rp.4.500.000</option>
                        <option value="100">< Rp.1.500.000</option>
                        <option value="80">Rp.1.500.000 – Rp.3.000.000</option>
                        <option value="40">Rp.3.000.001 – Rp.4.500.000</option>
                        <option value="20">Rp.4.500.001 – Rp.5.500.000</option>
                        <option value="0">> Rp.5.500.000</option>
                    <?php } elseif($data['penghasilan'] == '20') { ?>
                        <option value="20">Rp.4.500.001 – Rp.5.500.000</option>
                        <option value="100">< Rp.1.500.000</option>
                        <option value="80">Rp.1.500.000 – Rp.3.000.000</option>
                        <option value="40">Rp.3.000.001 – Rp.4.500.000</option>
                        <option value="20">Rp.4.500.001 – Rp.5.500.000</option>
                        <option value="0">> Rp.5.500.000</option>
                    <?php } elseif($data['penghasilan'] == '0') { ?>
                        <option value="0">> Rp.5.500.000</option>
                        <option value="100">< Rp.1.500.000</option>
                        <option value="80">Rp.1.500.000 – Rp.3.000.000</option>
                        <option value="40">Rp.3.000.001 – Rp.4.500.000</option>
                        <option value="20">Rp.4.500.001 – Rp.5.500.000</option>
                        <option value="0">> Rp.5.500.000</option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kepemilikan">Kepemilkan Tempat Tinggal</label>
                    <select class="form-control" id="kepemilikan" name="kepemilikan" disabled>
                    <?php if($data['kepemilikan'] == '100') { ?>
                        <option value="100">Kontrak</option>
                        <option value="75">Bukan Milik Sendiri</option>
                        <option value="50">Milik Keluarga Besar</option>
                        <option value="25">Milik Sendiri</option>
                    <?php } elseif($data['kepemilikan'] == '75') { ?>
                        <option value="75">Bukan Milik Sendiri</option>
                        <option value="100">Kontrak</option>
                        <option value="50">Milik Keluarga Besar</option>
                        <option value="25">Milik Sendiri</option>
                    <?php } elseif($data['kepemilikan'] == '50') { ?>
                        <option value="50">Milik Keluarga Besar</option>
                        <option value="100">Kontrak</option>
                        <option value="75">Bukan Milik Sendiri</option>
                        <option value="25">Milik Sendiri</option>
                    <?php } elseif($data['kepemilikan'] == '25') { ?>
                        <option value="25">Milik Sendiri</option>
                        <option value="100">Kontrak</option>
                        <option value="75">Bukan Milik Sendiri</option>
                        <option value="50">Milik Keluarga Besar</option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kondisi">Kondisi Tempat Tinggal</label>
                    <select class="form-control" id="kondisi" name="kondisi" disabled>
                    <?php if($data['kondisi'] == '100') { ?>
                        <option value="100">Non Permanent</option>
                        <option value="60">Semi Permanent</option>
                        <option value="20">Permanent</option>
                    <?php } elseif($data['kondisi'] == '60') { ?>
                        <option value="60">Semi Permanent</option>
                        <option value="100">Non Permanent</option>
                        <option value="20">Permanent</option>
                    <?php } elseif($data['kondisi'] == '20') { ?>
                        <option value="20">Permanent</option>
                        <option value="100">Non Permanent</option>
                        <option value="60">Semi Permanent</option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="anggota">Anggota Keluarga Ditanggung</label>
                    <select class="form-control" id="anggota" name="anggota" disabled>
                    <?php if($data['anggota'] == '100') { ?>
                        <option value="100">> 5</option>
                        <option value="75">5</option>
                        <option value="50">4</option>
                        <option value="25">3</option>
                    <?php } elseif($data['anggota'] == '75') { ?> 
                        <option value="75">5</option>
                        <option value="100">> 5</option>
                        <option value="50">4</option>
                        <option value="25">3</option>
                    <?php } elseif($data['anggota'] == '50') { ?> 
                        <option value="50">4</option>
                        <option value="100">> 5</option>
                        <option value="75">5</option>
                        <option value="25">3</option>
                    <?php } else { ?> 
                        <option value="25">3</option>
                        <option value="100">> 5</option>
                        <option value="75">5</option>
                        <option value="50">4</option>
                    <?php } ?> 
                    </select>
                </div>
                <div class="form-group">
                    <label for="kendaraan">Kepemilikan Kendaraan</label>
                    <select class="form-control" id="kendaraan" name="kendaraan" disabled>
                    <?php if($data['kendaraan'] == '100') { ?>
                        <option value="100">Tidak Punya</option>
                        <option value="80">Sepeda</option>
                        <option value="40">Motor</option>
                        <option value="0">Motor>1</option>
                    <?php } elseif($data['kendaraan'] == '80') { ?>
                        <option value="80">Sepeda</option>
                        <option value="100">Tidak Punya</option>
                        <option value="40">Motor</option>
                        <option value="0">Motor>1</option>
                    <?php } elseif($data['kendaraan'] == '40') { ?>
                        <option value="40">Motor</option>
                        <option value="100">Tidak Punya</option>
                        <option value="80">Sepeda</option>
                        <option value="0">Motor>1</option>
                    <?php } elseif($data['kendaraan'] == '0') { ?>
                        <option value="0">Motor>1</option>
                        <option value="100">Tidak Punya</option>
                        <option value="80">Sepeda</option>
                        <option value="40">Motor</option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kebutuhan">Kebutuhan Pokok</label>
                    <select class="form-control" id="kebutuhan" name="kebutuhan" disabled>
                    <?php if($data['kebutuhan'] == '100') { ?>
                        <option value="100">Rp.10.000 – Rp.25.000</option>
                        <option value="75">Rp.25.001 – Rp.40.000</option>
                        <option value="50">Rp.40.001 – Rp.55.000</option>
                        <option value="25">> Rp.55.000</option>
                    <?php } elseif($data['kebutuhan'] == '75') { ?>
                        <option value="75">Rp.25.001 – Rp.40.000</option>
                        <option value="100">Rp.10.000 – Rp.25.000</option>
                        <option value="50">Rp.40.001 – Rp.55.000</option>
                        <option value="25">> Rp.55.000</option>
                    <?php } elseif($data['kebutuhan'] == '50') { ?>
                        <option value="50">Rp.40.001 – Rp.55.000</option>
                        <option value="100">Rp.10.000 – Rp.25.000</option>
                        <option value="75">Rp.25.001 – Rp.40.000</option>
                        <option value="25">> Rp.55.000</option>
                    <?php } elseif($data['kebutuhan'] == '25') { ?>
                        <option value="25">> Rp.55.000</option>
                        <option value="100">Rp.10.000 – Rp.25.000</option>
                        <option value="75">Rp.25.001 – Rp.40.000</option>
                        <option value="50">Rp.40.001 – Rp.55.000</option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pembayaran">Pembayaran Listrik & PDAM</label>
                    <select class="form-control" id="pembayaran" name="pembayaran" disabled>
                    <?php if($data['pembayaran'] == '100') { ?>
                        <option value="100">< Rp.100.000</option>
                        <option value="75">Rp.100.000 – Rp.200.000</option>
                        <option value="50">Rp.200.001 – Rp.300.000</option>
                        <option value="25">>Rp.300.000</option>
                    <?php } elseif($data['pembayaran'] == '75') { ?>
                        <option value="75">Rp.100.000 – Rp.200.000</option>
                        <option value="100">< Rp.100.000</option>
                        <option value="50">Rp.200.001 – Rp.300.000</option>
                        <option value="25">>Rp.300.000</option>
                    <?php } elseif($data['pembayaran'] == '50') { ?>
                        <option value="50">Rp.200.001 – Rp.300.000</option>
                        <option value="100">< Rp.100.000</option>
                        <option value="75">Rp.100.000 – Rp.200.000</option>
                        <option value="25">>Rp.300.000</option>
                    <?php } elseif($data['pembayaran'] == '25') { ?>
                        <option value="25">>Rp.300.000</option>
                        <option value="100">< Rp.100.000</option>
                        <option value="75">Rp.100.000 – Rp.200.000</option>
                        <option value="50">Rp.200.001 – Rp.300.000</option>
                    <?php } ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jarak">Jarak Rumah Ke Sekolah</label>
                    <select class="form-control" id="jarak" name="jarak" disabled>
                    <?php if($data['jarak'] == '100') { ?>
                        <option value="100">> 2 km</option>
                        <option value="60">1 km – 2 km</option>
                        <option value="40">< 1 km</option>
                    <?php } elseif($data['jarak'] == '60') { ?>
                        <option value="60">1 km – 2 km</option>
                        <option value="100">> 2 km</option>
                        <option value="40">< 1 km</option>
                    <?php } elseif($data['jarak'] == '40') { ?>
                        <option value="40">< 1 km</option>
                        <option value="100">> 2 km</option>
                        <option value="60">1 km – 2 km</option>
                    <?php } ?>
                    </select>
                </div>
                <div class="modal-footer">
                    <a href="siswa.php">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-window-close"></i> Kembali
                        </button>
                    </a>
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