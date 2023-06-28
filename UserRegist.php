<?php
	session_start();
	//DB名、ユーザー名、パスワードを変数に格納
    $dsn = 'mysql:dbname=LAA1419580-system;host=mysql214.phy.lolipop.lan;charset=utf8';
	$user = 'LAA1419580';
	$password ='kagome';
	//PDOでMySQLのデータベースに接続
	$pdo = new PDO($dsn,$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	//SQL文
	$sql = "INSERT INTO User (user_mailaddress, user_password) VALUES (?,? )";
	$ps = $pdo->prepare($sql);+
	//？の部分に入力する値
	$ps->bindValue(1,$_SESSION["mail"],PDO::PARAM_STR);
	$ps->bindValue(2,$_SESSION['pas1'],PDO::PARAM_STR);
	//実行
	$ps->execute();
	header('Location: 	http://katosega.backdrop.jp/system2/UserInput.php');
	exit();
?>
