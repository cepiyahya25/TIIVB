<?php
  error_reporting(0);
  require "config/koneksi.php";
  require "config/lib.php";
$Token	= $_GET['Token'];
if(isset($Token)){
	// Skrip menghapus data dari tabel database
	 
	$myQry = $mysqli->query("DELETE FROM surat_keluar WHERE NO_AGENDASK='$Token'");
	
	echo "<script>alert('Data Baru berhasil Dihapus');location.href='?page=data_sk'</script>";
	echo "<meta http-equiv='refresh' content='0;'>";
}
else {
	echo "Data yang dihapus tidak ada";
}
?>