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
    <H1>New Account</H1>
	<FORM ACTION="new2.php" METHOD="POST">
    <TABLE>
    <TR><TH>ID</TH><TD><INPUT TYPE="TEXT" NAME="id"></TD></TR>
	<TR><TH>Name</TH><TD><INPUT TYPE="TEXT" NAME="name"></TD></TR>
	<TR><TH>Mail Address</TH><TD><INPUT TYPE="TEXT" NAME="ma"></TD></TR>
    <TR><TH>Password</TH><TD><INPUT TYPE="PASSWORD" NAME="pass"></TD></TR>
    </TABLE>
	<INPUT TYPE="submit" VALUE="Create"></br>
    </FORM> 

  </body>
</html>
