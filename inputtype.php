<?php
echo '<h1>Verschiedene Eingabetypen</h1>';
echo '<form method="post">
		1. Text <input type="text" name="Text" value="'; if(isset($_POST['Text'])){
			echo $_POST['Text'];
		}
		echo '"><br>
		2. Radio Button
		<input type="radio" name="Geschlecht" value="weiblich"';
		if(isset($_POST['Geschlecht'])&&$_POST['Geschlecht']=='weiblich'){
			echo ' checked';
		}
	echo'><input type="radio" name="Geschlecht" value="m&aumlnnlich"';
		if(isset($_POST['Geschlecht'])&&$_POST['Geschlecht']=='m&aumlnnlich'){
			 echo 'checked';
		}
		echo '><br><input type="submit" name="Abschicken" value="Abschicken"></form>';
		if(isset($_POST['Abschicken'])){
			echo 'Sie haben ';
			echo '1. Typ Text>>';
			if(isset($_POST['Text'])){
				echo $_POST['Text'];
			}
			echo '<< eingegeben <br>';
			echo '2. Typ Radio Button>>';
			if(isset($_POST['Geschlecht'])){
				echo $_POST['Geschlecht'];
			}
			echo '<< eingegeben<br>';
		}
?>