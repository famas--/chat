<?php
$con = mysql_connect('localhost','root','');
mysql_select_db('chatbox');
$result1 = mysql_query("SELECT * FROM logs ORDER by id DESC");
while($extract = mysql_fetch_array($result1)){
	echo $extract['username'] . ": " . $extract['msg'] . "<br>";
	}


?>