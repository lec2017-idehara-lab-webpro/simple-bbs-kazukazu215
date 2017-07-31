<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Response</title>
  </head>
  <body>

<?php
  include_once('database.php');

	$id=$_POST['id'];
	$mes=$_POST['mes'];
	$mid=$_POST['mid'];

    $result = $db->query("insert into messages(uid, body, parent) values (".$id.",'".$mes."', ".$mid.")");
	print("投稿完了</br>");
 ?>

  <a href='logout.php'>ログアウト</a></br><hr />
  </body>
</html>
