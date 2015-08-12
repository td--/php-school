<h1>Potenzen</h1>
<form method="post" action="hoch_rechner.php">
<input type="text" name="input1" />
^
<input type="text" name="input2" />
<input type="submit" value=" Absenden ">
</form>

<?php
if(isset($_POST['input1'])){
	$rechner = $_POST['input1'];
	$rechnerhoch = $_POST['input2'];
	$rechnerbasis = $rechner;
	for($i = 1; $i <= $rechnerhoch-1; $i++){
		$rechner = $rechner * $rechnerhoch;
	}
	echo $rechnerbasis . '^' . $rechnerhoch . ' = ' . $rechner;
}
else{
	echo 'Geben Sie einen wert ein!';
}

?>