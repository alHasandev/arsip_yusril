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
                            <label>FOTO COPY JAMINAN SERTIPIKAT</label>
                            <div class="form-line">
                                <input type="file" name="jaminan" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>KWITANSI JUAL BELI</label>
                            <div class="form-line">
                                <input type="file" name="kwitansi" class="form-control" placeholder="Lapirkan File" required />
                            </div>
                        </div>

                        <div class="form-group">
                            <label>PBB SERTIPIKAT</label>
                            <div class="form-line">
                                <input type="file" name="pbb" class="form-control" placeholder="Lapirkan File" required />
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

    $jaminan = $_FILES ['jaminan']['name'];
    $lokasi = $_FILES ['jaminan']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$jaminan);

    $kwitansi = $_FILES ['kwitansi']['name'];
    $lokasi = $_FILES ['kwitansi']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$kwitansi);

    $pbb = $_FILES ['pbb']['name'];
    $lokasi = $_FILES ['pbb']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$pbb);

    $sql = $koneksi->query("INSERT INTO cs_intern (nomor,nama,suami,istri,permohonan,persetujuan,kk,nikah,keterangan,jaminan,kwitansi,pbb)VALUES('$nomor','$nama','$suami','$istri','$permohonan','$persetujuan','$kk','$nikah','$keterangan','$jaminan','$kwitansi','$pbb')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan")
            window.location.href = "?page=cs_modal";
        </script>

<?php
    }
}

?>