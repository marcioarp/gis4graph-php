<?php

$listOptions = array();
if (isset($_POST['G'])) {
	array_push($listOptions,'S');
} else {
	array_push($listOptions,'N');
}

if (isset($_POST['CA'])) {
	array_push($listOptions,'S');
} else {
	array_push($listOptions,'N');
}

if (isset($_POST['MC'])) {
	array_push($listOptions,'S');
} else {
	array_push($listOptions,'N');
}

if (isset($_POST['B'])) {
	array_push($listOptions,'S');
} else {
	array_push($listOptions,'N');
}

if (isset($_POST['C'])) {
	array_push($listOptions,'S');
} else {
	array_push($listOptions,'N');
}

if (isset($_POST['ST'])) {
	array_push($listOptions,'S');
} else {
	array_push($listOptions,'N');
}

if (isset($_POST['VU'])) {
	array_push($listOptions,'S');
} else {
	array_push($listOptions,'N');
}

if (isset($_POST['SH'])) {
	array_push($listOptions,'S');
	if (!isset($_POST['stream_field']) && (!isset($_POST['basin_mouth']))) {
		header("Location: g4g/gis4graph/app/#/home/".ERR_INFORM_ID);
		exit;
	}
} else {
	array_push($listOptions,'N');
}
$options = implode(',', $listOptions);