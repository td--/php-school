<?php
include ('punktclass.php');
include ('punkt3dclass.php');
$P1= new Punkt2D(1, 1);
$P2= new Punkt2D(4, 5);

echo $P1->getX();
echo '=P1(X)<br>';
echo $P1->getY();
echo '=P1(Y)<br>';
echo '<br>';
echo $P2->getX();
echo '=P2(X)<br>';
echo $P2->getY();
echo '=P2(Y)<br>';
echo '<br>';
echo '<br>';

echo 'P1('.$P1->getX().'/'.$P1->getY().') und P2('.$P2->getX().'/'.$P2->getY().') haben einen Abstand von '.$P1->getDistance($P2).'<br>';
echo '<br>';
echo '<br>';

?>