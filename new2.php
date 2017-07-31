<?php
  session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>New</title>
  </head>
  <body>
  <?php
   include_once('database.php');
  $id=$_POST['id'];
  $pass=$_POST['pass'];
  $name=$_POST['name'];
  $ma=$_POST['ma'];
   $result = $db->query("insert into users values(".$id.", '".$name."', '".$pass."', '".$ma."')");
 ?>
     <a href='login.php'>Login</a></br><hr />
  </body>
</html>
