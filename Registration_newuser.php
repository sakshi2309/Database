<!DOCTYPE HTML> 
<html>
<head>
<link rel="Stylesheet" type="text/css" href="mystyle.css">
</head>
<body bgcolor="lightblue"> 

<div>


<h1>
<center><b style="font-size:50; color:red; background-color:white">Voter Registration System</b></center>
</h1>
<h2>Click on Register for First time user</h2>
</div>
<?php 
$firstname=$middlename=$lastname=$namesuffix=$age=$mailaddress1=$mailaddress2=$mailaddress3=$mailaddress4=$Ethnic_code=$sex=$housenumber=$city=$state=$zip="";
?>

<form id='register' action='insert.php' method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
<input type='hidden' name='submitted' id='submitted' value='1'/>
<label for='firstname' >FirstName*: </label>
<input type='text' name='firstname' id='firstname' maxlength="50" required/>
<br>
<br>
<label for='middlename' >MiddleName:</label>
<input type='text' name='middlename' id='middlename' maxlength="50" />
 <br>
 <br>
 <label for='lastname' >LastName:</label>
<input type='text' name='lastname' id='lastname' maxlength="50" />
 <br>
 <br>
  <label for='namesuffix' >NameSuffix:</label>
<input type='text' name='namesuffix' id='namesuffix' maxlength="50" />
 <br>
 <br>
 <label for='age' >Age*:</label>
<input type='number_format' name='age' id='age' maxlength="50" required/>
 <br>
 <br>
 <label for='Mailaddress1' >Mail Address1*:</label>
<input type='text' name='mailaddress1' id='Mailaddress1' maxlength="50" required />
 <br>
 <br>
 <label for='Mailaddress2' >Mail Address2:</label>
<input type='text' name='mailaddress2' id='Mailaddress2' maxlength="50" />
 <br>
 <br>
 <label for='Mailaddress3' >Mail Address3:</label>
<input type='text' name='mailaddress3' id='Mailaddress3' maxlength="50" />
 <br>
 <br>
 <label for='Mailaddress4' >Mail Address4:</label>
<input type='text' name='mailaddress4' id='Mailaddress4' maxlength="50" />
 <br>
 <br>
  <label for='Ethnic_code' >Ethnic Code*:</label>
<input type='text' name='Ethnic_code' id='Ethnic_code' maxlength="50" required/>
 <br>
 <br>
  <label for='sex' >Sex*:</label>
<input type='text' name='sex' id='sex' maxlength="50" required/>
 <br>
 <br>
   <label for='housenumber' >House Number*:</label>
<input type='text' name='housenumber' id='housenumber' maxlength="50" required/>
 <br>
 <br>
   <label for='city' >City*:</label>
<input type='text' name='city' id='city' maxlength="50" required/>
 <br>
 <br>
   <label for='state' >State*:</label>
<input type='text' name='state' id='state' maxlength="50" required/>
 <br>
 <br>
  <label for='zipcode' >Zip Code*:</label>
<input type='text' name='zip' id='zipcode' maxlength="50" required/>
 <br>
 <br>
<input type="hidden" name="updateFlag" value=0/>
<br>
<input type='submit' name='Submit' value='Register' />
 
</fieldset>
</form>
</body>
</html>