<?php
class Commune
{
	private $nomcommune;
	private $codepostal;

    public function __construct($nomcommune, $codepostal){
    	$this->nomcommune = $nomcommune;
    	$this->codepostal = $codepostal;

        
    }

//getter et setter pour le nom de la commune
      public function getNomCommune(){
    		return $this->nomcommune;
    }
    public function setNomCommune(){
    	
    }

//getter et settter pour le code postal    
      public function getCodePostal(){
    		return $this->codepostal;
    }
    public function setCodePostal(){
    	
    }

}

?>