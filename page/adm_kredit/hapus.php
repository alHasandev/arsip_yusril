<?php

$nomor = $_GET['nomor'];
$sql = $koneksi->query("delete from adm_kredit where nomor='$nomor'");


if ($sql) {
?>
	<script type="text/javascript">
		alert("Data AO KREDIT Berhasil Di Hapus")
		window.location.href = "?page=adm_kredit";
	</script>
<?php

}

?>