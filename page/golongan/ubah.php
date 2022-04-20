<?php

    $kode = $_GET['kode_golongan'];
    $sql = $koneksi->query("select * from golongan where kode_golongan = '$kode'");
    $data = $sql->fetch_assoc();

?>

<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Ubah Data Golongan
                    </h2>
                </div>
            

                <div class="body">

                    <form method="POST" enctype="multipart/form-data">
                        <label>Kode golongan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode_golongan" class="form-control" value="<?php echo $data['kode_golongan'];?>" readonly/>
                            </div>
                        </div>
                        

                        <label>Nama Golongan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama_golongan" class="form-control" value="<?php echo $data['nama_golongan'];?>" />          
                            </div>
                        </div>

                        <label>Tunjangan Suami Istri</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="t_istrisuami" class="form-control" value="<?php echo $data['t_istrisuami'];?>" />          
                            </div>

                        <label>Tunjangan Anak</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="t_anak" class="form-control" value="<?php echo $data['t_anak'];?>" />          
                            </div>

                        <label>Uang Makan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="uang_makan" class="form-control" value="<?php echo $data['uang_makan'];?>" />          
                            </div>

                        <label>Uang Lembur</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="uang_lembur" class="form-control" value="<?php echo $data['uang_lembur'];?>" />          
                            </div>

                        <label>Askes</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="askes" class="form-control" value="<?php echo $data['askes'];?>" />          
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
    $t_istrisuami = $_POST ['t_istrisuami'];
    $nama_golongan = $_POST ['nama_golongan'];
    $t_istrisuami = $_POST ['t_istrisuami'];
    $t_anak = $_POST ['t_anak'];
    $uang_makan = $_POST ['uang_makan'];
    $askes = $_POST ['askes'];
    $uang_lembur = $_POST ['uang_lembur'];

	    $sql = $koneksi->query("update golongan set kode_golongan='$kode_golongan', nama_golongan='$nama_golongan',t_istrisuami='$t_istrisuami', t_anak='$t_anak',uang_makan='$uang_makan', uang_lembur='$uang_lembur',askes='$askes' where kode_golongan='$kode_golongan'");

        if ($sql) {
            ?>
            <script type="text/javascript">
                
                alert ("Data Berhasil DiUbah")
                window.location.href = "?page=golongan";

            </script>
            
            <?php
	    }
    
}

 ?>