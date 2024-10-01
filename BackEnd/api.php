<?php

/* PER IL FUTURO */
// header("Access-Control-Allow-Origin: http://127.0.0.1:5173");
// header("Access-Control-Allow-Headers: X-Requested-With");

$disksString = file_get_contents('db/data.json');
$disksArray = json_decode($disksString, true);

$disks = [];

foreach ($disksArray as $index => $singleDisk) {
    $disks[] = $singleDisk;
}

	
header('Content-Type: application/json');
 
echo json_encode($disks);