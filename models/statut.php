<?php
class Statut
{
	public $id_statut;
	public $libelle_statut;

    public $un_statut;
	
    public function __construct($id_statut, $libelle_statut){
        $this->id_statut = $id_statut;
    	$this->libelle_statut = $libelle_statut;
        
    }
   
}

?>