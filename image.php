<?php
include('AdjetiveManager.php');
include('Drawer.php');
$name = $_GET['name'];
$gender = $_GET['gender'];
$adjetiveManager = new AdjetiveManager();
$drawer = new Drawer($name,$gender);
header('Content-type: image/png');
echo $drawer->getImageBlob();