Geldanlage = 1000eu <br>
Laufzeit = 7Jahre <br>
Zinsen = 3% im Jahr <br>
ab 4Jahren 0.5% mehr <br><br><br>
<?php 

$geldanlage = 1000;
$laufzeit = 7;
$zinsen = 1.03;

for($i = 1; $i <= $laufzeit; $i++){
	if($i >= 4){
		$zinsen = $zinsen + 0.005;
	}
	$geldanlage = $geldanlage * $zinsen;

}
echo $geldanlage;
?>