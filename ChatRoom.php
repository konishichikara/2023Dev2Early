<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatRoom</title>
    <style>
        #roomname{/*t r b l*/
            text-align: center;
            padding: 5px 0px 5px 0px;
            margin: 0px;
            background-color: aliceblue;
        }
        #chatarea{/*t r b l*/
            margin: 500px 0px 0px 20vw;
            padding: 5px;
            width: 60vw;
        }
        #chatbox{/*t r b l*/
            margin: 0px 10px 0px 0px;
            padding: 10px;
            width: 50vw;
            outline: none;
            border-style: solid;
            border-color: #197905;
            border-width: 0px 0px 1px 0px;
            font-size: 20px;
        }
        #write{/*t r b l*/
            padding: 12px;
            border-style: solid;
            border-color: #197905;
            border-width: 1px;
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
    <nav class="navbar navbar-expand navbar-dark" style="background: #197905;" aria-label="2 番目のナビゲーション バーの例">
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

    <!--Chat space-->


    
    <form action="ChatCheck.php" method="post">
        <!--Chat area-->
        <div class="" id="chatarea">
            <!--Chat box and Write btn-->
            <input class="alert-secondary" type="textbox" id="chatbox" placeholder="ここに内容を書く" required minlength="1" maxlength="100" autocomplete="off">
            <input class="rounded" type="submit" id="write" value="書き込む">
        </div>
    </form>
</body>
</html>