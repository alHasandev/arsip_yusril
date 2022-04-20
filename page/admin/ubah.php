<?php

    $kode = $_GET['nama_user'];
    $sql = $koneksi->query("select * from user where nama_user = '$kode'");
    $data = $sql->fetch_assoc();

?>

<div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <h2>
                        Ubah User
                    </h2>
                </div>
            

                <div class="body">

                    <form method="POST" enctype="multipart/form-data">
                        <label>Username</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama_user" class="form-control" value="<?php echo $data['nama_user'];?>" readonly/>
                            </div>
                        </div>
                        
                        <label>Password</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="password" name="password" class="form-control" value="<?php echo $data['password'];?>"/>
                            </div>
                        </div>

                        <label>Level</label>
                        <div class="form-group">
                            <div class="form-line">
                            <select class="form-control show-tick"  name="level" class="form-control"  >
                                        <option  <?php if($data['level']=='Admin') {echo "selected";}?> value="Admin">Admin</option>
                                        <option  <?php if($data['level']=='Guru') {echo "selected";}?> value="Guru">Guru</option>
                                        <option  <?php if($data['level']=='Walikelas') {echo "selected";}?> value="Walikelas">Walikelas</option>
                                    </select>                    
                            </div>
                        </div>

                        <label>Foto</label>
                        <div class="form-group">
                            <div class="form-line">
                                <img src="images/<?php echo $data['foto']; ?>" width="250" height="250" alt="">
                            </div>
                        </div>

                        <label>Ganti Foto</label>
                        <div class="form-group">
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

    $nama_user=$_POST['nama_user'];
    $password =$_POST ['password'];
    $level = $_POST ['level'];

    $foto = $_FILES ['foto']['name'];
    $lokasi = $_FILES ['foto']['tmp_name'];

    if(!empty($lokasi)){

        $upload = move_uploaded_file($lokasi, "images/".$foto);   

	    $sql = $koneksi->query("update user set password='$password', level='$level', foto='$foto' where nama_user='$nama_user'");

        if ($sql) {
            ?>
            <script type="text/javascript">
                
                alert ("Data Berhasil DiUbah")
                window.location.href = "?page=user";

            </script>
            
            <?php
	    }
    }else{
    
        $sql = $koneksi->query("update user set password='$password', level='$level' where username='$username'");

        if ($sql) {
                ?>
                <script type="text/javascript">
                    
                    alert ("Data Berhasil DiUbah")
                    window.location.href = "?page=user";

                </script>
                
                <?php
            }
    }
}

 ?>