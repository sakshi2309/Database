<?php
session_start();
if(isset($_SESSION['name']))
{ 
	unset($_SESSION['name']);
	session_destroy();
}

?>
<html>
<br>	
<br>
<head>
<center><b style="font-size:50; color:red; background-color:white">Library Management System</b></center>
</head>
<body background="5.jpg">
<br>
<br>
<br>
<table>
<tr>
<td width="150px"/>
<td style="background-color:lightgrey" width="1010px"><h2 align="center">You have successfully Logged out</h2>
<h3 align="center">To Login, <a href="login.html">Click here</a></h3>
</td>
</tr>
<tr>
<td width="150px"/>
<td width="1010px"><marquee><img src="logout3.gif" width="300px" style="background-color:white"/><marquee></td>
</tr>
</table>




</body>
</html>