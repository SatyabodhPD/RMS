<?php

$username="username";
$password="password";
$database="database";

mysql_connect($localhost,$username,$password);

$student_id = $_GET[id]; 
$query = "SELECT * FROM students WHERE id = '$student_id'"; 
$result = mysql_query($query);
$row = mysql_fetch_array($result);
mysql_close();
?>

<form method="post" action="EditStudentData.php" />

<table>

<tr>
<td><input type="hidden" name="id" value="<? echo "$row[id]" ?>"></td>
</tr>

<tr>
<td>First Name:</td>
<td><input type="text" name="first" value="<? echo "$row[first]" ?>"></td>
</tr>

<tr>
<td>Last Name:</td>
<td><input type="text" name="last" value="<? echo "$row[last]" ?>"></td>
</tr>

<tr>
<td>Phone Number:</td>
<td><input type="text" name="phone" value="<? echo "$row[phone]" ?>"></td>
</tr>

<tr>
<td>E-mail:</td>
<td><input type="text" name="email" value="<?echo "$row[email]" ?>"></td>
</tr>

</table>

</form>