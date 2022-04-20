<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Admin
                            </h2>
                           
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama User</th>
                                            <th>Password</th>
                                            <th>Level</th>
                                            <th>Foto</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                       
                                    <?php
                                        $no = 1;

                                        $sql = $koneksi ->query("select * from user");
                                        while ($data=$sql->fetch_assoc()) {

                                        ?>
                                          <tr>
                                              <td><?php echo $no++;?></td> 
                                              <td><?php echo $data['nama_user'];?></td>
                                              <td><?php echo $data['password'];?></td>
                                              <td><?php echo $data['level'];?></td>
                                              <td><img src="images/<?php echo $data['foto'] ?>" width="50" height="50" alt=""></td>  
                                              <td>
                                              <a href="?page=admin&aksi=ubah&nama_user=<?php echo $data['nama_user']; ?>" class="btn btn-info" > Edit </a>
                                              <a onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data Ini ?')" href="?page=admin&aksi=hapus&nama_user=<?php echo $data['nama_user']; ?>" class="btn btn-danger" ></i> Delete </a>             
                                            </td>
                                              </tr>  
                                            <?php }  ?>
                                    </tbody>
                                </table>
                                <a href="?page=admin&aksi=tambah" class="btn btn-primary" > Tambah Data </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>