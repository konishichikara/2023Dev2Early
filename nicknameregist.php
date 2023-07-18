<?php

session_start();
$dsn = 'mysql]dbname=LAA1419580-system;host=mysql214.phy.lolipop.lan;charset=utf8';
$user = 'LAA1419580';
$password = 'kagome';
$pdo = new PDO($dsnm,$user,$password);
$dbh->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$sql = "SELECT user_mailaddress FROM User";

if(isset(user_mailaddress == $sql)){
	if(nickname == NULL){
     		$ins = "INSERT INTO User (nickname) VALUES (?)";
      		$ps = $pdo->prepare($ins);
	}else(){
      		$upd = "UPDATE User SET nickname = $_POST['name'] where user_mailaddress = ? ";
      		$ps = $pdo->prepare($upd);
	}
}
$ps->bindValue(1,$_SESSION["nickname"],PDO::PARAM_STR);

$ps->execute();

header('Location: http://トップページ');
exit();

?>