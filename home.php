<?php

    $sql = $koneksi->query("select * from user");

    while ($tampil=$sql->fetch_assoc()){

        $user=$sql->num_rows;
    }
    $sql2 = $koneksi->query("select * from gaji");

    while ($tampil2=$sql2->fetch_assoc()){

        $gaji=$sql2->num_rows;
    }

    $sql3 = $koneksi->query("select * from pegawai");

    while ($tampil3=$sql3->fetch_assoc()){

        $pegawai=$sql3->num_rows;
    }
   

?>

<div class="container-fluid">
            <div class="block-header">
                <h2>HALAMAN UTAMA</h2>
            </div>

            <!-- Widgets -->
            <div class="row clearfix">
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-red hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">account_circle</i>
                        </div>
                        <div class="content">
                            <div class="text">User</div>
                            <div class="number" ><?php echo $user; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-blue hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">library_books</i>
                        </div>
                        <div class="content">
                            <div class="text">Gaji</div>
                            <div class="number" ><?php echo $gaji; ?></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                    <div class="info-box bg-purple hover-expand-effect">
                        <div class="icon">
                            <i class="material-icons">account_balance</i>
                        </div>
                        <div class="content">
                            <div class="text">Pegawai</div>
                            <div class="number" ><?php echo $pegawai; ?></div>
                        </div>
                    </div>
                </div>
               