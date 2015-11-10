<?php
require "./classes/AutoLoad.php";
$file = Request::get("file");
$extension = pathinfo($file)["extension"];
if($extension == "jpg") {
	header("Content-type: image/jpeg");
} else {
	header("Content-type: image/$extension");
}
readfile("../../radiografia/$file");