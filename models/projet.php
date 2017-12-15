<?php
class Projet
{
    public $id_projet;
    public $nom_projet;
    public $nic;
    public $siren;
    public $check_digit_siret;
    public $description_projet;
    public $id_secteur_projet;
    public $site_web;
    public $une_adresse;
    
    public $un_porteur;
    public $un_secteur;
    
    
    public function __construct($id_projet, $nom_projet,$siren,$nic,$check_digit_siret,$description_projet, $id_utilisateur, $id_secteur_projet, $site_web){
        $this->id_projet = $id_projet;
        $this->nom_projet = $nom_projet;
        $this->siren = $siren;
        $this->nic = $nic;
		$this->check_digit_siret = $check_digit_siret;
		$this->description_projet = $description_projet;
        $this->id_utilisateur = $id_utilisateur;
        $this->id_secteur_projet = $id_secteur_projet;
        $this->site_web = $site_web;
    }
 

}

?>