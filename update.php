<?php

	session_start();
	if(!isset($_SESSION['name']))
	{
		header("location:admin.html");
	}
	$name=$_SESSION['name'];
	
?>
<html>
<body background="5.jpg" >
<br>
<br>
<head>
<center><b style="font-size:50; color:red; background-color:white">Voter Registration System</b></center>
</head>
<br>
<br>
<br>
<form method="post" action="update1.php"/>
<table>
<tr>
<td width="10%"/>
<td width="1010px" style="background-color:lightblue">
&nbsp&nbsp&nbsp&nbsp<b>Welcome

<?php
//echo $_GET['name'];
//$name=$_GET['name'];
echo $name;	
?>
,
</b>


&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp 
<!--<a href="adminentry.html">Home</a>&nbsp&nbsp|&nbsp&nbsp
<a href="itemstatus.php">Item Status</a>&nbsp&nbsp|&nbsp&nbsp<a href="itembyusers.php">Status of Items taken by Users</a>&nbsp&nbsp |&nbsp&nbsp <a href="status.php">Users of Library</a>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
-->
<a href="alogout.php">Log out</a>
</td>
</tr>
</table>

<table>
<!--
<td width="110x"/>
<td style="background-color:lightyellow" width="250px" height="200px" colspan="5">
&nbsp&nbsp&nbspBook issueing and returnig section
	<ul>
		<li><a href="issue.php">Issuing Section</a></li>
		<li><a href="return.php">Returning Section</a></li>
		<li><a href="pay.php">Paying Section</a></li>
	</ul>
&nbsp&nbsp&nbspManaging section
	<ul style="background-color:lightyellow">
	  <li><a href="enter.php">Entering details</a></li>
	  <li><b>Updating details</b></li>
	  <li><a href="delete.php">Deleting details</a></li>	  
	</ul>
</td>
-->
<td>
<td width="10%"/>
<td width="1010px" style="background-color:lightblue">
<table width="755px" style="background-color:lightyellow" align="center">


<td style="background-color:lightyellow" align="center" width="550px" height="200px">
	<table align="center">
		
			<tr><h1 colspan="2" align="center" style="background-color:fdd24f" >
				Updating Section</h1>
			</tr>
		
		<tr>
			
			
			
			<tr>
				<td width="200px">&nbsp&nbsp&nbspSelect Updating Options</td>
				<td>
					<select name="item">
					<option value="Name">Name</option>
					<option value="Address">Address</option>
					</select>
				</td>
			</tr>
			
			<tr>
				<td width="200px">&nbsp&nbsp&nbsp Voter Registration Number</td>
				<td><input type="text" name="Voterregnum" required/></td>
			</tr>
			
		<!--	<tr>
				<td width="200px">&nbsp&nbsp&nbspEnter Item name</td>
				<td><input type="text" name="iname" required/></td>
			</tr>
		-->	
		<!--
			<tr>
				<td width="200px">&nbsp&nbsp&nbspNo. of Items</td>
				<td><input type="text" pattern="\d{2}" name="noitems" required/></td>
			</tr>
			<tr>
				<td width="200px"/>
				<td style="color:red"><small>&nbsp&nbsp&nbsp(Enter 2 digits)</small></td>
			</tr>
			-->
			<tr>
			<td colspan="2" align="center">
			<input type="submit" value="Update"> 
			
			<br>
			</td>
			</tr>
						
			
		</tr>
		
</td>
</table>
<td>
	<img src="update.png" width="200px"/>
</td>
	
</table>
</td>
	
	


</table>

</body>
</html>