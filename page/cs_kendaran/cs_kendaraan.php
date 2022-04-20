<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    COSTUMER SERVICE KREDIT INTERN
                </h2>

            </div>
            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NOMOR REKENING</th>
                                <th>NAMA NASABAH</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $no = 1;

                            $sql = $koneksi->query("SELECT * FROM cs_kendaraan ");
                            while ($data = $sql->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nomor']; ?></td>
                                    <td><?php echo $data['nama']; ?></td> 
                                    <td>
                                        <a href="page/laporan/cs_kendaraan.php?nomor=<?php echo $data['nomor']; ?>"target="blank" class="btn btn-info"> Cetak </a>
                                        <a href="?page=cs_kendaraan&aksi=ubah&nomor=<?php echo $data['nomor']; ?>" class="btn btn-info"> Edit </a>
                                        <a onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data Ini ?')" href="?page=cs_kendaraan&aksi=hapus&nomor=<?php echo $data['nomor']; ?>" class="btn btn-danger"></i> Delete </a>
                                    </td>
                                </tr>
                            <?php }  ?>
                        </tbody>
                    </table>
                    <a href="?page=cs_kendaraan&aksi=tambah" class="btn btn-primary"> Tambah Data </a>
                </div>
            </div>
        </div>
    </div>
</div>