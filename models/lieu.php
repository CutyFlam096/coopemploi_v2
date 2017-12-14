<?php
class Lieu 
{	
    public $id_lieu;
    public $designation_lieu; 
	public $place_lieu;
	public $id_adresse;
	
	public $une_adresse;
	public $un_lieu;
	
	public function __construct($id_lieu, $designation_lieu, $place_lieu, $id_adresse){
	    $this->id_lieu = $id_lieu;
	    $this->designation_lieu = $designation_lieu;
        $this->place_lieu = $place_lieu;
        $this->id_adresse = $id_adresse;
    }
}
?>