<?php
//Variablen
$zahl = $_POST["zahl"];
$rechenweg=0;
$i=1;

//Formular
echo '<title>Binaer</title>';
echo '<form action="binaer.php" method="post">
 <p>Zahl: <input type="text" name="zahl" /></p>
 <p><input type="submit" /></p>
</form>';

//Schnellrechenweg
echo decbin($zahl);
echo '<br><br>';

//Rechenweg
echo '<h1>Rechenweg:</h1><br>';
$rechenweg=$zahl;
if ($zahl=='0'){
echo 'Zahl ist 0'
}
else{
		echo '#		Wert	Rest'
	while ($rechenweg >= 1){
		echo $i.' :   '.$rechenweg.'   : '.($rechenweg%2).'<br>';
		$rechenweg%2;
		$rechenweg=($rechenweg/2)-(($rechenweg%2)/2);
		$i=$i+1;
	}
}
?>