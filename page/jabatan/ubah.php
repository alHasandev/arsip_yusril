<?php

    $kode = $_GET['kode_jabatan'];
    $sql = $koneksi->query("select * from jabatan where kode_jabatan = '$kode'");
    $data = $sql->fetch_assoc();

?>

<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Ubah Data Jabatan
                    </h2>
                </div>
            

                <div class="body">

                    <form method="POST" enctype="multipart/form-data">
                        <label>Kode Jabatan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode_jabatan" class="form-control" value="<?php echo $data['kode_jabatan'];?>" readonly/>
                            </div>
                        </div>
                        
                        <label>Nama Jabatan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama_jabatan" class="form-control" value="<?php echo $data['nama_jabatan'];?>" />
                            </div>
                        </div>

                        <label>Gaji Pokok</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="gaji_pokok" class="form-control" value="<?php echo $data['gaji_pokok'];?>" />
                            </div>
                        </div>

                        <label>Tunjangan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="tunjangan" class="form-control" value="<?php echo $data['tunjangan'];?>" />         
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


	    $sql = $koneksi->query("update jabatan set nama_jabatan='$nama_jabatan', gaji_pokok='$gaji_pokok', tunjangan='$tunjangan' where kode_jabatan='$kode'");

        if ($sql) {
            ?>
            <script type="text/javascript">
                
                alert ("Data Berhasil DiUbah")
                window.location.href = "?page=jabatan";

            </script>
            
            <?php
	    }
    
}

 ?>