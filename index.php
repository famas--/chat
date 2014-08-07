<?php

session_start();
if(!isset($_SESSION['username'])){
?>
	<form name="form2" action="login.php" method="post">
	<table border="1">
	<tr>
	<td>USERNAME:</td>
	<td><input type="text" name="username"</td>
	</tr>
	<tr>
	<td>PASSWORD:</td>
	<td><input type="password" name="password"</td>
	</tr>
	<tr>
	<td colspan="2"><input type="submit" name="submit" value="LOGIN"</td>
	</tr>
	<tr>
	<td colspan="2"><a href="register.php">Register here to get an account</a></td>
	</tr>
	</table>

<?php
	exit;
	}
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="tyylit.css">
<title>Chatti</title>
<script src="jquery-1.11.1.js"></script>
<script>

function submitChat() {
		if(form1.msg.value == ''){
				alert("Enter your message");
				return;
			}
			
			
			var msg = form1.msg.value;
			var xmlhttp = new XMLHttpRequest();

			xmlhttp.onreadystatechange = function(){	
					if(xmlhttp.readyState == 4&&xmlhttp.status==200){
							document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
						}
				}
			xmlhttp.open('GET','insert.php?&msg='+msg,true);
			xmlhttp.send();
	}
	$(document).ready(function(e){
		$.ajaxSetup({cache:false});
		setInterval(function(){$('#chatlogs').load('logs.php');}, 2000);
	});
				
				
</script>


</head>
<body>
<div id="keskelle">
<form name="form1">
<table border="1">
<tr>
<td>Your chat name:</td><td><b><?php echo $_SESSION['username'];?><b/></td>
</tr>
<tr>
<td>Message: </td>
<td><textarea name="msg"></textarea></td>
</tr>
<tr>
<td colspan="2"><button type="button" onclick="submitChat()">Send</button></td>
</tr>
<tr>
<td colspan="2"><button type="button" onclick="window.location.href='logout.php'">Logout</button></td>
</tr>
</table>
</form>

<div id="chatlogs">
<img src="lataa.gif">
</div>
</div>

</body>
</html>