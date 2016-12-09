<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');
require_once('lib/m_nationality.php');

$id = $_GET['id'];

if(!is_numeric($id)){
	exit('ID SALAH');
	
} 

$siswa = new Siswa();
$data = $siswa->deleteSiswa($id);

if(empty($data)){
	exit('Siswa is not found');
}
$dt=$data[0];
?>

<h1>Edit Siswa</h1>
<form action="m_siswa.php" method="post">
	NIS : <br />
	<input type="text" name="in_nis" value="<?php echo $dt['id_siswa']; ?>" disbled><br />
	Nama Lengkap : <br />
	<input type="text" name="in_name" value="<?php echo $dt['full_name']; ?>"><br />
	Email : <br />
	<input type="text" name="in_email" value="<?php echo $dt['email']?>"><br />
	Kewarganegaraan : <br />
	<select name="in_nation">
		<option value="<?php echo $dt['id_nationality']?>"><?php echo $dt['nationality']?> </option>
		<?php foreach($data_nation as $r) : ?>
		<option value="<?php echo $r['id_nationality']?>"> <?php echo $r['nationality']?></option>
		<?php endforeach ?>
	</select><br>
	<input type="file" name="in_foto"><br><br>
	<img src="">
	<input type="submit" name="kirim" value="Simpan">
	</form>