<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatRoom</title>
    <style>/*t r b l*//*tb rl*//*rgba(赤 , 緑 , 青 , 透明度)*/
        body{
            overflow: scroll;
            overflow-x: hidden;
            width: 100vw;
            height: 100%;
        }

        #nav{
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 100;
        }

        #roomname{
            padding: 5px 0;
            margin: 0;
            text-align: center;
            position: fixed;
            top: 110px;
            width: 100%;
            z-index: 99;
            background-color: rgba(30,100,300,20%);
        }

        #ChArea{
            margin: 20vh 0 0 0;
            padding: 0;
            width: 100vw;
            position: absolute;
            overflow-x: hidden;
        }
        #ChSpace{
            margin: 0;
            padding: 1vh 0;
            width: 100vw;
        }
        li{
            display: flex;
            justify-content: center;
        }
        #ChH{
            margin: 1vh 0 0 10vw;
            padding: 0;
            width: 20em;
            border-style: solid;
            border-color: gainsboro;
            border-width: 0 0 1px 0;
        }
        #ChMsg{
            margin: 0 0 1vh 1vw;
            width: 70vw;
            outline: none;
            border-style: solid;
            border-color: gainsboro;
            border-width: 0 0 1px 0;
            font-size: 25px;
            word-wrap: break-word;
            position: relative;
        }
        #DelCh{
            margin: 0 0 0 30px;
            padding: 0;
            border-style: solid;
            border-color: black;
            border-width: 0 0 1px 0;
        }
        
        #ChBArea{
            margin: 0 0 0 20vw;
            padding: 5px;
            width: 60vw;
            position: fixed;
            top: 90%;
            bottom: 10px;
        }
        #chatbox{
            margin: 0 10px 10px 0;
            padding: 10px;
            width: 50vw;
            outline: none;
            border-style: solid;
            border-color: #197905;
            border-width: 0 0 1px 0;
            font-size: 20px;
        }
        #write{
            padding: 12px;
            border-style: solid;
            border-color: #197905;
            border-width: 1px;
            position: absolute;
        }
    </style>

    <link rel="icon" href="img/kataru.png">
    <link rel="apple-touch-icon" href="img/kataru.png" sizes="180x180">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
    <!--nav-->
    <nav class="navbar navbar-expand navbar-dark" id="nav" style="background: #197905;" aria-label="2 番目のナビゲーション バーの例">
        <div class="container-fluid">
            <a class="nav-link" href="./top.html">
                <img src="./img/kataru.png" title="トップページ" width="80" height="30" class="img-fluid">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample02" aria-controls="navbarsExample02" aria-expanded="false" aria-label="ナビゲーションを切り替える">
                <span class="navbar-toggler-icon"></span>
            </button>
    
            <div class="collapse navbar-collapse justify-content-end" id="navbarsExample02">
                <ul class="navbar-nav">
                    <form>
                        <input class="form-control" type="text" placeholder="検索" aria-label="Search">
                    </form>
                    <a class="nav-link" href="name.html">
                        ニックネーム登録・変更
                    </a>
                    <a class="nav-link" href="sinki.html">
                        新規登録
                    </a>
                    <a class="nav-link" href="login.html">
                        ログイン
                    </a>
                    <a class="nav-link" href="logout.php">
                        ログアウト
                    </a>
                </ul>
            </div>
        </div>
    </nav>

    <!--Room name-->
    <h1 class="" id="roomname">ルーム名</h1>

    <form onsubmit="" method="">
        <!--Chat space area-->
        <span class="" id="ChArea">
            <ul class="" id="ChSpace">
                <div class="" id="ChH">ニックネーム</div>
                    <li>
                        <p class="" id="ChMsg" >チャットメッセージ</p>
                        <input class="rounded" type="submit" id="DelCh" value="削除">
                    </li>
        </span>
    </form>

    
    <form action="ChatCheck.php" method="post">
        <!--Chat box area-->
        <span class="" id="ChBArea">
            <input class="alert-secondary" type="textbox" id="chatbox" placeholder="ここに内容を書く" required minlength="1" maxlength="100" autocomplete="off"><!--autocompleteは過去に入力した内容を表示する機能のON/OFFするための要素-->
            <input class="rounded" type="submit" id="write" value="書き込む">
        </span>
    </form>
</body>
</html>