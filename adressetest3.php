<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <link href="/bootsrap/css/bootstrap.min.css" rel="stylesheet">
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/bootsrap/js/bootstrap.min.js"></script>
  
<?php
//adresstest.php
include('connect.php');
//print_r ($_POST);
if (isset($_POST['edit'])){
	print'<div id="container>"Sie wollen Datensatz <b>'.$_POST['id'].'</b> ändern</div>';
	$str_select_adresse='select adresse_id,vorname,nachname,date from adresse where adresse_id='.$_POST['id'].'';
	$query_select_adresse=mysql_query($str_select_adresse);
	$row=mysql_fetch_assoc($query_select_adresse);
	print'<h1>Datensatz ändern</h1>';
	print '<form method="post">';
	print 'Vorname: <input type="text" name="vorname" value="'.$row['vorname'].'"><br>';
	print 'Nachname: <input type="text" name="nachname" value="'.$row['nachname'].'"><br>';
	print 'Geburtsdatum: <input type="text" name="date" value="'.$row['date'].'"><p>';
	print 'Geschlecht: <input type="radio" name="geschlecht" value="male'.$row['geschlecht'].'"><p>';
	print '<input type="submit" name="editspeichern" value="Speichern"<br>';
	print '<input type="submit" name="abbrechen" value="Abbrechen"<br>';
	print '<input type="hidden" name="id" value="'.$_POST['id'].'">';
	print '</form>';
}
if (isset($_POST['editspeichern'])){
	
	$str_update_adresse= 'UPDATE adresse SET vorname="'.$_POST['vorname'].'", nachname="'.$_POST['nachname'].'", date="'.$_POST['date'].'" WHERE adresse_id="'.$_POST['id'].'"';
	
	
	echo $str_update_adresse;
	mysql_query($str_update_adresse);
	}


print '<pre>';
if (isset($_POST['del'])){
	print'Sie wollen Datensatz <b>'.$_POST['id'].'</b> löschen';
}
if (isset($_POST['insert'])){
	print'Sie wollen einen neuen Datensatz anlegen';
}
print '</pre>';
$str_select_adresse='select adresse_id,vorname,nachname,date from adresse';
$query_select_adresse=mysql_query($str_select_adresse);
print'<table border="1">';
print'<form method="post"><tr><th>ID</th><th>Vorname</th><th>Nachname</th><th>Geburtsdatum</th><th colspan="2"><input type="submit" name="insert" value="INSERT" style="width:100%"></th></tr></form>';
while($row=mysql_fetch_assoc($query_select_adresse)){
	print '<form method="post">';
	print '<input type="hidden" name="id" value="'.$row['adresse_id'].'">';
	//print '<input type="hidden" name="id" value="'.$row['adresse_id'].'">';
	//print '<input type="hidden" name="id" value="'.$row['adresse_id'].'">';
	print'<tr>';
	print'<td>'.$row['adresse_id'].'</td>';
	print'<td>'.$row['vorname'].'</td>';
	print'<td>'.$row['nachname'].'</td>';
	print'<td>'.$row['date'].'</td>';
	print'<td><input type="submit" name="edit" value="EDIT"></td>';
	print'<td><input type="submit" name="del" value="DELETE"></td>';
	//print'<td><input type="submit" name="insert" value="INSERT"></td>';
	print'</tr>';
	print '</form>';
}
print'</table>';

/*print '<form method="post">';
print '<input type="text" name="del" value="'.$_POST['adresse_id'].'">';
print '     <input type="submit" name="s" value="DELETE">';
print '</form>';

print '<form method="post">';
print '<input type="text" name="insert" value="'.$_POST['del'].'">';
print '     <input type="submit" name="s" value="INSERT">';
print '</form>';
*/
function edit(){
	print '<form method="post">';
print '<input type="text" name="Vorname" value="'.$_POST['vorname'].'">';
print '<br>';
print '<input type="text" name="Nachname" value="'.$_POST['nachname'].'">';
print '<br>';
print '<input type="text" name="Geburtsdatum" value="'.$_POST['date'].'">';
print '<br>';
print '<input type="submit" name="update" value="UPDATE">';
print '</form>';
	$e= 'UPDATE adresse SET vorname='.$_POST['vorname'].', nachname='.$_POST['nachname'].', date='.$_POST['date'].' WHERE id='.$_POST['id'].'';
}
?>