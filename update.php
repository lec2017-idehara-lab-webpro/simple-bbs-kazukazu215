<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>name change</title>
  </head>
  <body>
  
<h1>名前変更</h1>
 <FORM ACTION="update2.php" METHOD="POST">
   本人確認のため、IDを入力してください：</br>
	<INPUT TYPE="TEXT" NAME="id"></br>
	</br>
	新しい名前を入力してください: </br>
	<INPUT TYPE="TEXT" NAME="name">

	<INPUT TYPE="submit" VALUE="変更"></br>
    </FORM>
  </body>
</html>
