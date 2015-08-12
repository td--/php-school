<?php
include('Kontoclass.php');

$meinKontoT = new Konto('Thies M&uumlller',1234567890,1234567890);

$meinKontoT->einzahlen(500);
$meinKontoT->auszahlen(250);

$meinKontoM = new Konto('Max Mustermann',155463275,5786452);

$meinKontoM->einzahlen(12345);
$meinKontoM->einzahlen(54321);

$meinKontoM->einzahlen(78910);

$meinKontoT->info();

$meinKontoM->info();

?>