<?php session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>pass change</title>
  </head>
  <body>
  
<h1>名前変更</h1>
 <FORM ACTION="update4.php" METHOD="POST">
   本人確認のため、IDを入力してください：</br>
	<INPUT TYPE="TEXT" NAME="id"></br>
	</br>
	新パスワードを入力してください: </br>
	<INPUT TYPE="TEXT" NAME="pass">

	<INPUT TYPE="submit" VALUE="変更"></br>
    </FORM>
  </body>
</html>
