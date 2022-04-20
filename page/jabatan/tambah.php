<?php
$query ="select max(kode_jabatan) as maxID from jabatan";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil);
$kode_jabatan = $data['maxID'];

$noUrut = (int) substr($kode_jabatan, 2, 2);
$noUrut++;
$char ="GR";
$kode = $char . sprintf("%02s" , $noUrut);

?>

<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Tambah Data Jabatan
                    </h2>
                </div>
            

                <div class="body">

                    <form method="POST">
                        <label>Kode Jabatan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode_jabatan" class="form-control" value="<?php echo $kode;?>"readonly>
                            </div>
                        </div>

                        <label>Nama Jabatan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama_jabatan" class="form-control" placeholder="Masukkan Nama Jabatan" required />
                            </div>
                        </div>

                        <label>Gaji Pokok</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="gaji_pokok" class="form-control" placeholder="Masukkan Gaji Pokok" required />          
                            </div>
                        </div>

                        <label>Tunjangan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="tunjangan" class="form-control" placeholder="Masukkan Tunjangan" required />          
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

    $kode_jabatan = $_POST ['kode_jabatan'];
    $nama_jabatan = $_POST ['nama_jabatan'];
    $gaji_pokok = $_POST['gaji_pokok'];
    $tunjangan = $_POST ['tunjangan'];
   
        $sql = $koneksi->query("insert into jabatan (kode_jabatan,nama_jabatan,gaji_pokok,tunjangan)values('$kode_jabatan','$nama_jabatan','$gaji_pokok','$tunjangan')");

        if ($sql) {
            ?>
            <script type="text/javascript">
                
                alert ("Data Berhasil Disimpan")
                window.location.href = "?page=jabatan";

            </script>
            
            <?php
        }
    }

 ?>