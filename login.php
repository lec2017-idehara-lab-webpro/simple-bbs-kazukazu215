<?php
  session_start();


 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body>
    <H1>LOGIN</H1>
	<FORM ACTION="index.php" METHOD="POST">
    <TABLE>
    <TR><TH>ID</TH><TD><INPUT TYPE="TEXT" NAME="id"></TD></TR>
    <TR><TH>Password</TH><TD><INPUT TYPE="PASSWORD" NAME="pass"></TD></TR>
    </TABLE>
	<input type="radio" name="sort" value="1" checked="checked">投稿順</br>
	<input type="radio" name="sort" value="2" >人気順</br>
<INPUT TYPE="submit" VALUE="ログイン"></br>
<p>アカウントが無い方はこちらの<a href="new.php">新規登録</a>を行ってください</p>

    </FORM> 
  </body>
</html>
