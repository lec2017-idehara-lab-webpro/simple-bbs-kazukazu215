<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Messages</title>
  </head>
  <body>

<?php
  include_once('database.php');

   $result = $db->query("select uid,password,name from users");	
  while ( $user = $result->fetch_assoc())
   {
   $id=array();
   $pass=array();
   $id=$user['uid'];
   $pass=password_hash($user['password'], PASSWORD_DEFAULT);
   $name=$user['name'];

   if($_POST['id']==$id && password_verify($_POST['pass'],$pass))
   {
    print('こんにちは</br>');
	print($name . "さんでログイン中</br>");	
	print('<input type="button" value="リロード" onclick="location.reload() ">');
	print('<hr />');
	$in=$_POST['sort'];
	break;
   }
   else
   {
   $in=0;
   }
   }
 

   if($in==1)
   {
	$result = $db->query("select mid, uid, body,timestamp, name , parent from messages left join users using(uid) order by parent ; ");

	while ( $mes = $result->fetch_assoc())
	 {
      print($mes['mid']. " : ".$mes['name'] .  " : "  . $mes['body'] .  " : " . $mes['timestamp']."<br />");
	  break;
	  }

	  while ( $mes = $result->fetch_assoc())
	 {	  
	 if($mes['parent']==0)
	 {
	  	  print("→".$mes['name'] .  " : "  . $mes['body'] .  " : " . $mes['timestamp']."<br />");	
	  }
	  else if(!$mes['parent']==0)
	  {
	  print($mes['mid']. " : ".$mes['name'] .  " : "  . $mes['body'] .  " : " . $mes['timestamp']."<br />");
	  }
	  }
	}



   else if($in==2)
   {
   $result = $db->query(" select mid,uid,AVG(eval) from evals left join users using(uid) group by  mid order by eval desc");
	while ( $mes = $result->fetch_assoc()) 
	{
    print($mes['uid']. " : " .$mes['AVG(eval)']."<br />");
    }
	}
   

   print('<hr />');



   if(empty($_POST['id']) || empty($_POST['pass']))
   {
    print('エラー</br>');
    print('<a href="login.php">ログイン画面へ戻る</a>');
	}
	
	else if($_POST['id']!=$id || !password_verify($_POST['pass'],$pass))
	{
	print('エラー</br>');
    print('<a href="login.php">ログイン画面へ戻る</a>');
	}


 ?>
  <form action='res.php' method='post'>
  <p>投稿</p>
  <TR><TH>投稿先ID(新スレッドの作成の場合は順番を守ってください)</TH><br/>
  <TD><input type='text' name='mid'></TD></TR></br>
  <TR><TH>あなたのID</TH></br>
  <TD><input type='text' name='id'></TD></TR></br>
  <TR><TH>本文</TH></br>
  <TD><input type='text' name='mes'></TD></TR>
   <input type='submit'>
 </form>
 <hr/>
  <form action='posteval.php' method='post'>
  <p>いいね</p>
  <TR><TH>あなたのID</TH><TD><input type='text' name='id'></TD></TR></br>
  <TR><TH>投稿ID</TH><TD><input type='text' name='mid'></TD></TR></br>
  <TR><TH>評価点</TH><TD><input type='text' name='ten'></TD></TR>
     <input type='submit'>
 </form>
<hr />
    <a href='update.php'>名前変更</a></br>
	<a href='update3.php'>パスワード変更</a></br>
    <a href='logout.php'>ログアウト</a></br><hr />
  </body>
</html>