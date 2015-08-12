<?php
class Konto{
	
	private $Name;
	private $Ktonr;
	private $BLZ;
	private $Kontostand;
	

	function __construct($Name, $Ktonr, $BLZ){
		$this-> Name=$Name;
		$this-> Ktonr=$Ktonr;
		$this-> BLZ=$BLZ;
		}

	function einzahlen($Betrag){
		$this->Kontostand=$this->Kontostand+$Betrag;
	
	}
	
	function auszahlen($Betrag){
		$this->Kontostand-=$Betrag;
		if($this->Kontostand<0){	
			$this->Kontostand=$this->Kontostand;
			$this->Kontostand='Konto &uumlberzogen!';
		}
			
	}

	function info(){
		echo '<br><table border="2">';
		echo '<tr> <td>Name</td><td>'.$this->Name.'</td></tr>';
		echo '<tr> <td>Kontonummer</td><td>'.$this->Ktonr.'</td></tr>';
		echo '<tr> <td>BLZ</td><td>'.$this->BLZ.'</td></tr>';
		echo '<tr> <td>Kontostand</td><td>'.$this->Kontostand.'</td></tr>';
	}

		
}
?>