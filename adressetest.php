<meta charset="UTF-8">
<?php
//VARIABLEN
include('connect.php');
include('legitimations.php');


//EDIT
if (isset ($_POST['edit'])){
	echo ' Sie wollen Datensatz '.$_POST['ID'].' ändern';
	$str_select_adresse='select vorname, nachname, date, geschlecht from adresse where adresse_id='.$_POST['ID'];
	$query_select_adresse=mysql_query($str_select_adresse);
	$row=mysql_fetch_assoc($query_select_adresse);
	echo '<h1> Adresse ändern </h1>';
	echo '<form method="post">';
	echo 'Vorname: <input type="text" name="vorname" value="'.$row['vorname'].'"><br>';
	echo 'Nachname: <input type="text" name="nachname" value="'.$row['nachname'].'"><br>';
	echo 'ID: <input type="hidden" name="ID" value="'.$_POST['ID'].'">';
	echo 'date: <input type="text" name="date" value="'.$row['date'].'"><br>';
	echo 'Geschlecht:<fieldset class="geschlecht"><class="radio"><input type="radio" name="geschlecht" id="m" value="weiblich" unchecked><label for="m">Männlich</label>';
	echo '<input type="radio" name="geschlecht" id="w" value="weiblich" unchecked><label for="w">Weiblich</label>';
	echo '<input type="radio" name="geschlecht" id="ka" value="weissnicht" unchecked><label for="ka">Weiss Nich</label>';
	echo '</fieldset>';
	
	echo '<input type="submit" name="editspeichern" value="save">
		<input type="submit" name="Abbrechen" value="abort">
		</form>';
}
if (isset($_POST['editspeichern'])){
	$str_select_adresse = 'UPDATE adresse SET vorname="'.$_POST['vorname'].'", nachname="'.$_POST['nachname'].'", date="'.$_POST['date'].'", geschlecht="'.$_POST['geschlecht'].'" WHERE  `adresse_id`="'.$_POST['ID'].'"';
	mysql_query($str_select_adresse);
}
if (isset($_POST['Abbrechen'])){
	echo 'Bearbeitung abgebrochen';
}
if (isset($_POST['del'])){
	echo ' Sie wollen Datensatz '.$_POST['ID'].' löschen';
	echo '<h1> Datensatz löschen</h1>';
	echo '<form method="post">';
	echo '<input type="submit" name="delete" value="delete">';
	echo '<input type="submit" name="ndelete" value="Doch Nich">';
	echo '</form>';
	if(isset($_POST['delete'])){
		$str_select_adresse='DELETE FROM fisi14.adresse WHERE  adresse_id='.$_POST['ID'];
		mysql_query($str_select_adresse);
	}
	 
}
if (isset ($_POST['insert'])){
	echo 'Sie wollen einen neuen Datensatz anlegen<br>';
	echo '<form method="post">';
	echo 'Vorname: <input type="text" name="Vorname" value=""><br>';
	echo 'Nachname: <input type="text" name="Nachname" value=""><br>';
	echo 'Geburtsdatum: <input type="text" name="Geburtsdatum" value=""><br>';
	echo 'Geschlecht:<fieldset class="geschlecht"><class="radio"><input type="radio" name="geschlecht" id="m" value="weiblich" unchecked><label for="m">Männlich</label>';
	echo '<input type="radio" name="geschlecht" id="w" value="weiblich" unchecked><label for="w">Weiblich</label>';
	echo '<input type="radio" name="geschlecht" id="ka" value="weissnicht" unchecked><label for="ka">Weissnicht</label>';
	echo '</fieldset>';
	echo '<input type="submit" name="insert1" value="insert1">';
	echo '</form>';
	
}
if (isset($_POST['insert1'])){

	echo $_POST['geschlecht'];
	$q='INSERT INTO adresse (vorname, nachname, date, geschlecht) VALUES ("'.$_POST['Vorname'].'","'.$_POST['Nachname'].'","'.$_POST['Geburtsdatum'].'","'.$_POST['geschlecht'].'")';
	mysql_query($q);
}
	


$str_select_adresse='select vorname, nachname,date ,adresse_id   from adresse';//das was dahinter folgt ist ein string
$query_select_adresse=mysql_query($str_select_adresse);//Ergebnis ist ein Pointer
echo '<table border="1">';
echo '<form method="post">';
echo '<tr><th>Vorname</th><th>Nachname</th><th>date</th>';
echo '<th colspan="2"><input type="submit" name="insert" value="insert"></th></tr>';
echo '</form>';
while($row=mysql_fetch_assoc($query_select_adresse)){//setzt den Pointer um einen Datensatz weiter, bis es keinen Datensatz mehr gibt, liefert ein array $row
	echo '<tr>';
	echo '<td>'.$row['vorname'].'</td>';
	echo '<td>'.$row['nachname'].'</td>';
	echo '<td>'.$row['date'].'</td>';
	echo '<form method="post">';
	echo '<td><input type="submit" name="edit" value="edit"></td>';
	echo '<td><input type="submit" name="del" value="del"></td>';
	echo '<td><input type="hidden" name="ID" value="'.$row['adresse_id'].'"></td>';
	echo '</form>';
	echo '</tr>';
}

echo '</table>';

?>