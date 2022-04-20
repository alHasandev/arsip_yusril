<?php
  $nip = $_GET['nip'];
?>

<?php

include "../../koneksi.php";


date_default_timezone_set('Asia/Jakarta');

$koneksi = new mysqli("localhost", "root", "", "pt_baktiputra");


 function format_indo($date){
    $BulanIndo = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");

    $tahun = substr($date, 0, 4);               
    $bulan = substr($date, 5, 2);
    $tgl   = substr($date, 8, 2);
    $result = $tgl . " " . $BulanIndo[(int)$bulan-1]. " ". $tahun;
    return($result);
    }

?>

<style>

    @media print{
      input.noPrint{
        display: none;
      }

    }
.img{
width: 100px;
height: auto;
margin-left: 0px;

}
.button {
  background-color: #1E90FF;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.tumblr {
  background-color: #1E90FF;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.tabelpegawai { margin-left: 50px; }
</style>
<hr>
  <table class="table table-borderless" style="width: 100%"> 
   <h3><center><b>LAPORAN DATA PEGAWAI </b></center></h3>
    <th style="text-align: right;">Tanggal Cetak :&nbsp&nbsp<?php echo format_indo(date('Y-m-d'))?> </th>
  </table>

            <?php 
                $sql_pegawai = mysqli_query($koneksi, "SELECT * FROM pegawai WHERE nip='$_GET[nip]'");
                while ($data_pegawai = mysqli_fetch_array($sql_pegawai)){
                    
            ?>
    
    <table class="tabelpegawai">         
            <tr>
                <td rowspan="13" valign="top"><?php echo "<img class=gambar src='../../images/$data_pegawai[foto]' height=200>";?></td>
                <th style="font-size: 16px">&nbsp;</th>  
                <th style="font-size: 16px">&nbsp;</th> 
                <th style="font-size: 16px">&nbsp;</th> 

                <td style="font-size: 16px"><b>NIP</b></td>  
                <td>:</td>
                <td style="font-size: 16px" class="left">
                    <?php echo $data_pegawai['nip']; ?>
                    </td>
            </tr>  
            <tr>
                <th style="font-size: 16px">&nbsp;</th>  
                <th style="font-size: 16px">&nbsp;</th> 
                <th style="font-size: 16px">&nbsp;</th>   
                <td style="font-size: 16px"><b>Nama Pegawai</b></td>  
                <td>:</td>
                <td style="font-size: 16px" class="left"><?php echo $data_pegawai['nama_pegawai']; ?></td>
            </tr> 
            <tr>
                <th style="font-size: 16px">&nbsp;</th>  
                <th style="font-size: 16px">&nbsp;</th> 
                <th style="font-size: 16px">&nbsp;</th>   
                <td style="font-size: 16px"><b>Tempat, Tanggal Lahir</b></td>  
                <td>:</td>
                <td style="font-size: 16px" class="left"><?php echo $data_pegawai['ttl']; ?></td>
            </tr>
            <tr>
                <th style="font-size: 16px">&nbsp;</th>  
                <th style="font-size: 16px">&nbsp;</th> 
                <th style="font-size: 16px">&nbsp;</th>   
                <td style="font-size: 16px"><b>Jenis Kelamin</b></td>  
                <td>:</td>
                <td style="font-size: 16px" class="left"><?php echo $data_pegawai['jenis']; ?></td>
            </tr> 
            <tr>
                <th style="font-size: 16px">&nbsp;</th>  
                <th style="font-size: 16px">&nbsp;</th> 
                <th style="font-size: 16px">&nbsp;</th>   
                <td style="font-size: 16px"><b>Agama</b></td>  
                <td>:</td>
                <td style="font-size: 16px" class="left"><?php echo $data_pegawai['agama']; ?></td>
            </tr>
            <tr>
                <th style="font-size: 16px">&nbsp;</th>  
                <th style="font-size: 16px">&nbsp;</th> 
                <th style="font-size: 16px">&nbsp;</th>   
                <td style="font-size: 16px"><b>Kewarganegaraan</b></td>  
                <td>:</td>
                <td style="font-size: 16px" class="left"><?php echo $data_pegawai['negara']; ?></td>
            </tr>
            <tr>
                <th style="font-size: 16px">&nbsp;</th>  
                <th style="font-size: 16px">&nbsp;</th> 
                <th style="font-size: 16px">&nbsp;</th>   
                <td style="font-size: 16px"><b>Status</b></td>  
                <td>:</td>
                <td style="font-size: 16px" class="left"><?php echo $data_pegawai['status']; ?></td>
            </tr>
            <tr>
                <th style="font-size: 16px">&nbsp;</th>  
                <th style="font-size: 16px">&nbsp;</th> 
                <th style="font-size: 16px">&nbsp;</th>   
                <td style="font-size: 16px"><b>Alamat</b></td>  
                <td>:</td>
                <td style="font-size: 16px" class="left"><?php echo $data_pegawai['alamat']; ?></td>
            </tr>
            <tr>
                <th style="font-size: 16px">&nbsp;</th>  
                <th style="font-size: 16px">&nbsp;</th> 
                <th style="font-size: 16px">&nbsp;</th>   
                <td style="font-size: 16px"><b>Telepon</b></td>  
                <td>:</td>
                <td style="font-size: 16px" class="left"><?php echo $data_pegawai['telp']; ?></td>
            </tr>
            <tr>
                <th style="font-size: 16px">&nbsp;</th>  
                <th style="font-size: 16px">&nbsp;</th> 
                <th style="font-size: 16px">&nbsp;</th>   
                <td style="font-size: 16px"><b>Email</b></td>  
                <td>:</td>
                <td style="font-size: 16px" class="left"><?php echo $data_pegawai['email']; ?></td>
            </tr>
            <tr>
                <th style="font-size: 16px">&nbsp;</th>  
                <th style="font-size: 16px">&nbsp;</th> 
                <th style="font-size: 16px">&nbsp;</th>   
                <td style="font-size: 16px"><b>Pendidikan Non Formal</b></td>  
                <td>:</td>
                <td style="font-size: 16px" class="left"><?php echo $data_pegawai['non_formal']; ?></td>
            </tr>
            <tr>
                <th style="font-size: 16px">&nbsp;</th>  
                <th style="font-size: 16px">&nbsp;</th> 
                <th style="font-size: 16px">&nbsp;</th>   
                <td style="font-size: 16px"><b>Pengalaman Kerja</b></td>  
                <td>:</td>
                <td style="font-size: 16px" class="left"><?php echo $data_pegawai['pengalaman']; ?></td>
            </tr>

            <?php } ?>

            
        </table>   






            <br>
            <input type="button" class="noPrint button" value="Cetak" onclick="window.print()">
                      </div>
                  </div>
              </div>
          </div>
    </div>                                     
