<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');

$id = $_GET['a'];

if(!is_numeric($id)){
	exit('Access Forbiden');
}

$siswa = new Siswa();
$data = $siswa->readSiswa($id);

$dt = $data[0];

?>
<table border="8">
<tr>
	<th>ID Siswa</th>
	<th>Full Name</th>
	<th>Nationality</th>
</tr>

<tr>
	<td><?php echo $dt['id_siswa']; ?></td>
	<td><?php echo $dt['full_name']; ?></td>
	<td><?php echo $dt['nationality']; ?></td>
</tr>



</table>


	