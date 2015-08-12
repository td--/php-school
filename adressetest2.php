<?php
/*
include('connect.php');
$str_select_adresse='SELECT vorname, nachname from adresse';
$query_select_adresse=mysql_query($str_select_adresse);
echo '<table border="1">';
echo '<tr><th>Vorname</th><th>Nachname</th></tr>';
while($row=mysql_fetch_assoc($query_select_adresse)){
	echo '</tr>';
	echo '<td>'.$row['vorname'].'</td>';
	echo '<td>'.$row['nachname'].'</td>';
	echo '<tr>';
}
echo '</table>';
*/
?>
<?php
$con = mysql_connect("localhost","root","");
mysql_select_db("fisi14", $con);
@$a=$_POST['vorname'];
@$b=$_POST['geschlecht'];
if(@$_POST['submit'])
{
echo $s="insert into employee(vorname,geschlecht) values('$a','$b')";
echo "Your Data Inserted";
mysql_query($s);
}
?> 
<html>
<body bgcolor="grey">
<center>
<form method="post">
<table border="1" bgcolor="#00CCFF">
<tr><td>Name</td>
<td><input type="text" name="name"/></td>
</tr>
<tr><td rowspan="2">Sex</td>
<td><input type="radio" name="sex" value="Male"/>Male</td>
<tr>
<td><input type="radio" name="sex" value="Female"/>Female</td></tr>
</tr>
<tr><td><input type="submit" name="submit" value="Submit"/></td></tr>
</table>
</form>
</center>
</body>
</html>