<h1>Modulo</h1>
<?php
$zaehler=0;
$nzaehler=0;
$dzaehler=0;
$ndzaehler=0;
for($i = 1; $i <= 10; $i++){
	if ($i % 2 == 0){
		echo $i . ' ist durch 2 teilbar <br>';
		$zaehler++;
	}
	else{
		echo $i . ' ist <span style="text-decoration= underline; ">nicht</span> durch 2 teilbar <br>';
		$nzaehler++;
	}
	if($i % 3 == 0){
		echo $i . ' ist durch 3 teilbar <br>';
		$dzaehler++;
	}
		else{
			echo $i . ' ist <span style="text-decoration= underline; ">nicht</span> durch 3 teilbar <br>';
			$ndzaehler++;
	}
}
echo '<br><br><br>';
echo $zaehler . ' sind durch 2 teilbar <br>';
echo $dzaehler . ' sind durch 3 teilbar <br>';
echo $ndzaehler . ' sind <span style="text-decoration= underline; ">nicht</span> durch 3 teilbar <br>';
echo $nzaehler . ' sind <span style="text-decoration= underline; ">nicht</span> durch 2yy	^^^^^^^^^^^^^^^^^^^^^^ teilbar';
?>
