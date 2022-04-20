<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    PELUNASAN KREDIT
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

                            $sql = $koneksi->query("SELECT * FROM pelunasan_kredit ");
                            while ($data = $sql->fetch_assoc()) {

                            ?>
                                <tr>
                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nomor']; ?></td>
                                    <td><?php echo $data['nama']; ?></td> 
                                    <td>
                                        <a href="page/laporan/pelunasan_kredit.php?nomor=<?php echo $data['nomor']; ?>"target="blank" class="btn btn-info"> Cetak </a>
                                        <a href="?page=pelunasan_kredit&aksi=ubah&nomor=<?php echo $data['nomor']; ?>" class="btn btn-info"> Edit </a>
                                        <a onclick="return confirm('Apakah Anda Yakin untuk Menghapus Data Ini ?')" href="?page=pelunasan_kredit&aksi=hapus&nomor=<?php echo $data['nomor']; ?>" class="btn btn-danger"></i> Delete </a>
                                    </td>
                                </tr>
                            <?php }  ?>
                        </tbody>
                    </table>
                    <a href="?page=pelunasan_kredit&aksi=tambah" class="btn btn-primary"> Tambah Data </a>
                </div>
            </div>
        </div>
    </div>
</div>