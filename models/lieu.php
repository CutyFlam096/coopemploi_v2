<?php
class Lieu 
{	
	private $desigantionlieu; 
	private $placelieu;
    public function __construct($desigantionlieu, $placelieu){
        $this->designationlieu = $designationlieu;
    	$this->palcelieu = $palcelieu;
    }


    public function getDesignationLieu(){
    	return $this->designationlieu;
    }
    public function setDesignationLieu(){
    	
    }


    public function getPlaceLieu(){
    	return $this->placelieu;
    }
    public function setPlaceLieu(){
    	
    }
}

?