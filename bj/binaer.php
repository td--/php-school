<h1>Bin&auml;rzahlen</h1>

<form method="post" action="binaer.php">
<input type="text" name="input" />
<input type="submit" value=" Absenden ">
</form>


<?php
if(isset($_POST['input'])){
	$rechner = $_POST['input'];
	echo decbin($rechner);
	/*
	while($rechner != 0){
		$rechner = $rechner % 2;
		if($rechner % 2 == true){
			$put_toit = '0';
			
		}
		else{
			$put_toit = '1';
			$rechner = $rechner - 0.5;
		}
		
	$endecho = $endecho += $put_toit;
		
	}
	*/
}


?>