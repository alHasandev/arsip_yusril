<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data Golongan
                </h2>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kode Golongan</th>
                                <th>Nama Golongan</th>
                                <th>Tunjangan Suami Istri</th>
                                <th>Tunjangan Anak</th>
                                <th>Uang Makan</th>
                                <th>Uang Lembur</th>
                                <th>Askes</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $no = 1;

                            $sql = $koneksi->query("SELECT * FROM golongan");
                            while ($data = $sql->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['kode_golongan']; ?></td>
                                    <td><?php echo $data['nama_golongan']; ?></td>
                                    <td><?php echo $data['t_istrisuami']; ?></td>
                                    <td><?php echo $data['t_anak']; ?></td>
                                    <td><?php echo $data['uang_makan']; ?></td>
                                    <td><?php echo $data['uang_lembur']; ?></td>
                                    <td><?php echo $data['askes']; ?></td>
                                    <td>
                                        <a href="?page=golongan&aksi=ubah&kode_golongan=<?php echo $data['kode_golongan']; ?>" class="btn btn-info"> Edit </a>
                                        <a onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data Ini ?')" href="?page=golongan&aksi=hapus&kode_golongan=<?php echo $data['kode_golongan']; ?>" class="btn btn-danger"></i> Delete </a>
                                    </td>
                                </tr>
                            <?php }  ?>
                        </tbody>
                    </table>
                    <a href="?page=golongan&aksi=tambah" class="btn btn-primary"> Tambah Data </a>
                </div>
            </div>
        </div>
    </div>
</div>