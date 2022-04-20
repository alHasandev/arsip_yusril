<?php 

$nip = $_GET['nip'];
$sql = $koneksi->query("SELECT * FROM pegawai INNER JOIN golongan ON pegawai.kode_golongan=golongan.kode_golongan INNER JOIN jabatan ON pegawai.kode_jabatan=jabatan.kode_jabatan where pegawai.nip = '$nip'");
$data = $sql->fetch_assoc();

?>

<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Ubah Data Pegawai
                </h2>
            </div>


            <div class="body">

                <form method="POST" enctype="multipart/form-data">
                    <label>NIP</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nip" class="form-control" value="<?php echo $data['nip']; ?>" readonly />
                        </div>
                    </div>

                    <label>Nama Pegawai</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="nama_pegawai" class="form-control" value="<?php echo $data['nama_pegawai']; ?>"  />
                        </div>
                    </div>

                    <label>Tempat Tanggal Lahir</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="ttl" class="form-control" value="<?php echo $data['ttl'];?>"/>
                        </div>
                    </div>

                    <label>Jenis Kelamin</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="jenis" class="form-control" value="<?php echo $data['jenis']; ?>"  />
                        </div>
                    </div>

                    <label>Agama</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="agama" class="form-control" value="<?php echo $data['agama']; ?>"  />
                        </div>
                    </div>

                    <label>Kewarganegaraan</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="negara" class="form-control" value="<?php echo $data['negara']; ?>"  />
                        </div>
                    </div>

                    <label>Status</label>
                    <div class="form-group">
                        <div class="form-line">
                            <select class="form-control show-tick" name="status" class="form-control">
                                <option <?php if ($data['status'] == 'Belum Menikah') {
                                            echo "selected";
                                        } ?> value="Belum Menikah">Belum Menikah</option>
                                <option <?php if ($data['status'] == 'Menikah') {
                                            echo "selected";
                                        } ?> value="Menikah">Menikah</option>
                            </select>
                        </div>
                    </div>

                    <label>Alamat</label>
                    <div class="form-group">
                        <div class="form-line">
                            <textarea name="alamat" class="form-control"><?php echo $data['alamat']; ?></textarea>
                        </div>
                    </div>

                    <label>Telpon</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="telp" class="form-control" value="<?php echo $data['telp']; ?>"  />
                        </div>
                    </div>


                    <label>Email</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="email" class="form-control" value="<?php echo $data['email']; ?>"  />
                        </div>
                    </div>

                    <label>Sekolah Dasar</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="sd" class="form-control" value="<?php echo $data['sd']; ?>"  />
                        </div>
                    </div>

                    <label>Sekolah Menengah Pertama</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="smp" class="form-control" value="<?php echo $data['smp']; ?>"  />
                        </div>
                    </div>

                    <label>Sekolah Menengah Atas</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="sma" class="form-control" value="<?php echo $data['sma']; ?>"  />
                        </div>
                    </div>

                    <label>Sarjana</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="si" class="form-control" value="<?php echo $data['si']; ?>"  />
                        </div>
                    </div>

                    <label>Magister</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="sii" class="form-control" value="<?php echo $data['sii']; ?>"  />
                        </div>
                    </div>
 
                    <label>Pendidikan Non Formal</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="non_formal" class="form-control" value="<?php echo $data['non_formal']; ?>"  />
                        </div>
                    </div>

                    <label>Pengalaman</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="pengalaman" class="form-control" value="<?php echo $data['pengalaman']; ?>"  />
                        </div>
                    </div>                    

                    <label>Jumlah Anak</label>
                    <div class="form-group">
                        <div class="form-line">
                            <input type="text" name="jumlah_anak" class="form-control" value="<?php echo $data['jumlah_anak']; ?>" />
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Jabatan</label>
                        <select class="form-control" name="kode_jabatan" />
                        <option value="<?php echo $data['kode_jabatan']; ?>"><?php echo $data['nama_jabatan']; ?></option>
                        <?php
                        $sql = $koneksi->query("select * from jabatan order by kode_jabatan");
                        while ($data2 = $sql->fetch_assoc()) {
                            echo "<option value ='$data2[kode_jabatan]'>$data2[nama_jabatan]</option>";
                        }

                        ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Golongan</label>
                        <select class="form-control" name="kode_golongan" />
                        <option value="<?php echo $data['kode_golongan']; ?>"><?php echo $data['nama_golongan']; ?></option>
                        <?php
                        $sql = $koneksi->query("select * from golongan order by kode_golongan");
                        while ($data3 = $sql->fetch_assoc()) {
                            echo "<option value ='$data3[kode_golongan]'>$data3[nama_golongan]</option>";
                        }

                        ?>
                        </select>
                    </div>


                        <div class="form-group">
                             <label>Ganti Foto</label>
                            <div class="form-line">
                                <input type="file" name="foto" class="form-control" value="<?php echo $data['foto'];?>" />
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
        $sql = $koneksi->query("update pegawai set status='$status', ttl='$ttl', jenis='$jenis',agama='$agama',negara='$negara ', nama_pegawai='$nama_pegawai',alamat='$alamat', telp='$telp', email='$email ',sd='$sd', smp='$smp', sma='$sma', si='$si',sii='$sii', non_formal='$non_formal', pengalaman='$pengalaman',foto='$foto' where nip='$nip'");

        if ($sql) {
?>
            <script type="text/javascript">
                alert("Data Berhasil DiUbah")
                window.location.href = "?page=pegawai";
            </script>

        <?php
        }
    
}

?>