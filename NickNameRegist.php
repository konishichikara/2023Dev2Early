<?php
	session_start();
	$dsn = 'mysql:dbname=LAA1419580-system;host=mysql214.phy.lolipop.lan;charset=utf8';
	$user = 'LAA1419580';
	$password ='kagome';
	$pdo = new PDO($dsn,$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$id = $_SESSION['User']['id'];
	if(isset($_SESSION['User'])){
		$sql = "UPDATE User SET nickname = ? WHERE user_id = ?";
		$ps = $pdo->prepare($sql);
		$ps->execute([$_POST['name'], $id]);
		$_SESSION['User']=['name'=>$_POST['name']];
		header('Location: http://katosega.backdrop.jp/system2/Top.php');
	}else{
		echo 'ログインしてください。';
		echo '<a class="nav-link" href="Login.php">
			  	ログイン
			  </a>';
	}
	
?>