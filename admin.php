<?php
$con = mysqli_connect("localhost","root","sakshi2309","mck_voters_db");
if(! $con)
{
    die('Connection Failed'.mysql_error());
}
//mysql_select_db("test",$con);
$name=$_POST['uname'];
$pass=$_POST['pass'];

$result = mysqli_query($con,"SELECT * FROM voters where voter_reg_num='$name'");
$row = mysqli_fetch_array($result);
$res=$row['first_name'];
//echo $res;
if($res==$pass)
{
	session_start();
	$_SESSION['name']="Admin";
	//$_SESSION['name']=$name;
	//echo $_SESSION['name'];
	$sql="select * from voters where voter_reg_num=".$name."";
		//echo $sql;
		$result = mysqli_query($con,$sql);
		//$row = mysqli_fetch_array($con, $result);
		while($row = mysqli_fetch_assoc($result)) {
			//echo "Fname: " . $row["first_name"];
			$first_name=$row['first_name'];
			$middle_name=$row['middle_name'];
			$last_name=$row['last_name'];
			$name_suffix_lbl=$row['name_suffix_lbl'];
			$age=$row['age'];
			//$mail=$row['mail'];
			$mail_addr1=$row['mail_addr1'];
			$mail_addr2=$row['mail_addr2'];
			$mail_addr3=$row['mail_addr3'];
			$mail_addr4=$row['mail_addr4'];
			$ethnic_code=$row['ethnic_code'];
			$sex_code=$row['sex_code'];
			$house_num=$row['house_num'];
			$res_city_desc=$row['res_city_desc'];
			$state_cd=$row['state_cd'];
			$zip_code=$row['zip_code'];
			//$details = $row;
		}
		
	//header("Location:update1.php");
}
else
{
		echo '<script type="text/javascript">
		alert("Username or Password went wrong");
		window.location.href="adminwarn.html";
		</script>';		
/*
?>
	Want to try again, then <a href="admin.html">GO BACK</a>...
<?php
$to       = 'madhu_vaddi@yahoo.in';
$subject  = 'Testing sendmail.exe';
$message  = 'Hi, you just received an email using sendmail!';
$headers  = 'From: madhu.vaddi114@gmail.com' . "\r\n" .
            'Reply-To: madhu.vaddi114@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=iso-8859-1' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
if(mail($to, $subject, $message, $headers))
    echo "Email sent";
else
    echo "Email sending failed";
*/

}
?>

<html><body>

<div>


<h1>
<center><b style="font-size:50; color:red; background-color:white">Voter Registration System</b></center>
</h1>
<h2>Click on Submit to Update The Changes for Existing user</h2>
</div>
<?php 
$firstname=$middlename=$lastname=$namesuffix=$age=$mailaddress1=$mailaddress2=$mailaddress3=$mailaddress4=$Ethnic_code=$sex=$housenumber=$city=$state=$zip="";
?>

<form id='register' action='insert.php' method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='firstname' >FirstName*:</label> 
<input type='text' name='firstname' id='firstname' value="<?php echo $first_name; ?>" required/>
<br>
<br>
<label for='middlename' >MiddleName:</label>
<input type='text' name='middlename' id='middlename' value="<?php echo $middle_name; ?>"/>
 <br>
 <br>
 <label for='lastname' >LastName:</label>
<input type='text' name='lastname' id='lastname' value="<?php echo $last_name; ?>" />
 <br>
 <br>
  <label for='namesuffix' >NameSuffix:</label>
<input type='text' name='namesuffix' id='namesuffix' value="<?php echo $name_suffix_lbl; ?>" />
 <br>
 <br>
 <label for='age' >Age:</label>
<input type='number_format' name='age' id='age' value="<?php echo $age; ?>" />
 <br>
 <br>
 <label for='Mailaddress1' >Mail Address1*:</label>
<input type='text' name='mailaddress1' id='Mailaddress1' value="<?php echo $mail_addr1; ?>" required/>
 <br>
 <br>
 <label for='Mailaddress2' >Mail Address2:</label>
<input type='text' name='mailaddress2' id='Mailaddress2' value="<?php echo $mail_addr2; ?>" />
 <br>
 <br>
 <label for='Mailaddress3' >Mail Address3:</label>
<input type='text' name='mailaddress3' id='Mailaddress3' value="<?php echo $mail_addr3; ?>" />
 <br>
 <br>
 <label for='Mailaddress4' >Mail Address4:</label>
<input type='text' name='mailaddress4' id='Mailaddress4' value="<?php echo $mail_addr4; ?>" />
 <br>
 <br>
  <label for='Ethnic_code' >Ethnic Code:</label>
<input type='text' name='Ethnic_code' id='Ethnic_code' value="<?php echo $ethnic_code; ?>" />
 <br>
 <br>
  <label for='sex' >Sex*:</label>
<input type='text' name='sex' id='sex' value="<?php echo $sex_code; ?>" required/>
 <br>
 <br>
   <label for='housenumber' >House Number:</label>
<input type='text' name='housenumber' id='housenumber' value="<?php echo $house_num; ?>" />
 <br>
 <br>
   <label for='city' >City*:</label>
<input type='text' name='city' id='city' value="<?php echo $res_city_desc; ?>" required/>
 <br>
 <br>
   <label for='state' >State*:</label>
<input type='text' name='state' id='state' value="<?php echo $state_cd; ?>" required/>
 <br>
 <br>
  <label for='zipcode' >Zip Code*:</label>
<input type='text' name='zip' id='zipcode' value="<?php echo $zip_code; ?>" required/>
 <br>
 <br>
<input type="hidden" name="updateFlag" value="<?php echo $name; ?>"/>
<br>
<input type='submit' name='Submit' value='Submit' />
 
</fieldset>
</form>
</body>
</html>








