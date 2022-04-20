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
                            <label>FOTO COPY KARTU KELUARGA</label>
                            <div class="form-line">
                                <input type="file" name="kk" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>FOTO COPY SURAT NIKAH/ AKTA NIKAH</label>
                            <div class="form-line">
                                <input type="file" name="nikah" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>FOTO COPY SURAT KETERANGAN USAHA</label>
                            <div class="form-line">
                                <input type="file" name="keterangan" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>FOTO COPY STNK KENDARAAN</label>
                            <div class="form-line">
                                <input type="file" name="stnk" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>FOTO COPY JAMINAN BPKB MOTOR</label>
                            <div class="form-line">
                                <input type="file" name="bpkb" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>KWITANSI JUAL BELI</label>
                            <div class="form-line">
                                <input type="file" name="kwitansi" class="form-control" placeholder="Lapirkan File" required />
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

    $kk = $_FILES ['kk']['name'];
    $lokasi = $_FILES ['kk']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$kk);

    $nikah = $_FILES ['nikah']['name'];
    $lokasi = $_FILES ['nikah']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$nikah);

    $keterangan = $_FILES ['keterangan']['name'];
    $lokasi = $_FILES ['keterangan']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$keterangan);

    $stnk = $_FILES ['stnk']['name'];
    $lokasi = $_FILES ['stnk']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$stnk);

    $bpkb = $_FILES ['bpkb']['name'];
    $lokasi = $_FILES ['bpkb']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$bpkb);

    $kwitansi = $_FILES ['kwitansi']['name'];
    $lokasi = $_FILES ['kwitansi']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$kwitansi);

    $sql = $koneksi->query("INSERT INTO cs_intern (nomor,nama,suami,istri,permohonan,persetujuan,kk,nikah,keterangan,stnk,bpkb,kwitansi)VALUES('$nomor','$nama','$suami','$istri','$permohonan','$persetujuan','$kk','$nikah','$keterangan','$stnk','$bpkb','$kwitansi')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan")
            window.location.href = "?page=cs_kendaraan";
        </script>

<?php
    }
}

?>