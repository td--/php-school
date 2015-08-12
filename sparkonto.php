<?php
include('sparkontoclass.php');
include('girokontoclass.php');
$Konto=new Sparkonto('Wolff','270000','1507');
/*$Konto->Inhaber='Wolff';
$Konto->BLZ='270000';
$Konto->KontoNr='1507';
*/
$Konto->einzahlen(100);
$Konto->einzahlen(200);
$Konto->auszahlen(100);
$Konto->auszahlen(500);
$Konto->info();
$Konto2=new Sparkonto('M&uumlller','12345','54321');
/*$Konto2->Inhaber='M&uumlller';
$Konto2->BLZ='12345';
$Konto2->KontoNr='54321';
*/
$Konto2->einzahlen(454654);
$Konto2->einzahlen(4654546541);
$Konto2->auszahlen(655343);
$Konto2->info();
$Giro=new Girokonto('Test','454654','56464','100');
$Giro->info();
$Giro->einzahlen(100);
$Giro->auszahlen(199);
$Giro->info();

?>