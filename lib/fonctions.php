<?php
include "qrcode/lib/phpqrcode/qrlib.php";
//include "codeBarre/lib/barcode.php";

function genererQRCode($text){
	$output="qrcode.png";
	$qrcode=QRcode::png($text, $output);
	return $output;
}

function genererBarCode($text){
	return "lib/codeBarre/lib/barcode.php?text=$text";
}
