<html>
<body>
<form action="logout1.php"/>

<table>
<tr height="50px">
<tr>
<center>
<td align="center" width="1400px">
Are you sure to logout<br>
<input type="submit" value="Yes">&nbsp&nbsp
<input type="button" value="No" onclick="goBack()">
</td>
</center>
</tr>

<script>
function goBack()
  {
  window.history.back()
  }
</script>


 <script type="text/javascript" language="javascript">
            javascript:window.history.forward(1);
 </script>
</table>
 
 </body>
 </html>