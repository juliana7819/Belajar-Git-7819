<?php

require_once('lib/DBClass.php');
require_once('lib/m_siswa.php');


if(!isset($_POST['kirim'])){
	exit('Access Forbidden');
} 

$siswa = new Siswa();

$data['input_name'] = $_POST['in_name'];
$data['input_e'] = $_POST['in_name'];
$data['input_name'] = $_POST['in_name'];
$data['input_name'] = $_POST['in_name'];

