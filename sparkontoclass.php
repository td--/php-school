<?php
class Sparkonto{
	protected $Kontostand;									//Kontostand
	private $Inhaber;										//Inhaber
	private $BLZ;											//BLZ
	private $KontoNr;										//KontoNr
	
	function __construct($Inhaber, $KontoNr, $BLZ){ 		//Konstruktor erzeugen
		$this-> Inhaber=$Inhaber;							//Inhaber definieren
		$this-> KontoNr=$KontoNr;							//KontoNr definieren
		$this-> BLZ=$BLZ;									//BLZ definieren
	}
	
	function einzahlen($Betrag){							//Funktion einzahlen()definieren
		if($Betrag>0){										//Überprüfung ob Betrag über 0 ist
			$this->Kontostand=$this->Kontostand+$Betrag;	//Kontostand addieren
	
		}
	}
	function auszahlen($Betrag){							//Funktion auszahlen()definieren
		if($Betrag>0&&($this->Kontostand-$Betrag)>0){		//Überprüfung ob Genug Guthaben da
			$this->Kontostand=$this->Kontostand-$Betrag;	//Kontostand subtrahieren
		}
	}
	function info(){										//Funktion info()definieren
		echo 'Inhaber: '.$this->Inhaber.'<br>';
		echo 'Kontonummer: '.$this->KontoNr.'<br>';
		echo 'BLZ: '.$this->BLZ.'<br>';
		echo 'Kontostand: '.$this->Kontostand.'<a>&euro;</a><br>';
	}
}
?>