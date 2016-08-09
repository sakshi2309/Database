<!DOCTYPE> 
	<html> 
	  <head> 
	  <head>
<center><b style="font-size:50; color:red; background-color:white">Voter Registration System</b></center>

	    <link rel="Stylesheet" type="text/css" href="mystyle.css">
	    <title>Welcome US Citizens</title> 
	  </head> 
	  <body bgcolor="lightyellow"> 
	    <h2>Enter the voter registration number</h2> 
<?php 
$title=$t=$ssql=$result=$rowcount="";
?>
	    <form  method="post" action="voter_search.php?go"> 
	      Reg Number:<input  type="text" name="Search" autocomplete="off"> 
			      <input  type="submit"> 
				  <br>
				  <a href="../Update/update.php">Edit</a>
				  <br>
				  <a href="../Delete/delete.php">Delete</a>
				  <br>
				  <br>
				  <a href="../Doughnut/doughnut.html">Voters By City</a>
    </form> 
	  </body> 
	</html> 

