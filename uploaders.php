<?php
//echo "ola Mundo"; exit;
require_once('config.php');
$uid = uniqid();
$dir = '../gis4graph/in/'.$uid;
$dirPy = 'in/'.$uid;

require_once('options.php');

http_response_code(302);

mkdir($dir,'0777',true);

/*
var_dump($options);
var_dump($_FILES);
var_dump($_POST);
exit;
*/
$f1 = $_FILES['dbf'];
$t = explode('.',$f1['name']);

if ($t[1] != 'dbf') {
	//echo $t; exit;
	header("Location: ".URL_G4G."/app/#/home/".REQ_DBF);
	exit;
}

$f2 = $_FILES['prj'];
$t = explode('.',$f2['name']);
if ($t[1] != 'prj') {
	header("Location: ".URL_G4G."/app/#/home/".REQ_PRJ);
	exit;
}


$f3 = $_FILES['shp'];
$t = explode('.',$f3['name']);
if ($t[1] != 'shp') {
	header("Location: ".URL_G4G."/app/#/home/".REQ_SHP);
	exit;
}

$f4 = $_FILES['shx'];
$t = explode('.',$f4['name']);
if ($t[1] != 'shx') {
	header("Location: ".URL_G4G."/app/#/home/".REQ_SHX);
	exit;
}

if (isset($_POST['SH'])) {
	$url = "/converter/".$options.'/'.$_POST['stream_field'].'/'.
		$_POST['basin_mouth'].'/'.$dirPy.'/'.$f3['name'];
			
} else {
	$url = "/converter/".$options.'/null/null/'.$dirPy.'/'.$f3['name'];
}

copy($_FILES['dbf']['tmp_name'], $dir.'/'.$_FILES['dbf']['name']);
copy($_FILES['prj']['tmp_name'], $dir.'/'.$_FILES['prj']['name']);
copy($_FILES['prj']['tmp_name'], $dir.'/'.$_FILES['prj']['name']);
copy($_FILES['prj']['tmp_name'], $dir.'/'.$_FILES['prj']['name']);
//echo $url; exit;
header("Location: $url ");
exit;