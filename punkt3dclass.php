<?php
class Punkt3D extends Punkt2D {
	protected $Z;
	
	function __construct($X,$Y,$Z){
		parent::__construct($X,$Y);
		$this->Z=$Z;
	}
	function setZ(){
		$this->Z=$Z;
	}
	function getZ(){
		return $this->Z;
	}
	function getDistance($Punkt3D){
		return 0;
	}
}
?>