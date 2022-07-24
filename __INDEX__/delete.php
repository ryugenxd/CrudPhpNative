<?php
#___fix warning php header menggunakan perintah use output buffering to solve it
/*
ob_start();  for started
ob_end_flush(); for end
*/
ob_start();
require "../__MODULE__/__module.php";
$id=$_GET['id'];
if(isset($id)){
if(delete($id)){
	header("Location: ../index.php");
}else{
	header("Location: ../index.php");
}
}
ob_end_flush();