<?php
setlocale(LC_ALL, 'en_US.utf8');
include('AdjetiveManager.php');
include('Drawer.php');
$name = '';
if (isset($_GET['name'])){
	$name = $_GET['name'];
}
$gender = '';
if (isset($_GET['gender'])){
	$gender = $_GET['gender'];
}
$adjetiveManager = new AdjetiveManager();
$drawer = new Drawer($name,$gender);
header('Content-type: image/png');
if (!empty($name)){
echo $drawer->getImageBlob();
}