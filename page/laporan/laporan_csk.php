<?php
  $nomor = $_GET['nomor'];
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

            <?php 
                $sql_pegawai = mysqli_query($koneksi, "SELECT * FROM cs_konsumtif WHERE nomor='$_GET[nomor]'");
                while ($data_pegawai = mysqli_fetch_array($sql_pegawai)){
                    
            ?>
    
    <table class="tabelpegawai">         
            <tr>
                <td rowspan="14" valign="top"><?php echo "<img class=gambar src='../../images/$data_pegawai[suami]' height=200>";?></td>
                <td rowspan="14" valign="top"><?php echo "<img class=gambar src='../../images/$data_pegawai[istri]' height=200>";?></td>
                <th style="font-size: 16px">&nbsp;</th>  
                <th style="font-size: 16px">&nbsp;</th> 
                <th style="font-size: 16px">&nbsp;</th> 

            <?php } ?>

            
        </table>   






            <br>
            <input type="button" class="noPrint button" value="Cetak" onclick="window.print()">
                      </div>
                  </div>
              </div>
          </div>
    </div>                                     
