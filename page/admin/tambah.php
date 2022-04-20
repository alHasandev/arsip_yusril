<?php
$query ="select max(kode_user) as maxid from user";
$hasil = mysqli_query($koneksi, $query);
$data = mysqli_fetch_array($hasil);
$kode_user = $data['maxid'];
$nourut = (int) substr($kode_user, 3, 3);
$nourut++;
$char = "U";
$kode = $char . sprintf("%03s" , $nourut);

?>
<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Tambah Admin
                    </h2>
                </div>
            

                <div class="body">

                    <form method="POST" enctype="multipart/form-data">
                        <label>Kode User</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode_user" class="form-control" value="<?php echo $kode; ?>" readonly/>
                            </div>
                        </div>

                        <label>Nama User</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama_user" class="form-control" placeholder="Username" />
                            </div>
                        </div>
                        
                        <label>Password</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="password" name="password" class="form-control" placeholder="Password" required />
                            </div>
                        </div>

                        <label>Level</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="level" class="form-control" value="admin" readonly />                
                            </div>
                        </div>

                        <label>Foto</label>
                        <div class="form-group">
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

    $kode_user = $_POST ['kode_user'];
    $nama_user = $_POST ['nama_user'];
    $password=$_POST['password'];
    $level = $_POST ['level'];

    $foto = $_FILES ['foto']['name'];
    $lokasi = $_FILES ['foto']['tmp_name'];
    $upload = move_uploaded_file($lokasi, "images/".$foto);

    if($upload){

        $sql = $koneksi->query("insert into user (kode_user,nama_user,password,level,foto)values('$kode_user','$nama_user','$password','$level','$foto')");

        if ($sql) {
            ?>
            <script type="text/javascript">
                
                alert ("Data Berhasil Disimpan")
                window.location.href = "?page=admin";

            </script>
            
            <?php
        }
    }
}
 ?>