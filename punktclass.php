<?php
class Punkt2D{
	protected $X;
	protected $Y;
	
	function __construct($X, $Y){
		$this->X=$X;
		$this->Y=$Y;
	}
	function setX($X){
		$this->X=$X;
	}
	function setY($Y){
		$this->Y=$Y;
	}
	function getX(){
		return $this->X;
	}
	function getY(){
		return $this->Y;
	}
	function getDistance($Punkt2D){
		return sqrt((($Punkt2D->getY()-$this->Y)*($Punkt2D->getY()-$this->Y))+(($Punkt2D->getX()-$this->X)*($Punkt2D->getX()-$this->X)));
#		return sqrt(pow($Punkt2D->X-$this->X,2)+pow($Punkt2D->X-$this->X,2));
	}
}
?>