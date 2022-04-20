<?php

$nomor = $_GET['nomor'];
$sql = $koneksi->query("delete from klam_asuransi where nomor='$nomor'");


if ($sql) {
?>
	<script type="text/javascript">
		alert("Data AO KREDIT Berhasil Di Hapus")
		window.location.href = "?page=klam_asuransi";
	</script>
<?php

}

?>