<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Point</title>
  </head>
  <body>

<?php
  include_once('database.php');

  

if($_POST['ten']>10 || $_POST['ten']<1 || 	empty ($_POST['id'])
|| empty ($_POST['mid'])
|| empty ($_POST['ten']))
{
  print('エラー</br>');
    print('<a href="login.php">ログイン画面へ戻る</a>');
}

    $id=$_POST['id'];
	$mid=$_POST['mid'];
	$ten=$_POST['ten'];
	$result = $db->query("insert into evals (mid, uid, eval) values (".$mid.",'".$id."', ".$ten.")");
	print("投稿完了</br>");
 ?>
 	   <a href='logout.php'>ログアウト</a></br><hr />
  </body>
</html>
