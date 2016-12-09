<?php
require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');


$siswa = new Siswa();
$data = $siswa->readALLSiswa();
$a=1;
?>
<table border="4">
<tr>
	<th>No</th>
	<th>NIS</th>
	<th>Full Name</th>
	<th>Date Of Birth</th>
	<th>Age</th>
	<th>Nationality</th>
	<th>Detail Siswa</th>
</tr>
<?php foreach($data as $r):?>
<tr>
	<td><?php echo $a++; ?></td>
	<td><?php echo $r['nis']; ?></td>
	<td><?php echo $r['full_name']; ?></td>
	<td><?php echo $r['date_ob']; $ages=$siswa->AgeC($r['date_ob']); ?> </td>
	<td><?php echo $ages; ?></td>
	<td><?php echo $r['nationality']; ?></td>

	<td><a href="dsiswa.php?a=<?php echo $r['id_siswa']; ?>"> Detail 


|<a href="usiswa.php?a=<?php echo $r['id_siswa']; ?>"> Edit 


|<a href="lib/delsiswa.php?id=<?php echo $r['id_siswa']; ?>"> Delete </td>
</tr>



<?php endforeach ?>

</table>