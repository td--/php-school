<?php
function addiere($a, $b){
	
	return  $a + $b;
}
function subtrahiere($a, $b){
	
	return $a - $b;

}
function rechne($operant1, $operator, $operant2){
	if($operant1 == 0 || $operant2 == 0){
		return 'Durch 0 teilen ist nicht erlaubt';
	}
	else{
		switch ($operator) {
			case '+':
				return $operant1 + $operant2;
				break;
			case '-':
				return $operant1 - $operant2;
				break;
			case '*':
				return $operant1 * $operant2;
				break;
			case '/':
				return $operant1 / $operant2;
				break;
			case '%':
				return $operant1 % $operant2;
				break;
			default:
				return 'Kein zulässiger Operator!';
				break;
		}
	}
}
function Basis($op1, $op2){
	$ergebnis = 1;
	for($i = 0; $i < $op2; $i++){
		$ergebnis = $ergebnis * $op1;
		echo $ergebnis . '<br>';

	}
	return $ergebnis;
}
echo '5+2='.addiere(5,2).'</br>';
echo '5-2='.subtrahiere(5,2).'</br>';
echo '=====Rechne+======<br>';
echo '5+2='.rechne(5,'+',2).'</br>';
echo '=====Rechne-======<br>';
echo '5-2='.rechne(5,'-',2).'</br>';
echo '=====Rechne*======<br>';
echo '5*2='.rechne(5,'*',2).'</br>';
echo '=====Rechne/======<br>';
echo '5:2='.rechne(5,'/',2).'</br>';
echo '=====Rechne%======<br>';
echo '5%2='.rechne(5,'%',2).'</br>';
echo '=====RechneRND======<br>';
echo '5%2='.rechne(5,'k',2).'</br>';
echo '=====Rechne0======<br>';
echo '5%2='.rechne(5,'/',0).'</br>';
echo '=====Rechne^======<br>';
echo '2^5='.Basis(2,5).'</br>';
?>