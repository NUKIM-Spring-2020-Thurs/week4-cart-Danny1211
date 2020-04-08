<?php
	session_start();
	$yid="danny21316";
	$ypwd="123456";
	$id=$_POST["account"];
	$pwd=$_POST["password"];

	if($yid==$id && $ypwd==$pwd){
		$_SESSION["i"]="s";
		header('Location:catalog.php');
	}else{
		header('Location:loginshopping.php');
	}

?>