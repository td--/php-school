<?php
class Auto{
	##########################
	##						##
	##		VARIABLEN		##
	##						##
	##########################
	var $Farbe; //Variable definieren
	private $KMstand; //Variable definieren
	var $Verbrauch; //Variable definieren
	var $Tankstand; //Variable definieren
	var $maxTank; //Variable definieren
	
	function fahren($KM){ //function fahren definieren
			##########################################
			##										##
			##		altes Fahren ohne Verbrauch		##
			##										##
			##########################################
	/*
		if ($this->KMstand>$this->KMstand+$KM){
			$this->KMstand=$this->KMstand-$KM;
		}
		else{
			$this->KMstand=$this->KMstand+$KM;
		}
		*/
		/*
		if (($this->Verbrauch)*($KM/100)>$Tankstand){
			$this->KMstand=$this->KMstand+($this->Tankstand/$this->Verbrauch)*100;
			$this->Tankstand=0;
		}
		else{
		$this->KMstand=$this->KMstand+($this->Tankstand/$this->Verbrauch)*100;
		//$this->KMstand=$this->KMstand+abs($KM); //Tanken mit Absoluten zahlen (keine Negativen)
		}
		*/
		##########################################
		##										##
		##		fahren mit Verbrauch			##
		##										##
		##########################################
		if(abs($KM)<=$this->Tankstand/$this->Verbrauch*100){
			$this->KMstand=$this->KMstand+abs($KM);
			$this->Tankstand=$this->Tankstand-((abs($KM)/100)*$this->Verbrauch);
		}
		else{
			$this->KMstand=$this->KMstand+(($this->Tankstand/$this->Verbrauch)*100);
			$this->Tankstand=0;
		}
	}
	##################################
	##								##
	##		tanken mit maxTank		##
	##								##
	##################################
	function tanken($Liter){ //function tanken defnieren
		if ($this->Tankstand+$Liter>=$this->maxTank){ //Wenn Liter+Tankstand mehr als Maximaler Tankstand dann
			$this->Tankstand=$this->maxTank; //setze Tankstand auf maximum
		}
		elseif($this->Tankstand+$Liter<0){ //Wenn Tankstand-Menge die Abgezapft wird ist kleiner als 0 dann
			$this->Tankstand=0; //setze den Tankstand auf 0
		}
		else{
			$this->Tankstand=$this->Tankstand+$Liter; //Wenn nichts zutrifft tanke normal.
		}
	}
	function getKMstand(){
		return $this->KMstand;
	}
	function setKMstand($KM){
		echo 'Nur f&uumlr authorisiertes Personal';
	}
}
?>