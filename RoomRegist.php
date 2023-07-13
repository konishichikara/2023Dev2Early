<?php
session_start();
/* DB名、ユーザー名、パスワードを変数に格納  */
$dsn = 'mysql:dbname=LAA1419580-system;host=mysql214.phy.lolipop.lan;charset=utf8';
$user = 'LAA1419580';
$password ='kagome';

/* データベースに接続 */
$pdo = new PDO($dsn,$user,$password);
$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

/* SQL文 */
$sql = "INSERT INTO Room (room_name) VALUES (?)";
$ps = $pdo->prepare($sql);

/* データの受け取り */
$RoomName = $_POST['room_name'];
$_SESSION['room_name'] = $RoomName;	//ルームの名前

/* ??の部分に入力する値 */
$ps->bindValue (1,$RoomName, PDO::PARAM_STR);

/* 実行 */
$ps->execute();

header("Location:http://cold-yoron-2957.itigo.jp/ChatRoom.php");		/* チャットルーム画面に遷移　*/ 
exit();
?>
