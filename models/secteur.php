<?php
class Secteur
{
	public $id_secteur_projet;
	public $designation_secteur_projet;

    public $un_secteur;
	
    public function __construct($id_secteur_projet, $designation_secteur_projet){
        $this->id_secteur_projet = $id_secteur_projet;
    	$this->designation_secteur_projet = $designation_secteur_projet;
        
    }
   
}

?>