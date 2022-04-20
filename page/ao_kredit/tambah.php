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
                                <label>SLIK</label>
                                <div class="form-line">
                                <input type="file" name="slik" class="form-control" placeholder="Lapirkan File" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>FOTO SURVEI JAMINAN( BPKB,SKT, ATAU SERTIPIKAT)</label>
                                <div class="form-line">
                                <input type="file" name="survei" class="form-control" placeholder="Lapirkan File" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>FOTO USAHA</label>
                                <div class="form-line">
                                <input type="file" name="usaha" class="form-control" placeholder="Lapirkan File" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>SURAT KETERANGAN TANAH TIDAK SENGKETA</label>
                                <div class="form-line">
                                <input type="file" name="tanah" class="form-control" placeholder="Lapirkan File" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>FORM PENILAIAN JAMINAN</label>
                                <div class="form-line">
                                <input type="file" name="nilai" class="form-control" placeholder="Lapirkan File" required />
                                </div>
                            </div>

                            <div class="form-group">
                                <label>ANALISA KREDIT)</label>
                                <div class="form-line">
                                <input type="file" name="analisa" class="form-control" placeholder="Lapirkan File" required />
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

    $slik = $_FILES ['slik']['name'];
    $lokasi = $_FILES ['slik']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$slik);

    $survei = $_FILES ['survei']['name'];
    $lokasi = $_FILES ['survei']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$survei);

    $usaha = $_FILES ['usaha']['name'];
    $lokasi = $_FILES ['usaha']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$usaha);

    $tanah = $_FILES ['tanah']['name'];
    $lokasi = $_FILES ['tanah']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$tanah);

    $nilai = $_FILES ['nilai']['name'];
    $lokasi = $_FILES ['nilai']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$nilai);

    $analisa = $_FILES ['analisa']['name'];
    $lokasi = $_FILES ['analisa']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$analisa);



    $sql = $koneksi->query("INSERT INTO ao_kredit (nomor,nama,slik,survei,usaha,tanah,nilai,analisa)VALUES('$nomor','$nama','$slik','$survei','$usaha','$tanah','$nilai','$analisa')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan")
            window.location.href = "?page=ao_kredit";
        </script>

<?php
    }
}

?>