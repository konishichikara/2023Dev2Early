<!DOCTYPE html>
<html>

<head>
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <title>ニックネーム登録・変更</title>
    <style>
        #nname-form{/*t r b l*//*tb rl*/
            text-align: center;
            margin: 20vh auto 0 auto;
            width: 30vw;
        }
        #mailadd{
            box-shadow: #197905 0 0 500px;
            position: relative;
        }
        #wsbtn{
            margin-top: 5vh;
            width: 30vw;
            background-color: white;
            position: relative;
            z-index: 1;
        }
    </style>
    <script>

    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>

<body>

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

    <form action="logincheck.php" method="post" style="text-align: center;">
        <div class="row">
            <div class="col-md-12">
                <div class="form-floating col-md-12" id="nname-form">
                    <input type="text" class="form-control" id="mailadd" pattern=".+\.[a-zA-Z0-9][a-zA-Z0-9-]{0,61}[a-zA-Z0-9]" value="" required name="mail" inputmode="email" minlength="0" maxlength="40" autocomplete="off">
                    <label for="lastname">メールアドレス</label>
                    <input class="btn btn-outline-success text-dark btn-lg" id="wsbtn" type="submit" value="確定">
                </div>
            </div>
    </form> 
