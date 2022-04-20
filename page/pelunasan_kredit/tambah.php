<div class="row clearfix"> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    TAMBAH DATA NASABAH PELUNASAN KREDIT
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
                                <label>SERAH TERIMA ANGGUNAN</label>
                                <div class="form-line">
                                <input type="file" name="serah_terima" class="form-control" placeholder="Lapirkan File" required />
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

    $serah_terima = $_FILES ['serah_terima']['name'];
    $lokasi = $_FILES ['serah_terima']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$serah_terima);

    $sql = $koneksi->query("INSERT INTO pelunasan_kredit (nomor,nama,serah_terima)VALUES('$nomor','$nama','$serah_terima')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan")
            window.location.href = "?page=pelunasan_kredit";
        </script>

<?php
    }
}

?>