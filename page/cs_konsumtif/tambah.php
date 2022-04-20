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
                            <label>KTP SUAMI</label>
                            <div class="form-line">
                                <input type="file" name="suami" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>KTP SUAMI</label>
                            <div class="form-line">
                                <input type="file" name="istri" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>SURAT PERMOHONAN PINJAMAN</label>
                            <div class="form-line">
                                <input type="file" name="permohonan" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>SURAT PERSETUJUAN SUAMI ISTRI</label>
                            <div class="form-line">
                                <input type="file" name="persetujuan" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>SURAT KUASA POTONG GAJI DARI BENDAHARA DINAS</label>
                            <div class="form-line">
                                <input type="file" name="surat_kuasa" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>FOTO COPY SK CPNS DAN PNS</label>
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
                            <label>KFOTO COPY KARPEG(KARTU PEGAWAI)</label>
                            <div class="form-line">
                                <input type="file" name="karpeg" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>FOTO COPY NPWP</label>
                            <div class="form-line">
                                <input type="file" name="npwp" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>FOTO COPY TASPEN</label>
                            <div class="form-line">
                                <input type="file" name="tespen" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>FOTO COPY TABUNGAN BANK KALTENG</label>
                            <div class="form-line">
                                <input type="file" name="tabungan" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>FOTO COPY JAMINAN( BPKB,SKT, ATAU SERTIPIKAT)</label>
                            <div class="form-line">
                                <input type="file" name="jaminan" class="form-control" placeholder="Lapirkan File" required />
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

    $permohonan = $_FILES ['permohonan']['name'];
    $lokasi = $_FILES ['permohonan']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$permohonan);

    $persetujuan = $_FILES ['persetujuan']['name'];
    $lokasi = $_FILES ['persetujuan']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$persetujuan);

    $surat_kuasa = $_FILES ['surat_kuasa']['name'];
    $lokasi = $_FILES ['surat_kuasa']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$surat_kuasa);

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

    $kerpeg = $_FILES ['kerpeg']['name'];
    $lokasi = $_FILES ['kerpeg']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$kerpeg);

    $npwp = $_FILES ['npwp']['name'];
    $lokasi = $_FILES ['npwp']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$npwp);

    $tespen = $_FILES ['tespen']['name'];
    $lokasi = $_FILES ['tespen']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$tespen);

    $tabungan = $_FILES ['tabungan']['name'];
    $lokasi = $_FILES ['tabungan']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$tabungan);

    $jaminan = $_FILES ['jaminan']['name'];
    $lokasi = $_FILES ['jaminan']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$jaminan);


    $sql = $koneksi->query("INSERT INTO cs_konsumtif (nomor,nama,suami,istri,permohonan,persetujuan,surat_kuasa,sk,slip,kk,nikah,kerpeg,npwp,tespen,tabungan,jaminan)VALUES('$nomor','$nama','$suami','$istri','$permohonan','$persetujuan','$surat_kuasa','$sk','$slip','$kk','$nikah','$kerpeg','$npwp','$tespen','$tabungan','$jaminan')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan")
            window.location.href = "?page=cs_konsumtif";
        </script>

<?php
    }
}

?>