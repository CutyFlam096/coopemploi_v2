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
    
    public $photo_1;
    public $photo_2;
    public $photo_3;
    public $description_photo_1;
    public $description_photo_2;
    public $description_photo_3;
    public $parcours;
    public $date_publication;
    public $logo;
    
    public $un_porteur;
    public $un_secteur;
    
    
    public function __construct($id_projet, $nom_projet, $siren, $nic, $check_digit_siret, $description_projet, $id_utilisateur, 
        $id_secteur_projet, $site_web, $photo_1, $photo_2, $photo_3, $description_photo_1, $description_photo_2, $description_photo_3, 
        $parcours, $date_publication, $logo){
        $this->id_projet = $id_projet;
        $this->nom_projet = $nom_projet;
        $this->siren = $siren;
        $this->nic = $nic;
		$this->check_digit_siret = $check_digit_siret;
		$this->description_projet = $description_projet;
        $this->id_utilisateur = $id_utilisateur;
        $this->id_secteur_projet = $id_secteur_projet;
        $this->site_web = $site_web;
        $this->photo_1 = $photo_1;
        $this->photo_2 = $photo_2;
        $this->photo_3 = $photo_3;
        $this->description_photo_1 = $description_photo_1;
        $this->description_photo_2 = $description_photo_2;
        $this->description_photo_3 = $description_photo_3;
        $this->parcours = $parcours;
        $this->date_publication = $date_publication;
        $this->logo = $logo;
    }
 

}

?>