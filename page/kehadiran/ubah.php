<?php

    $kode = $_GET['nip'];
    $bulan = $_GET['bulan'];
    $tahun = $_GET['tahun'];
    $sql = $koneksi->query("SELECT * FROM gaji WHERE nip = '$kode' AND bulan = '$bulan' AND tahun = '$tahun'");
    $data = $sql->fetch_assoc();

?>

<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Ubah Data Gaji
                    </h2>
                </div>
            

                <div class="body">

                    <form method="POST" enctype="multipart/form-data">

                        <label>NIP</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nip" class="form-control" value="<?php echo $data['nip'];?>" readonly />
                            </div>
                        </div>
                    
                        <label>Bulan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="bulan" class="form-control" value="<?php echo $data['bulan'];?>" />
                            </div>
                        </div>

                        <label>Tahun</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="tahun" class="form-control" value="<?php echo $data['tahun'];?>" />
                            </div>
                        </div>

                        <label>Masuk</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="masuk" class="form-control" value="<?php echo $data['masuk'];?>" />
                            </div>
                        </div>

                        <label>Sakit</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="sakit" class="form-control" value="<?php echo $data['sakit'];?>" />
                            </div>
                        </div>

                        <label>Izin</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="izin" class="form-control" value="<?php echo $data['izin'];?>" />
                            </div>
                        </div>

                        <label>Alpha</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="alpha" class="form-control" value="<?php echo $data['alpha'];?>" />
                            </div>
                        </div>


                        <label>Lembur</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="lembur" class="form-control" value="<?php echo $data['lembur'];?>" />
                            </div>
                        </div>


                        <label>Potongan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="potongan" class="form-control" value="<?php echo $data['potongan'];?>" />
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

    $nip = $_POST ['nip'];
    $masuk = $_POST ['masuk'];
    $sakit = $_POST ['sakit'];
    $izin = $_POST ['izin'];
    $alpha = $_POST ['alpha'];
    $lembur = $_POST ['lembur'];
    $potongan = 10000 * $alpha;
   
	    $sql = $koneksi->query("UPDATE gaji SET  masuk='$masuk', sakit='$sakit', izin='$izin', alpha='$alpha', lembur='$lembur', potongan='$potongan' WHERE nip='$kode' AND bulan = '$bulan' AND tahun = '$tahun'");

        if ($sql) {
            ?>
            <script type="text/javascript">
                
                alert ("Data Berhasil DiUbah")
                window.location.href = "kehadiran.php";

            </script>
            
            <?php
	    }
    }
   

 ?>