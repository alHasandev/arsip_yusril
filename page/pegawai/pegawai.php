<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    Data Pegawai
                </h2>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIP</th>
                                <th>Nama Pegawai</th>
                                <th>Tempat, Tanggal Lahir</th>
                                <th>Jenis Kelamin</th>
                                <th>Agama</th>
                                <th>Kewarganegaraan</th>
                                <th>Status</th>
                                <th>Alamat</th>
                                <th>Telpon</th>
                                <th>Email</th>
                                <th>Pendidikan SD</th>
                                <th>Pendidikan SMP</th>
                                <th>Pendidikan SMA</th>
                                <th>Pendidikan S1</th>
                                <th>Pendidikan S2</th>
                                <th>Pendidikan non_formal</th>
                                <th>Pengalaman Kerja</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $no = 1;

                            $sql = $koneksi->query("SELECT * FROM pegawai ");
                            while ($data = $sql->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nip']; ?></td>
                                    <td><?php echo $data['nama_pegawai']; ?></td>
                                    <td><?php echo $data['ttl']; ?></td>
                                    <td><?php echo $data['jenis']; ?></td>
                                    <td><?php echo $data['agama']; ?></td>
                                    <td><?php echo $data['negara']; ?></td>
                                    <td><?php echo $data['status']; ?></td>
                                    <td><?php echo $data['alamat']; ?></td>
                                    <td><?php echo $data['telp']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['sd']; ?></td>
                                    <td><?php echo $data['smp']; ?></td>
                                    <td><?php echo $data['sma']; ?></td>
                                    <td><?php echo $data['si']; ?></td>
                                    <td><?php echo $data['sii']; ?></td>
                                    <td><?php echo $data['non_formal']; ?></td>
                                    <td><?php echo $data['pengalaman']; ?></td>
                                    <td><img src="images/<?php echo $data['foto'] ?>" width="50" height="50" alt=""></td>  
                                    <td>
                                        <a href="page/laporan/datapegawai.php?nip=<?php echo $data['nip']; ?>"target="blank" class="btn btn-info"> Cetak </a>
                                        <a href="?page=pegawai&aksi=ubah&nip=<?php echo $data['nip']; ?>" class="btn btn-info"> Edit </a>
                                        <a onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data Ini ?')" href="?page=pegawai&aksi=hapus&nip=<?php echo $data['nip']; ?>" class="btn btn-danger"></i> Delete </a>
                                    </td>
                                </tr>
                            <?php }  ?>
                        </tbody>
                    </table>
                    <a href="?page=pegawai&aksi=tambah" class="btn btn-primary"> Tambah Data </a>
                </div>
            </div>
        </div>
    </div>
</div>