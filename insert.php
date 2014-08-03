<?php>
$uname = $_REQUEST('uname');
$msg = $_REQUEST('msg');

$con = mysgl_connect('localhost','root','');
mysql_select_db('chatbox',$con);

mysql_query("INSERT INTO logs ('username','msg') VALUES ('$uname','$msg')");

$result1 = mysql_query("SELECT + FROM logs ORDER by id DESC");
while($extract = mysql_fetch_array($result1)){
	echo $extract['username'] . ": " . $extract['msg'] . "<br>";


?>