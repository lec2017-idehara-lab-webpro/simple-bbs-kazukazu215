<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>変更</title>
  </head>
  <body>
  
<h1>情報変更</h1>

<?php

  include_once('database.php');

  if(empty($_POST['name'])||empty($_POST['id']))
  {
   print('エラー</br>');
    print('バックボタンで戻ってください');
  }
  else{
  
    $result = $db->query("update users set name = '".$_POST['name']."' where uid like '".$_POST['id']."'");
 print('更新しました。ログインし直してください。</br>');
 }

 ?>
 <a href='logout.php'>ログアウト</a></br><hr />
  </body>
</html>