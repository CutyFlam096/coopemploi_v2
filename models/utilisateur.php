<?php
class Utilisateur
{
    public $id_utilisateur;
    public $nom;
    public $prenom;
    public $date_naissance;
    public $actif;
    public $tel;
    public $mail;
    public $sexe;
    public $nom_profil;
    public $mdp_profil;
    public $type_util;
    public $id_adresse;
    public $id_projet;
    public $id_type_profil;
    public $emargement;
    public $id_reunion;
    public $id_coop;
    public $id_status;
    
    public $unTypeUtilisateur;
    public $uneAdresse;
    public $reunionOrgannise;
    public $reunionParticipe;
    public $unStatut;
    
    public function __construct($id_utilisateur, $nom, $prenom, $date_naissance, $actif, $tel, $mail, $sexe, $nom_profil, $mdp_profil, $type_util, $id_adresse, $id_projet, $id_type_profil, $emargement, $id_reunion, $id_coop, $id_status){
        $this->id_utilisateur = $id_utilisateur;
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->date_naissance = $date_naissance;
        $this->actif = $actif;
        $this->tel = $tel;
        $this->mail = $mail;
        $this->sexe = $sexe;
        $this->nom_profil = $nom_profil;
        $this->mdp_profil = $mdp_profil;
        $this->type_util = $type_util;
        $this->id_adresse = $id_adresse;
        $this->id_projet = $id_projet;
        $this->id_type_profil = $id_type_profil;
        $this->emargement = $emargement;
        $this->id_reunion = $id_reunion;
        $this->id_coop = $id_coop;
        $this->id_status = $id_status;
    }
}

?>