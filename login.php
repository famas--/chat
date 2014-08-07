<?php
session_start();
$username = $_POST['username'];
$password = $_POST['password'];

$con = mysql_connect('localhost','root','');
mysql_select_db('chatbox',$con);

$result = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password' ");
	if(mysql_num_rows($result)){
		$res = mysql_fetch_array($result);
		
		$_SESSION['username'] = $res['username'];
		echo "You are now login. Click <a href='index.php'>here</a> to go back to main chat window";
	}
?>
