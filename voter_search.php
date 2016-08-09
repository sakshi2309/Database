<!DOCTYPE>  
<html>
<head>

<center><b style="font-size:50; color:red; background-color:white">Voter Registration System</b></center>

<link rel="Stylesheet" type="text/css" href="mystyle.css">
</head>
<body>

<?php
$title=$ISBN=$ssql=$result=$rowcount="";
$conn1 = mysqli_connect("localhost","root","sakshi2309","mck_voters_db");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$reg=test_input1($_POST["Search"]);
}
function test_input1($data) 
{
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
$ssql="select 
first_name,middle_name,last_name,name_suffix_lbl,age,mail_addr1,ethnic_code,sex_code,res_city_desc,state_cd,zip_code from voters where voter_reg_num =".$reg."";
//echo $ssql;
$result = $conn1->query($ssql);
if (mysqli_num_rows($result) > 0) {
	
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<div style='color: blue'>Firstname: " . $row["first_name"]."</div>";
		echo"<div style='color: blue'>MiddleName: " . $row["middle_name"]."</div>";
		echo"<div style='color: blue'>LastName: " . $row["last_name"]."</div>";
		echo "<div style='color: blue'>Name Suffix: " . $row["name_suffix_lbl"]."</div>";
		echo"<div style='color: blue'>Age: " . $row["age"]."</div>";
		echo"<div style='color: blue'>Mail Address: " . $row["mail_addr1"]."</div>";
		echo "<div style='color: blue'>Ethnic Code: " . $row["ethnic_code"]."</div>";
		echo"<div style='color: blue'>Sex: " . $row["sex_code"]."</div>";
		echo"<div style='color: blue'>Zip Code: " . $row["zip_code"]."</div>";
		echo "<div style='color: blue'>City: " . $row["res_city_desc"]."</div>";
		echo"<div style='color: blue'>State: " . $row["state_cd"]."</div>";
		//echo"<div style='color: blue'>LastName: " . $row["last_name"]."</div>";
		//echo"<div style='color: blue'>Last_name:" . $row["last_name"]."</div>";
		
    }
}
else
{echo "No results";
}
?>

</body>
</html>