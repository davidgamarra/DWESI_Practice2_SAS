<?php
require "./classes/AutoLoad.php";
$files = FileUpload::transformArray("imagen");
$correct = 0;
$failed = 0;
$nss = Request::post("id_us");
foreach($files as $file){
	$subir = new FileUpload("imagen", $file);
	$subir->setName($nss);
	$subir->setDestination("../../radiografia/");
	if($subir->upload() == 1){
		$correct++;
	} else {
		$failed++;
	}
}

header("Location:resultado.php?nss=$nss&correct=$correct&failed=$failed");
exit();
