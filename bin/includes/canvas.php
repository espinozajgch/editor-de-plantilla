<?php

header('Content-Type: application/json');
//ini_set('memory_limit','16M');

$error					= false;

$absolutedir			= dirname(__FILE__);
$dir					= '../../img/';
$serverdir				= $dir;

$tmp					= explode(',',$_POST['data']);
$imgdata 				= base64_decode($tmp[1]);

$tmp = explode('.',$_POST['name']);

$extension				= strtolower(end($tmp));
$filename				= $_POST['name'];

$handle					= fopen($serverdir.$filename,'w');
fwrite($handle, $imgdata);
fclose($handle);

$response = array(
		"status" 		=> "success",
		"url" 			=> $filename.'?'.time(), //added the time to force update when editting multiple times
		"filename" 		=> $filename
);


if (!empty($_POST['original'])) {
	$tmp				= explode(',',$_POST['original']);
	$originaldata		= base64_decode($tmp[1]);
	$original			= $_POST['name'].'.'.$extension;
	$orig               = trim($original);

	$handle				= fopen($serverdir.$$orig,'w');
	fwrite($handle, $original);
	fclose($handle);
	
	$response['original']	= $orig;
}

print json_encode($response);
