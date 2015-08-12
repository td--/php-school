<form action="dezimalzubinaer.php" type="post">
Zahl eingeben: <input type="text" name="input">
<button type="submit" value="submit">submit</button>
</form>

<?php

if(isset($_POST)){
	$zahl = $_POST['input'];
	
	if(is_int ($zahl)){
		echo decbin($zahl);
	}
	else{
		echo 'keine Dezimalzahl';
	}
}



?>