<?php

if(isset($_POST['submit'])){
		$con = mysql_connect('localhost','root','');
		mysql_select_db('chatbox',$con);
		
		$uname = $_POST['username'];
		$pword = $_POST['password'];
		$pword2 = $_POST['password2'];
		
		if($pword != $pword2){
			echo "Passwords do not match. <br>";
		}
		else{
				$checkexist = mysql_query("SELECT username FROM users WHERE username='$uname'");
				if(mysql_num_rows($checkexist)){
						echo "Username already exists, please select different username<br>";
				}
				else{
						mysql_query("INSERT INTO users (username,password) VALUES ('$uname','$pword')");
						echo "You have succesfully registered. Click <a href='index.php'>here</a> to go start chat<br>";
				}
			}
}

?>

<html>
<head>
<body>
<form name="form1" method="post" action="register.php">
<table border="1" width="40%">
<tr>
<td>Enter your name: </td><td><input type="text" name="username"></td>
</tr>
<tr>
<td>Enter your password: </td><td><input type="password" name="password"></td>
</tr>
<tr>
<td>Repeat your password: </td><td><input type="password" name="password2"></td>
</tr>
<tr>
<td colspan="2"><input type="submit" name="submit" value="Register"></td>
</tr>
</body>
</table>
</form>
</head>
</html>