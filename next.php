4<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Next Page</title>
  </head>
  <body>
    <a href='session.php'>ID送信ページに戻る</a><hr />
    <a href='next.php'>このページを再表示</a><hr />
    <a href='another.php'>全然別のページ</a><hr />
    <h1>セッション開始ページ</h1>
<?php
  // セッション変数に情報を書き込み
  if( isset($_POST['id']) && strlen($_POST['id']) > 0 )
    $_SESSION['id'] = $_POST['id'];

  print('POST の中身<br>');
  var_dump($_POST);
  print('<hr />');
  print('SESSION の中身<br>');
  var_dump($_SESSION);
 ?>
  </body>
</html>
