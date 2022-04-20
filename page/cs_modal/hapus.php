<?php

$nomor = $_GET['nomor'];
$sql = $koneksi->query("delete from cs_modal where nomor='$nomor'");


if ($sql) {
?>
	<script type="text/javascript">
		alert("Data CS Berhasil Di Hapus")
		window.location.href = "?page=cs_modal";
	</script>
<?php

}

?>