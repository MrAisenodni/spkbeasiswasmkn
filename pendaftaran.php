<?php
    $menu = 'pendaftaran';
    $title = 'Pendaftaran Beasiswa';
    require_once('header.php');

    if(isset($_POST['tambah'])){
        date_default_timezone_set('Asia/Jakarta');
        $nik = $_POST['nik'];
        $nama_lengkap = $_POST['nama_lengkap'];
        $jenis_kelamin = $_POST['jenis_kelamin'];
        $penghasilan = $_POST['penghasilan'];
        $kepemilikan = $_POST['kepemilikan'];
        $kondisi = $_POST['kondisi'];
        $anggota = $_POST['anggota'];
        $kendaraan = $_POST['kendaraan'];
        $kebutuhan = $_POST['kebutuhan'];
        $pembayaran = $_POST['pembayaran'];
        $jarak = $_POST['jarak'];
        $alamat = $_POST['alamat'];

        $nama_permohonan = time().'_'.rand(100, 999).'.'.end(explode(".",$_FILES['permohonan']['name']));
		$tipe_permohonan = $_FILES['permohonan']['type'];
        $uk_permohonan = $_FILES['permohonan']['size'];
        $tmp_permohonan = $_FILES['permohonan']['tmp_name'];
        $er_permohonan = $_FILES['permohonan']['error'];

        $nama_kk = time().'_'.rand(100, 999).'.'.end(explode(".",$_FILES['kk']['name']));
		$tipe_kk = $_FILES['kk']['type'];
        $uk_kk = $_FILES['kk']['size'];
        $tmp_kk = $_FILES['kk']['tmp_name'];
        $er_kk = $_FILES['kk']['error'];

        $nama_sktm = time().'_'.rand(100, 999).'.'.end(explode(".",$_FILES['sktm']['name']));
		$tipe_sktm = $_FILES['sktm']['type'];
        $uk_sktm = $_FILES['sktm']['size'];
        $tmp_sktm = $_FILES['sktm']['tmp_name'];
        $er_sktm = $_FILES['sktm']['error'];

        $nama_fdepan = time().'_'.rand(100, 999).'.'.end(explode(".",$_FILES['fdepan']['name']));
		$tipe_fdepan = $_FILES['fdepan']['type'];
        $uk_fdepan = $_FILES['fdepan']['size'];
        $tmp_fdepan = $_FILES['fdepan']['tmp_name'];
        $er_fdepan = $_FILES['fdepan']['error'];

        $nama_ftamu = time().'_'.rand(100, 999).'.'.end(explode(".",$_FILES['ftamu']['name']));
		$tipe_ftamu = $_FILES['ftamu']['type'];
        $uk_ftamu = $_FILES['ftamu']['size'];
        $tmp_ftamu = $_FILES['ftamu']['tmp_name'];
        $er_ftamu = $_FILES['ftamu']['error'];

        $nama_ftidur = time().'_'.rand(100, 999).'.'.end(explode(".",$_FILES['ftidur']['name']));
		$tipe_ftidur = $_FILES['ftidur']['type'];
        $uk_ftidur = $_FILES['ftidur']['size'];
        $tmp_ftidur = $_FILES['ftidur']['tmp_name'];
        $er_ftidur = $_FILES['ftidur']['error'];

        $nama_fmandi = time().'_'.rand(100, 999).'.'.end(explode(".",$_FILES['fmandi']['name']));
		$tipe_fmandi = $_FILES['fmandi']['type'];
        $uk_fmandi = $_FILES['fmandi']['size'];
        $tmp_fmandi = $_FILES['fmandi']['tmp_name'];
        $er_fmandi = $_FILES['fmandi']['error'];
        
        $extensi = ['jpg','jpeg','png'];
        $ext_permohonan = pathinfo($nama_permohonan, PATHINFO_EXTENSION);
        $ext_kk = pathinfo($nama_kk, PATHINFO_EXTENSION);
        $ext_sktm = pathinfo($nama_sktm, PATHINFO_EXTENSION);
        $ext_fdepan = pathinfo($nama_fdepan, PATHINFO_EXTENSION);
        $ext_ftamu = pathinfo($nama_ftamu, PATHINFO_EXTENSION);
        $ext_ftidur = pathinfo($nama_ftidur, PATHINFO_EXTENSION);
        $ext_fmandi = pathinfo($nama_fmandi, PATHINFO_EXTENSION);
        
        $lokasi_permohonan = "dist/img/permohonan/";
        $lokasi_kk = "dist/img/kk/";
        $lokasi_sktm = "dist/img/sktm/";
        $lokasi_fdepan = "dist/img/f_depan/";
        $lokasi_ftamu = "dist/img/f_tamu/";
        $lokasi_ftidur = "dist/img/f_tidur/";
        $lokasi_fmandi = "dist/img/f_mandi/";
        
        $save_permohonan = "dist/img/permohonan/";
        $save_kk = "dist/img/kk/";
        $save_sktm = "dist/img/sktm/";
        $save_fdepan = "dist/img/f_depan/";
        $save_ftamu = "dist/img/f_tamu/";
        $save_ftidur = "dist/img/f_tidur/";
        $save_fmandi = "dist/img/f_mandi/";
        
        if($er_permohonan === 4 && $er_kk === 4 && $er_sktm === 4 && $er_fdepan === 4 && $er_ftamu === 4 && $er_ftidur === 4 && $er_fmandi === 4) {
            header("location:pendaftaran.php?page=pendaftaran&stat=input_null");
        } elseif(!in_array($ext_permohonan, $extensi) && !in_array($ext_kk, $extensi) && !in_array($ext_sktm, $extensi) && !in_array($ext_fdepan, $extensi) && !in_array($ext_ftamu, $extensi) && !in_array($ext_ftidur, $extensi) && !in_array($ext_fmandi, $extensi)) {
            header("location:pendaftaran.php?page=pendaftaran&stat=file_ext");
        } else {
            if($uk_permohonan < 1000000 && $uk_kk < 1000000 && $uk_sktm < 1000000 && $uk_fdepan < 1000000 && $uk_ftamu < 1000000 && $uk_ftidur < 1000000 && $uk_fmandi < 1000000){        
                move_uploaded_file($tmp_permohonan, $lokasi_permohonan.$nama_permohonan);
                move_uploaded_file($tmp_kk, $lokasi_kk.$nama_kk);
                move_uploaded_file($tmp_sktm, $lokasi_sktm.$nama_sktm);
                move_uploaded_file($tmp_fdepan, $lokasi_fdepan.$nama_fdepan);
                move_uploaded_file($tmp_ftamu, $lokasi_ftamu.$nama_ftamu);
                move_uploaded_file($tmp_ftidur, $lokasi_ftidur.$nama_ftidur);
                move_uploaded_file($tmp_fmandi, $lokasi_fmandi.$nama_fmandi);

                $rpenghasilan = (100*(((double)$penghasilan-0)/(100-0)))*0.228;
                $rkepemilikan = (100*(((double)$kepemilikan-25)/(100-25)))*0.2;
                $rkondisi = (100*(((double)$kondisi-20)/(100-20)))*0.2;
                $ranggota = (100*(((double)$anggota-25)/(100-25)))*0.115;
                $rkendaraan = (100*(((double)$kendaraan-0)/(100-0)))*0.057;
                $rkebutuhan = (100*(((double)$kebutuhan-25)/(100-25)))*0.057;
                $rpembayaran = (100*(((double)$pembayaran-25)/(100-25)))*0.086;
                $rjarak = (100*(((double)$jarak-40)/(100-40)))*0.057;
                $total = $rpenghasilan+$rkepemilikan+$rkondisi+$ranggota+$rkendaraan+$rkebutuhan+$rpembayaran+$rjarak;
        
                $add = mysqli_multi_query($con, "INSERT INTO siswa (nik, nama_lengkap, jenis_kelamin, penghasilan, kepemilikan, kondisi, anggota, kendaraan, kebutuhan, pembayaran, jarak, alamat, file_permohonan, file_kk, file_sktm, file_depan, file_tamu, file_tidur, file_mandi) 
                    VALUES ('$nik', '$nama_lengkap', '$jenis_kelamin', '$penghasilan', '$kepemilikan', '$kondisi', '$anggota', '$kendaraan', '$kebutuhan', '$pembayaran', '$jarak', '$alamat', '$save$nama_permohonan', '$save$nama_kk', '$save$nama_sktm', '$save$nama_fdepan', '$save$nama_ftamu', '$save$nama_ftidur', '$save$nama_fmandi'); 
                    INSERT INTO rank (nik, penghasilan, kepemilikan, kondisi, anggota, kendaraan, kebutuhan, pembayaran, jarak, total) VALUES ('$nik', '$rpenghasilan', '$rkepemilikan', '$rkondisi', '$ranggota', '$rkendaraan', '$rkebutuhan', '$rpembayaran', '$rjarak', '$total')");
                if($add){
                    header('location:pendaftaran.php?stat=input_success');
                }else{
                    header('location:pendaftaran.php?stat=input_failed');
                }
            }else{
                header("location:pendaftaran.php?page=pendaftaran&stat=size_file_too_large");
            }
        }
                        
        // $add = mysqli_multi_query($con, "INSERT INTO siswa (nik, nama_lengkap, jenis_kelamin, penghasilan, kepemilikan, kondisi, anggota, kendaraan, kebutuhan, pembayaran, jarak, alamat, file_permohonan, file_kk, file_sktm, file_depan, file_tamu, file_tidur, file_mandi) 
        //     VALUES ('$nik', '$nama_lengkap', '$jenis_kelamin', '$penghasilan', '$kepemilikan', '$kondisi', '$anggota', '$kendaraan', '$kebutuhan', '$pembayaran', '$jarak', '$alamat', '$save$nama_permohonan', '$save$nama_kk', '$save$nama_sktm', '$save$nama_fdepan', '$save$nama_ftamu', '$save$nama_ftidur', '$save$nama_fmandi'); 
        //     INSERT INTO rank (nik, penghasilan, kepemilikan, kondisi, anggota, kendaraan, kebutuhan, pembayaran, jarak, total) VALUES ('$nik', '$rpenghasilan', '$rkepemilikan', '$rkondisi', '$ranggota', '$rkendaraan', '$rkebutuhan', '$rpembayaran', '$rjarak', '$total')");
        // if($add){
        //     header('location:pendaftaran.php?stat=input_success');
        // }else{
        //     header('location:pendaftaran.php?stat=input_failed');
        // }
    }
?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid center">
        <?php require_once('alert.php') ?>
        <div class="row">
          <div class="col-md-12 bg-white">
            <form method="post" class="p-2 mb-2" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nik">NIK</label>
                    <input type="text" required class="form-control" id="nik" name="nik" required>
                </div>
                <div class="form-group">
                    <label for="nama_lengkap">Nama Lengkap</label>
                    <input type="text" required class="form-control" id="nama_lengkap" name="nama_lengkap" required>
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" required class="form-control" id="alamat" name="alamat" required>
                </div>
                <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select class="form-control" id="jenis_kelamin" name="jenis_kelamin" required>
                            <option value="laki-laki">Laki-Laki</option>
                            <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="penghasilan">Penghasilan Orang Tua</label>
                    <select class="form-control" id="penghasilan" name="penghasilan" required>
                        <option>--Pilih Penghasilan--</option>
                        <option value="100">< Rp.1.500.000</option>
                        <option value="80">Rp.1.500.000 – Rp.3.000.000</option>
                        <option value="40">Rp.3.000.001 – Rp.4.500.000</option>
                        <option value="20">Rp.4.500.001 – Rp.5.500.000</option>
                        <option value="0">> Rp.5.500.000</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kepemilikan">Kepemilkan Tempat Tinggal</label>
                    <select class="form-control" id="kepemilikan" name="kepemilikan" required>
                        <option>--Tempat Tinggal--</option>
                        <option value="100">Kontrak</option>
                        <option value="75">Bukan Milik Sendiri</option>
                        <option value="50">Milik Keluarga Besar</option>
                        <option value="25">Milik Sendiri</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kondisi">Kondisi Tempat Tinggal</label>
                    <select class="form-control" id="kondisi" name="kondisi" required>
                        <option>--Kondisi Tempat Tinggal--</option>
                        <option value="100">Non Permanent</option>
                        <option value="60">Semi Permanent</option>
                        <option value="20">Permanent</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="anggota">Anggota Keluarga Ditanggung</label>
                    <select class="form-control" id="anggota" name="anggota" required>
                        <option>--Anggota Ditanggung--</option>
                        <option value="100">> 5</option>
                        <option value="75">5</option>
                        <option value="50">4</option>
                        <option value="25">3</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kendaraan">Kepemilikan Kendaraan</label>
                    <select class="form-control" id="kendaraan" name="kendaraan" required>
                        <option>--Kendaraan--</option>
                        <option value="100">Tidak Punya</option>
                        <option value="80">Sepeda</option>
                        <option value="40">Motor</option>
                        <option value="0">Motor>1</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="kebutuhan">Kebutuhan Pokok</label>
                    <select class="form-control" id="kebutuhan" name="kebutuhan" required>
                        <option>--Kebutuhan Pokok--</option>
                        <option value="100">Rp.10.000 – Rp.25.000</option>
                        <option value="75">Rp.25.001 – Rp.40.000</option>
                        <option value="50">Rp.40.001 – Rp.55.000</option>
                        <option value="25">> Rp.55.000</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="pembayaran">Pembayaran Listrik & PDAM</label>
                    <select class="form-control" id="pembayaran" name="pembayaran" required>
                        <option>--Pembayaran--</option>
                        <option value="100">< Rp.100.000</option>
                        <option value="75">Rp.100.000 – Rp.200.000</option>
                        <option value="50">Rp.200.001 – Rp.300.000</option>
                        <option value="25">>Rp.300.000</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jarak">Jarak Rumah Ke Sekolah</label>
                    <select class="form-control" id="jarak" name="jarak" required>
                        <option>--Jarak Rumah--</option>
                        <option value="100">> 2 km</option>
                        <option value="60">1 km – 2 km</option>
                        <option value="40">< 1 km</option>
                    </select>
                </div>
                <div class="row">
                    <div class="form-group col-4">
                        <label for="permohonan">Surat Permohonan</label>
                        <input type="file" class="form-control" id="permohonan" name="permohonan" onchange="readURLPermohonan(this);">
                        <img class="m-2" id="prev-permohonan" src="#" alt="" width="320" height="320" />
                    </div>
                    <div class="form-group col-4">
                        <label for="kk">Kartu Keluarga</label>
                        <input type="file" class="form-control" id="kk" name="kk" onchange="readURLKk(this);">
                        <img class="m-2" id="prev-kk" src="#" alt="" width="320" height="320" />
                    </div>
                    <div class="form-group col-4">
                        <label for="sktm">Surat Keterangan Tidak Mampu</label>
                        <input type="file" class="form-control" id="sktm" name="sktm" onchange="readURLSktm(this);">
                        <img class="m-2" id="prev-sktm" src="#" alt="" width="320" height="320" />
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-3">
                        <label for="fdepan">Foto Tempat Tinggal Tampak Depan</label>
                        <input type="file" class="form-control" id="fdepan" name="fdepan" onchange="readURLFD(this);">
                        <img class="m-2" id="prev-fdepan" src="#" alt="" width="230px" height="230px" />
                    </div>
                    <div class="form-group col-3">
                        <label for="ftamu">Foto Ruang Tamu</label>
                        <input type="file" class="form-control" id="ftamu" name="ftamu" onchange="readURLFT(this);">
                        <img class="m-2" id="prev-ftamu" src="#" alt="" width="230px" height="230px" />
                    </div>
                    <div class="form-group col-3">
                        <label for="ftidur">Foto Ruang Tidur</label>
                        <input type="file" class="form-control" id="ftidur" name="ftidur" onchange="readURLFR(this);">
                        <img class="m-2" id="prev-ftidur" src="#" alt="" width="230px" height="230px" />
                    </div>
                    <div class="form-group col-3">
                        <label for="fmandi">Foto Kamar Mandi</label>
                        <input type="file" class="form-control" id="fmandi" name="fmandi" onchange="readURLFM(this);">
                        <img class="m-2" id="prev-fmandi" src="#" alt="" width="230px" height="230px" />
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="index.php">
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
<script type="text/javascript">
    function readURLPermohonan(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#prev-permohonan').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURLKk(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#prev-kk').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURLSktm(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#prev-sktm').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURLFD(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#prev-fdepan').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURLFT(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#prev-ftamu').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURLFR(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#prev-ftidur').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    function readURLFM(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#prev-fmandi').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>