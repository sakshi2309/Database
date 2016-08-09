<!DOCTYPE HTML> 
<html>
<head>
<link rel="Stylesheet" type="text/css" href="mystyle.css">
</head>
<body>
<?php
$a=$result=$rowcount="";
$conn = mysqli_connect("localhost","root","sakshi2309","mck_voters_db");
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$firstname=test_input($_POST["firstname"]);
$middlename=test_input($_POST["middlename"]);
$lastname=test_input($_POST["lastname"]);
$namesuffix=test_input($_POST["namesuffix"]);
$age=test_input($_POST["age"]);
$mailaddress1=test_input($_POST["mailaddress1"]);
$mailaddress2=test_input($_POST["mailaddress2"]);
$mailaddress3=test_input($_POST["mailaddress3"]);
$mailaddress4=test_input($_POST["mailaddress4"]);
$Ethnic_code=test_input($_POST["Ethnic_code"]);
$Sex=test_input($_POST["sex"]);
$housenumber=test_input($_POST["housenumber"]);
$city=test_input($_POST["city"]);
$state=test_input($_POST["state"]);
$zip=test_input($_POST["zip"]);
$check = $_POST["updateFlag"];

}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
//$result=mysqli_query($conn,$a);
//$rowcount=mysqli_num_rows($result);
//echo rowcount;
if($check==0)
{
$sql="insert into voters (first_name,middle_name,last_name,name_suffix_lbl,age,mail_addr1,mail_addr2,mail_addr3,mail_addr4,ethnic_code,sex_code,house_num,res_city_desc,state_cd,zip_code) 
values ('$firstname','$middlename','$lastname','$namesuffix','$age','$mailaddress1','$mailaddress2','$mailaddress3','$mailaddress4','$Ethnic_code','$Sex','$housenumber','$city','$state','$zip')";
//echo $sql;
//echo "lolololo";
//echo $firstname;
if ($conn->query($sql) === TRUE) {
 echo "Registration Successful!!";
} else {
  echo "Connection error";
}
	
}
else{
//echo "yes<br/>";
if($age == ""){
	$age = 0;	
}
if($zip == ""){
	$zip = 0;
}
$sql="update voters set first_name='$firstname',middle_name='$middlename',last_name='$lastname',name_suffix_lbl='$namesuffix',age=".$age.",mail_addr1='$mailaddress1',mail_addr2='$mailaddress2',mail_addr3='$mailaddress3',mail_addr4='$mailaddress4',ethnic_code='$Ethnic_code',sex_code='$Sex',house_num='$housenumber',res_city_desc='$city',state_cd='$state',zip_code=".$zip." where voter_reg_num =".$check."";
//echo $sql;
if ($conn->query($sql) === TRUE) {
 echo "Updation Successful!!";
} else {
  echo "Connection error";
}
}

//if($rowcount==1){
	//echo "'$username' already belongs to the Orange Family,Please register with a different name";
//}
//else{
	//echo $conn;
	//if ($result = mysqli_query($conn, $sql)){



//if($result = mysqli_query($conn, $sql)){
	//echo "lol";
//}
//else{
	//echo "n";
	//echo $result;
//}
?>
</body>
</html>