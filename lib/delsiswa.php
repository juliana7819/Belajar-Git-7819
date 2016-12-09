<?php

require_once('DBClass.php');
require_once('m_siswa.php');

$id = $_GET['id'];

if(!is_numeric($id)){
	exit('ID SALAH');
	
} 

$siswa = new Siswa();
$data = $siswa->deleteSiswa($id);
if(empty($data)){
	?>
	<script>
	alert('data berhasil dihapus');
	window.location="../siswa.php";
	</script>
	<?php
}
?>