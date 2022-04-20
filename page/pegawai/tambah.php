<div class="row clearfix"> 
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Tambah Data Pegawai
                </h2>
            </div>


            <div class="body">

                <form method="POST" enctype="multipart/form-data">
                    <label>NIP</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP">
                        </div>
                    </div>

                    <label>Nama Pegawai</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nama_pegawai" class="form-control" placeholder="Masukkan Nama">
                        </div>
                    </div>

                    <label>Tempat Tanggal Lahir</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="ttl" class="form-control" placeholder="Masukkan Status">
                        </div>
                    </div>

                    <label>Jenis Kelamin</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="jenis" class="form-control" placeholder="Masukkan Status">
                        </div>
                    </div>

                    <label>Agama</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="agama" class="form-control" placeholder="Masukkan Status">
                        </div>
                    </div>

                    <label>Negara</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="negara" class="form-control" placeholder="Masukkan Status">
                        </div>
                    </div>

                    <label>Status</label>
                        <div class="form-group">
                            <div class="form-line">
                            <select class="form-control show-tick"  name="status" class="form-control"  >
                                        <option value="">-- PILIH STATUS --</option>
                                        <option value="kawin">Kawin</option>
                                        <option value="belum_kawin">Belum Kawin</option>>
                                    </select>                    
                            </div>
                        </div>

                    <label>Alamat</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="alamat" class="form-control" placeholder="Masukkan Alamat"></textarea>
                        </div>
                    </div>

                    <label>Telepon</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="telp" class="form-control" placeholder="Masukkan Nomor Telepon">
                        </div>
                    </div>

                    <label>Email</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="email" class="form-control" placeholder="Masukkan Status">
                        </div>
                    </div>

                    <label>Sekolah Dasar</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="sd" class="form-control" placeholder="Masukkan Status">
                        </div>
                    </div>

                    <label>Sekolah Menengah Pertama</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="smp" class="form-control" placeholder="Masukkan Status">
                        </div>
                    </div>

                    <label>Sekolah Menegah Atas</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="sma" class="form-control" placeholder="Masukkan Status">
                        </div>
                    </div>

                    <label>Serjana</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="si" class="form-control" placeholder="Masukkan Status">
                        </div>
                    </div>

                    <label>Magister</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="sii" class="form-control" placeholder="Masukkan Status">
                        </div>
                    </div>

                    <label>Pendidikan Non Formal</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="non_formal" class="form-control" placeholder="Masukkan Status">
                        </div>
                    </div>

                    <label>Pengalaman Kerja</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="pengalaman" class="form-control" placeholder="Masukkan Status">
                        </div>
                    </div>

                    <label>Jumlah Anak</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="jumlah_anak" class="form-control" placeholder="Masukkan Jumlah Anak">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <select class="form-control" name="kode_jabatan" />
                        <?php

                        echo "<option value=''>-- Pilih Jabatan --</option>";
                        $sql = $koneksi->query("select * from jabatan order by kode_jabatan");
                        while ($data = $sql->fetch_assoc()) {
                            echo "<option value ='$data[kode_jabatan]'>$data[nama_jabatan]</option>";
                        }

                        ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Golongan</label>
                        <select class="form-control" name="kode_golongan" />
                        <?php

                        echo "<option value=''>-- Pilih Golongan --</option>";
                        $sql = $koneksi->query("select * from golongan order by kode_golongan");
                        while ($data = $sql->fetch_assoc()) {
                            echo "<option value ='$data[kode_golongan]'>$data[nama_golongan]</option>";
                        }

                        ?>
                        </select>
                    </div>

                        <div class="form-group">
                            <label>Foto</label>
                            <div class="form-line">
                                <input type="file" name="foto" class="form-control" placeholder="Gambar" required />
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


    $nip = $_POST['nip'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $ttl = $_POST['ttl'];
    $jenis = $_POST['jenis'];
    $agama = $_POST['agama'];
    $negara = $_POST['negara'];
    $status = $_POST['status'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $email = $_POST['email'];
    $sd = $_POST['sd'];
    $smp = $_POST['smp'];
    $sma = $_POST['sma'];
    $si = $_POST['si'];
    $sii = $_POST['sii'];
    $non_formal = $_POST['non_formal'];
    $pengalaman = $_POST['pengalaman'];
    $foto = $_FILES ['foto']['name'];
    $lokasi = $_FILES ['foto']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$foto);


    $sql = $koneksi->query("INSERT INTO pegawai (nip,nama_pegawai,ttl,jenis,agama,negara,status,alamat,telp,email,sd,smp,sma,si,sii,non_formal,pengalaman,foto)VALUES('$nip','$nama_pegawai','$ttl','$jenis','$agama','$negara','$status','$alamat','$telp','$email','$sd','$smp','$sma','$si','$sii','$non_formal','$pengalaman','$foto')");

    if ($sql) {
?>
        <script type="text/javascript">
            alert("Data Berhasil Disimpan")
            window.location.href = "?page=pegawai";
        </script>

<?php
    }
}

?>