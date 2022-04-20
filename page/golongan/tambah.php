<?php
$query ="select max(kode_golongan) as maxID from golongan";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil);
$kode_golongan = $data['maxID'];

$noUrut = (int) substr($kode_golongan, 2, 2);
$noUrut++;
$char ="G";
$newID = $char . sprintf("%03s" , $noUrut);

?>

<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Tambah Data Golongan
                    </h2>
                </div>
            

                <div class="body">

                    <form method="POST" enctype="multipart/form-data">
                        <label>Kode Golongan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode_golongan" class="form-control" value="<?php echo $newID;?>"readonly>
                            </div>
                        </div>

                        <label>Nama Golongan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama_golongan" class="form-control" placeholder="Masukkan Nama Golongan" required />          
                            </div>
                        </div>

                        <label>Tunjangan Suami Istri</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="t_istrisuami" class="form-control" placeholder="Masukkan Tunjangan Suami Istri" required />          
                            </div>
                        </div>

                        <label>Tunjangan Anak</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="t_anak" class="form-control" placeholder="Masukkan Tunjangan Anak" required />          
                            </div>
                        </div>

                        <label>Uang Makan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="uang_makan" class="form-control" placeholder="Masukkan Uang Makan" required />          
                            </div>
                        </div>

                        <label>Uang Lembur</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="uang_lembur" class="form-control" placeholder="Masukkan Uang Lembur" required />          
                            </div>
                        </div>

                        <label>Askes</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="askes" class="form-control" placeholder="Masukkan Askes" required />          
                            </div>
                        </div>


                       
                        <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                       
                    </form>
                </div>
        </div>
</div>
</div>
<?php 

if (isset($_POST['simpan'])) {

    $kode_golongan = $_POST ['kode_golongan'];
    $nama_golongan = $_POST ['nama_golongan'];
    $t_istrisuami = $_POST ['t_istrisuami'];
    $t_anak = $_POST ['t_anak'];
    $uang_makan = $_POST ['uang_makan'];
    $uang_lembur = $_POST ['uang_lembur'];
    $askes = $_POST ['askes'];
   
      $sql = $koneksi->query("INSERT INTO golongan (kode_golongan,nama_golongan,t_istrisuami,t_anak,uang_makan,uang_lembur,askes)values('$kode_golongan','$nama_golongan','$t_istrisuami','$t_anak','$uang_makan','$uang_lembur','$askes')");

        if ($sql) {
            ?>
            <script type="text/javascript">
                
                alert ("Data Berhasil Disimpan")
                window.location.href = "?page=golongan";

            </script>
            
            <?php
        }
    }

 ?>