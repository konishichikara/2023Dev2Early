<?php
	session_start();
	$UserMailaddress = $_POST['mail'];
	$UserPass1 = $_POST['pas1'];
	$UserPass2 = $_POST['pas2'];	
	if($UserPass1 == $UserPass2){
		$_SESSION["mail"] = $UserMailaddress;
		$_SESSION["pas1"] = $UserPass1;
		header('Location: 	http://katosega.backdrop.jp/system2/UserRegist.php');
		exit();
	}else{
		header('Location: 	http://katosega.backdrop.jp/system2/UserError.php');
		exit();
	}
?>
