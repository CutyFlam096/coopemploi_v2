<?php
class Utilisateur
{
    public $id_utilisateur;
    public $nom_utilisateur;
    public $prenom_utilisateur;
    public $date_naissance_utilisateur;
    public $telephone_utilisateur;
    public $email_utilisateur;
    public $nom_profil_utilisateur;
    public $mdp_profil_utilisateur;
    public $type_utilisateur;
    public $id_adresse;
    public $id_projet;
    public $id_type_profil;
    public $emargement;
    public $id_reunion;
    public $id_coop;
    public $id_statut;
    
    public $unTypeUtilisateur;
    public $uneAdresse;
    public $reunionOrgannise;
    public $reunionParticipe;
    public $unStatut;
    
    public function __construct($id_utilisateur, $nom_utilisateur, $prenom_utilisateur, $date_naissance_utilisateur, $telephone_utilisateur, $email_utilisateur, $nom_profil_utilisateur, $mdp_profil_utilisateur, $type_utilisateur, $id_adresse, $id_projet, $id_type_profil, $emargement, $id_reunion, $id_coop, $id_statut)
    {
        $this->id_utilisateur = $nom_utilisateur;
        $this->nom_utilisateur = $nom_utilisateur;
        $this->prenom_utilisateur = $prenom_utilisateur;
        $this->date_naissance_utilisateur = $date_naissance_utilisateur;
        $this->telephone_utilisateur = $telephone_utilisateur;
        $this->email_utilisateur = $email_utilisateur;
        $this->nom_profil_utilisateur = $nom_profil_utilisateur;
        $this->mdp_profil_utilisateur = $mdp_profil_utilisateur;
        $this->type_utilisateur = $type_utilisateur;
        $this->id_adresse = $id_adresse;
        $this->id_projet = $id_projet;
        $this->id_type_profil = $id_type_profil;
        $this->emargement = $emargement;
        $this->id_reunion = $id_reunion;
        $this->id_coop = $id_coop;
        $this->id_statut = $id_statut;
    }
}

?>