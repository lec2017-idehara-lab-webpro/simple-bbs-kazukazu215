
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>

  <?php

  if (isset($_SESSION["NAME"])) {
    $errorMessage = "ログアウトしました。";
} else {
    $errorMessage = "セッションがタイムアウトしました。";
}

// セッションの変数のクリア
$_SESSION = array();

// セッションクリア
@session_destroy();
?>

  <body>
  ログアウト完了</br>
   <a href='login.php'>ログイン画面へ</a></br><hr />
  </body>
</html>
