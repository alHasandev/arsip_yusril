<div class="row clearfix"> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    ADMINISTRASI KREDIT
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
                                <label>FOTO AKAD KREDIT</label>
                                <div class="form-line">
                                <input type="file" name="foto_akad" class="form-control" placeholder="Lapirkan File" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>SPK KREDIT</label>
                                <div class="form-line">
                                <input type="file" name="spk" class="form-control" placeholder="Lapirkan File" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>PENGIKATAN NOTARIS</label>
                                <div class="form-line">
                                <input type="file" name="notaris" class="form-control" placeholder="Lapirkan File" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>SURAT KUASA SUAM/ISTRI TIDAK BISA HADIR</label>
                                <div class="form-line">
                                <input type="file" name="kuasa" class="form-control" placeholder="Lapirkan File" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>SURAT KUASA PENJAMIN AGUNAN</label>
                                <div class="form-line">
                                <input type="file" name="penjamin" class="form-control" placeholder="Lapirkan File" required />
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

    $foto_akad = $_FILES ['foto_akad']['name'];
    $lokasi = $_FILES ['foto_akad']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$foto_akad);

    $spk = $_FILES ['spk']['name'];
    $lokasi = $_FILES ['spk']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$spk);

    $notaris = $_FILES ['notaris']['name'];
    $lokasi = $_FILES ['notaris']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$notaris);

    $kuasa = $_FILES ['kuasa']['name'];
    $lokasi = $_FILES ['kuasa']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$kuasa);

    $penjamin = $_FILES ['penjamin']['name'];
    $lokasi = $_FILES ['penjamin']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$penjamin);



    $sql = $koneksi->query("INSERT INTO adm_kredit (nomor,nama,foto_akad,spk,notaris,kuasa,penjamin)VALUES('$nomor','$nama','$foto_akad','$spk','$notaris','$kuasa','$penjamin')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan")
            window.location.href = "?page=adm_kredit";
        </script>

<?php
    }
}

?>