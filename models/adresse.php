<?php
class Adresse
{
    public $id_adresse;
    public $rue1_adresse;
    public $rue2_adresse;
    public $id_code_commune;
    
    public $une_commune;
	
    public function __construct($id_adresse,$rue1_adresse,$rue2_adresse,$id_code_commune){
		$this->id_adresse = $id_adresse;
		$this->rue1_adresse = $rue1_adresse;
		$this->rue2_adresse = $rue2_adresse;
		$this->id_code_commune = $id_code_commune;
    }
}

?>