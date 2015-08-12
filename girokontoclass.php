<?php
class Girokonto  extends Sparkonto{
	private $Dispo;

	function __construct($Inhaber, $KontoNr, $BLZ, $Dispo){
		parent::__construct($Inhaber,$KontoNr,$BLZ);
		$this->Dispo=$Dispo;
	}
	
	function info(){
		parent::info();
		echo 'Dispolimit: '.$this->Dispo.'<br>';
	}
	
	function auszahlen($Betrag){
		if($Betrag>0-$this->Dispo&&($this->Kontostand-$Betrag)>0-$this->Dispo){
			$this->Kontostand=$this->Kontostand-$Betrag;
		}
	}
}
?>