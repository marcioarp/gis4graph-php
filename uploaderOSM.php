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
$f1 = $_FILES['osm'];
$t = explode('.',$f1['osm']);
if ($t[1] != 'osm') {
	//echo $t; exit;
	header("Location: ".URL_G4G."/app/#/home/".REQ_OSM);
	exit;
}

$url = "/converter/".$options.'/null/null/'.$dirPy.'/'.$f3['name'];

copy($_FILES['osm']['tmp_name'], $dir.'/'.$_FILES['osm']['name']);
//echo $url; exit;
header("Location: $url ");
exit;
