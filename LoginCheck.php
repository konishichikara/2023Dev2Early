<?php
    session_start();
    unset($_SESSION['User']);
    //DB名、ユーザー名、パスワードを変数に格納
    $dsn = 'mysql:dbname=LAA1419580-system;host=mysql214.phy.lolipop.lan;charset=utf8';
	$user = 'LAA1419580';
	$password ='kagome';
	//PDOでMySQLのデータベースに接続
	$pdo = new PDO($dsn,$user,$password);
	$pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $sql = $pdo->prepare ('select * from User where user_mailaddress=? and user_password=?');
    $sql -> execute([$_POST['mail'], $_POST['pas']]);
    // 
    foreach ($sql as $row){
        $_SESSION['User']=[
            'id'=>$row['user_id'], 'name'=>$row['nickname'],
            'address'=>$row['user_mailaddress'], 'pass'=>$row['user_password']
        ];
    }
    //
    if(isset($_SESSION['User'])){
        header('Location: http://katosega.backdrop.jp/system2/Top.php');
    }else{
        header('Location: http://katosega.backdrop.jp/system2/LoginError.php');
    }
?>