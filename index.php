<?php
?>
<html>
<head>
<title>Chatti</title>

<script>

function submitChat() {
		if(form1.uname.value == '' || form1.msg.value == ''){
				alert('Molemmat kentat on pakollisia');
				return;
			}
			var uname = form1.uname.value;
			var.msg = form1.msg.value;
			var xmlhttp = new XMLHttpRequest();

			xmlhttp.onreadystatechange = funtion(){	
					if(xmlhttp.readyState==4&&xmlhttp.status==200){
							document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
						}
				}
			xmlhttp.open('GET','insert.php?uname'+uname+'&msg',true);
			xmlhttp.send();

				
				
</script>


</head>
<body>
<form name="form1">
Kirjoita chat nimesi: <input type="text" name="uname"/><br />
Viesti: <br />
<textarea name="msg"></textarea><br />
<a href="#" onclick="submitChat()">Laheta</a><br /><br />

<div id="chatlogs">
Lataa chatti logia odota...
</div>

</body>