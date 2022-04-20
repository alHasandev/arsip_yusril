<div class="row clearfix"> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    TAMBAH DATA NASABAH
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
                                <label>RESTRUKTURISASI</label>
                                <div class="form-line">
                                <input type="file" name="restrukturisasi" class="form-control" placeholder="Lapirkan File" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>RELAKSASI</label>
                                <div class="form-line">
                                <input type="file" name="relaksasi" class="form-control" placeholder="Lapirkan File" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>PERUBAHAN AGUNAN</label>
                                <div class="form-line">
                                <input type="file" name="perubahan" class="form-control" placeholder="Lapirkan File" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>LAINNYA</label>
                                <div class="form-line">
                                <input type="file" name="lain" class="form-control" placeholder="Lapirkan File" required />
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

    $restrukturisasi = $_FILES ['restrukturisasi']['name'];
    $lokasi = $_FILES ['restrukturisasi']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$restrukturisasi);

    $relaksasi = $_FILES ['relaksasi']['name'];
    $lokasi = $_FILES ['relaksasi']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$relaksasi);

    $perubahan = $_FILES ['perubahan']['name'];
    $lokasi = $_FILES ['perubahan']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$perubahan);

    $lain = $_FILES ['lain']['name'];
    $lokasi = $_FILES ['lain']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$lain);

    $sql = $koneksi->query("INSERT INTO adendum (nomor,nama,restrukturisasi,relaksasi,perubahan,lain)VALUES('$nomor','$nama','$restrukturisasi','$relaksasi','$perubahan','$lain')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan")
            window.location.href = "?page=adendum";
        </script>

<?php
    }
}

?>