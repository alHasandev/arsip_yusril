<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                Data Jabatan
                            </h2>
                           
                        </div>
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode Jabatan</th>
                                            <th>Nama Jabatan</th>
                                            <th>Gaji Pokok</th>
                                            <th>Tunjangan</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                       
                                    <?php
                                        $no = 1;

                                        
                                        $sql = $koneksi ->query("select * from jabatan");
                                        while ($data=$sql->fetch_assoc()) {

                                        ?>
                                          <tr>
                                              <td><?php echo $no++;?></td>  
                                              <td><?php echo $data['kode_jabatan'];?></td>
                                              <td><?php echo $data['nama_jabatan'];?></td>
                                              <td><?php echo $data['gaji_pokok'];?></td>
                                              <td><?php echo $data['tunjangan'];?></td>
                                              <td>
                                              <a href="?page=jabatan&aksi=ubah&kode_jabatan=<?php echo $data['kode_jabatan']; ?>" class="btn btn-info" > Edit </a>
                                              <a onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data Ini ?')" href="?page=jabatan&aksi=hapus&kode_jabatan=<?php echo $data['kode_jabatan']; ?>" class="btn btn-danger" ></i> Delete </a>             
                                            </td>
                                              </tr>  
                                            <?php }  ?>
                                    </tbody>
                                </table>
                                <a href="?page=jabatan&aksi=tambah" class="btn btn-primary" > Tambah Data </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>