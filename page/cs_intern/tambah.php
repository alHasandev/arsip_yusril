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
                            <label>FOTO COPY KTP SUAMI</label>
                            <div class="form-line">
                                <input type="file" name="suami" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>FOTO COPY KTP ISTRI</label>
                            <div class="form-line">
                                <input type="file" name="istri" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>SURAT PERMOHONAN PINJAMAN</label>
                            <div class="form-line">
                                <input type="file" name="pemohon" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>SURAT PERSETUJUAN SUAMI ISTRI</label>
                            <div class="form-line">
                                <input type="file" name="persetujuan" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>SURAT KUASA POTONG GAJI DARI BENDAHARA</label>
                            <div class="form-line">
                                <input type="file" name="kuasa" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>FOTO COPY  SK DAN IJAZAH</label>
                            <div class="form-line">
                                <input type="file" name="sk" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>FOTO COPY SLIP GAJI</label>
                            <div class="form-line">
                                <input type="file" name="slip" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>KARTU KELUARGA</label>
                            <div class="form-line">
                                <input type="file" name="kk" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>SURAT NIKAH/ AKTA NIKAH</label>
                            <div class="form-line">
                                <input type="file" name="nikah" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>FOTO COPY NPWP</label>
                            <div class="form-line">
                                <input type="file" name="npwp" class="form-control" placeholder="Lapirkan File" required />
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

    $suami = $_FILES ['suami']['name'];
    $lokasi = $_FILES ['suami']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$suami);

    $istri = $_FILES ['istri']['name'];
    $lokasi = $_FILES ['istri']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$istri);

    $pemohon = $_FILES ['pemohon']['name'];
    $lokasi = $_FILES ['pemohon']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$pemohon);

    $persetujuan = $_FILES ['persetujuan']['name'];
    $lokasi = $_FILES ['persetujuan']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$persetujuan);

    $kuasa = $_FILES ['kuasa']['name'];
    $lokasi = $_FILES ['kuasa']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$kuasa);

    $sk = $_FILES ['sk']['name'];
    $lokasi = $_FILES ['sk']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$sk);

    $slip = $_FILES ['slip']['name'];
    $lokasi = $_FILES ['slip']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$slip);

    $kk = $_FILES ['kk']['name'];
    $lokasi = $_FILES ['kk']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$kk);

    $nikah = $_FILES ['nikah']['name'];
    $lokasi = $_FILES ['nikah']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$nikah);

    $npwp = $_FILES ['npwp']['name'];
    $lokasi = $_FILES ['npwp']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$npwp);

    $sql = $koneksi->query("INSERT INTO cs_intern (nomor,nama,suami,istri,pemohon,persetujuan,kuasa,sk,slip,kk,nikah,npwp)VALUES('$nomor','$nama','$suami','$istri','$pemohon','$persetujuan','$kuasa','$sk','$slip','$kk','$nikah','$npwp')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan")
            window.location.href = "?page=cs_intern";
        </script>

<?php
    }
}

?>