<div class="row clearfix"> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    TAMBAH DATA NASABAH KLAM ASURANSI
                </h2>
            </div>


            <div class="body">

                <form method="POST" enctype="multipart/form-data">
                    <label>NOMOR REKENING</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nomor" class="form-control" placeholder="Masukkan NOMOR REKENIG">
                        </div>
                    </div>

                    <label>NAMA NASABAH</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                        </div>
                    </div>

                            <div class="form-group">
                                <label>ASURANSI</label>
                                <div class="form-line">
                                <input type="file" name="asuransi" class="form-control" placeholder="Lapirkan File" required />
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


    $nomor = $_POST['nomor'];
    $nama = $_POST['nama'];

    $asuransi = $_FILES ['asuransi']['name'];
    $lokasi = $_FILES ['asuransi']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$asuransi);



    $sql = $koneksi->query("INSERT INTO klam_asuransi (nomor,nama,asuransi)VALUES('$nomor','$nama','$asuransi')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan")
            window.location.href = "?page=klam_asuransi";
        </script>

<?php
    }
}

?>