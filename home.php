

<html>

<br>
<br>
<head>

<center><b style="font-size:50; color:red; background-color:white">Voter Registration System</b></center>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"> </script>
<script type="text/javascript">
 function idForm(){
   var selectvalue = $('input[name=choice]:checked', '#idForm').val();


if(selectvalue == "user"){
window.open('http://localhost:8080/dbms/login/user/admin.html','_self');
return true;
}
else if(selectvalue == "admin"){
window.open('http://localhost:8080/dbms/login/admin.html','_self');
return true;
}
else if(selectvalue == "new user"){
window.open('http://localhost:8080/dbms/Registration/Registration_newuser.php','_self');
return true;
}

return false;
};


</script>
</head>

<body bgcolor="lightyellow">
Voter Registration System<br /><br />
<form id="idForm"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" onclick="idForm()"  name="choice" value="user"/>User &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio"  onclick="idForm()" name="choice" value="admin"/>Admin &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio"  onclick="idForm()" name="choice" value="new user"/>New User &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</form>
</body>