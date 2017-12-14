<?php
class Commune
{
    public $id_code_commune;
    public $code_commune_insee;
	public $nom_commune;
	public $code_postal;

	public function __construct($id_code_commune, $code_commune_insee, $nom_commune, $code_postal){
	    $this->id_code_commune = $id_code_commune;
	    $this->code_commune_insee = $code_commune_insee;
	    $this->nom_commune = $nom_commune;
	    $this->code_postal = $code_postal;
    }

//getter et setter pour le nom de la commune
      public function getNomCommune(){
          return $this->nom_commune;
    }
    public function setNomCommune(){
    	
    }

//getter et settter pour le code postal    
      public function getCodePostal(){
          return $this->code_postal;
    }
    public function setCodePostal(){
    	
    }

}

?>