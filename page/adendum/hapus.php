<?php

$nomor = $_GET['nomor'];
$sql = $koneksi->query("delete from adendum where nomor='$nomor'");


if ($sql) {
?>
	<script type="text/javascript">
		alert("Data ADENDUM Berhasil Di Hapus")
		window.location.href = "?page=adendum";
	</script>
<?php

}

?>