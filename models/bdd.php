<?php
class Bdd
{
    private static $connection;
    
    public function __construct($serveur, $bdd, $user, $mdp)
    {
        try
        {
            Bdd::$connection = new PDO($serveur.';'.$bdd, $user, $mdp);
            Bdd::$connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
            Bdd::$connection->query("SET CHARACTER SET utf8");
        }
        catch(PDOException $e)
        {echo 'Connexion impossible';}
    }
    
    public function getCompte($login, $mdp)
    {
        $req = Bdd::$connection->prepare("SELECT * FROM utilisateur WHERE nom_profil_utilisateur = :login");
        $req->execute(array(':login' => $login));
        $utilisateur = $req->fetch(PDO::FETCH_BOTH);
        
        if ($req->rowCount() == 0)
        {return false;}
        else
        {
            if (password_verify($mdp, $utilisateur['mdp_profil_utilisateur']))
            {
                $_SESSION['compte'] = new Utilisateur
                ($utilisateur['id_utilisateur'], $utilisateur['nom_utilisateur'], 
                    $utilisateur['prenom_utilisateur'], 
                    $utilisateur['date_naissance_utilisateur'], $utilisateur['telephone_utilisateur'], 
                    $utilisateur['email_utilisateur'], $utilisateur['nom_profil_utilisateur'], 
                    $utilisateur['mdp_profil_utilisateur'], $utilisateur['type_utilisateur'], $utilisateur['id_adresse'], 
                    $utilisateur['id_projet'], $utilisateur['id_type_profil'], $utilisateur['emargement'], $utilisateur['id_reunion'], 
                    $utilisateur['id_coop'], $utilisateur['id_statut']);
                
                return true;
            }
            else
            {return false;}
        }
        
        $req = Bdd::$connection->prepare(
            "SELECT *
            FROM utilisateur WHERE id_utilisateur = ".$unId);
        
        $req->execute();
        $result = $req->fetch(PDO::FETCH_BOTH);
        $unUtil = new Utilisateur($result['id_utilisateur'], $result['nom_utilisateur'], $result['prenom_utilisateur'], $result['date_naissance_utilisateur'], $result['telephone_utilisateur'], $result['email_utilisateur'], $result['nom_profil_utilisateur'], $result['mdp_profil_utilisateur'], $result['type_utilisateur'], $result['id_adresse'], $result['id_projet'], $result['id_type_profil'], $result['emargement'], $result['id_reunion'], $result['id_coop'], $result['id_statut']);
        $unUtil->une_adresse = Bdd::getAdresseId($result['id_adresse']);
        return $unUtil; 
    }
    
    public function _destruct()
    {Bdd::$connection = null;}
    
	public function setReunion($datetimedeb, $datetimefin, $createur, $lieu)
	{
		$req = Bdd::$connection->prepare(
            "INSERT INTO reunion_information(date_heure_debut_reunion, date_heure_fin_reunion, id_createur, id_lieu)
			Value(:deb, :fin, :createur, :lieu)");
			
		$req->execute(array(
			':deb' => $datetimedeb,
			':fin' => $datetimefin,
			':createur' => $createur,
			':lieu' => $lieu)
			);
	}
	
    public function setCompte($login, $nom, $prenom, $addr, $mail, $tel, $cp, $ville, $mdp)
    {
        $mdp = password_hash($mdp, PASSWORD_DEFAULT);
        $req = Bdd::$connection->prepare(
            "INSERT INTO utilisateur(nom, prenom, adresse, mail, tel, codepostal, ville, mdp, login)
		Value(:nom, :prenom, :addr, :mail, :tel, :codePostal, :ville, :mdp, :login)");
        
        $req->execute(array(
            ':login' => $login,
            ':nom' => $nom,
            ':prenom' => $prenom,
            ':addr' => $addr,
            ':mail' => $mail,
            ':tel' => $tel,
            ':codePostal' => $cp,
            ':ville' => $ville,
            ':mdp' => $mdp)
            );
        
        return true;
    }
	
	public function getReunionId($un_id)
	{
		$req = Bdd::$connection->prepare("SELECT * 
		FROM reunion_information 
		WHERE id_reunion = ".$un_id."
		AND archive = FALSE");
		
        $req->execute();
        $result = $req->fetch(PDO::FETCH_BOTH);
        $une_reunion = new Reunion($result['id_reunion'], $result['date_heure_debut_reunion'], $result['date_heure_fin_reunion'], $result['id_lieu'], $result['id_createur']);
        $une_reunion->un_organisateur = Bdd::getPersonneId($result['id_createur']);
        $une_reunion->un_lieu = Bdd::getLieuId($result['id_lieu']);
        return $une_reunion;
	}
	
    public function getReunionsAVenir()
    {
        $req = Bdd::$connection->prepare(
        "SELECT * 
        FROM reunion_information
		WHERE date_heure_debut_reunion > NOW()
		AND archive = FALSE");
        $req->execute();
        
        $desReunions = array();
        
        while ($donnees = $req->fetch())
        {
           $une_reunion = new Reunion($donnees['id_reunion'], $donnees['date_heure_debut_reunion'], $donnees['date_heure_fin_reunion'], $donnees['id_lieu'], $donnees['id_createur']);
           $une_reunion->un_organisateur = Bdd::getPersonneId($donnees['id_utilisateur']);
           $une_reunion->un_lieu = Bdd::getLieuId($donnees['id_lieu']);
           array_push($desReunions, $une_reunion);
        }
        return $desReunions;
    }
    
	public function getAllReunions()
	{
		$req = Bdd::$connection->prepare(
        "SELECT * 
        FROM reunion_information
		WHERE archive = FALSE");
        $req->execute();
        
        $desReunions = array();
        
        while ($donnees = $req->fetch())
        {
           $une_reunion = new Reunion($donnees['id_reunion'], $donnees['date_heure_debut_reunion'], $donnees['date_heure_fin_reunion'], $donnees['id_lieu'], $donnees['id_createur']);
           $une_reunion->un_organisateur = Bdd::getPersonneId($donnees['id_createur']);
           $une_reunion->un_lieu = Bdd::getLieuId($donnees['id_lieu']);
           array_push($desReunions, $une_reunion);
        }
        return $desReunions;
	}
	
	public function deleteReunion($unId)
	{
        $req = Bdd::$connection->prepare("UPDATE reunion_information 
		SET archive = TRUE 
		WHERE id_reunion = ".$unId);
		
        $req->execute();
	}
	
	public function updateReunion($idReunion, $datetimedeb, $datetimefin, $lieu)
	{
		$req = Bdd::$connection->prepare("UPDATE reunion_information 
		SET date_heure_debut_reunion = :date_debut,
		    date_heure_fin_reunion = :date_fin,
		    id_lieu = :lieu
		WHERE id_reunion = :id_reunion");
		
        $req->execute(array(
            ':date_debut' => $datetimedeb,
			':date_fin' => $datetimefin,
            ':lieu' => $lieu,
			':id_reunion' => $idReunion
        ));
	}
	
    public function getPersonneId($unId)
    {
        $req = Bdd::$connection->prepare("SELECT * FROM utilisateur WHERE id_utilisateur = ".$unId);
        $req->execute();
        $result = $req->fetch(PDO::FETCH_BOTH);
        $unUtil = new Utilisateur($result['id_utilisateur'], $result['nom_utilisateur'], $result['prenom_utilisateur'], $result['date_naissance_utilisateur'], $result['telephone_utilisateur'], $result['email_utilisateur'], $result['nom_profil_utilisateur'], $result['mdp_profil_utilisateur'], $result['type_utilisateur'], $result['id_adresse'], $result['id_projet'], $result['id_type_profil'], $result['emargement'], $result['id_reunion'], $result['id_coop'], $result['id_statut']);
        $unUtil->une_adresse = Bdd::getAdresseId($result['id_adresse']);
        return $unUtil; 
    }
    
    public function getLieuId($unId)
    {
        $req = Bdd::$connection->prepare(
            "SELECT *
            FROM lieu 
			WHERE id_lieu = :lieu");
        
        $req->execute(array(':lieu' => $unId));
        $result = $req->fetch(PDO::FETCH_BOTH);
        $unLieu = new Lieu($result['id_lieu'], $result['designation_lieu'], $result['place_lieu'], $result['id_adresse']);
        return $unLieu;
    }
    
	public function getLieux()
    {
        $req = Bdd::$connection->prepare("SELECT * FROM lieu");
        $req->execute();
        
        $desLieux = array();
        
        while ($donnees = $req->fetch())
        {
            $un_lieu = new Lieu($donnees['id_lieu'], $donnees['designation_lieu'], $donnees['place_lieu'], $donnees['id_adresse']);
            array_push($desLieux, $un_lieu);
        }
        return $desLieux;
    }
	
	public function getCommuneId($un_id)
    {
        $req = Bdd::$connection->prepare(
            "SELECT *
            FROM commune 
			WHERE Id_code_commune = :id_commune");
        
        $req->execute(array(':id_commune' => $un_id));
        $result = $req->fetch(PDO::FETCH_BOTH);
        $une_commune = new Commune($result['Id_code_commune'], $result['Code_commune_INSEE'], $result['Nom_commune'], $result['Code_postal']);
        return $une_commune;
    }
	
    public function getCommunes()
    {
        $req = Bdd::$connection->prepare("SELECT * FROM commune");
        $req->execute();
        
        $desCommunes = array();
        
        while ($donnees = $req->fetch())
        {
            $une_commune = new Commune($donnees['Id_code_commune'], $donnees['Code_commune_INSEE'], $donnees['Nom_commune'], $donnees['Code_postal']);
            array_push($desCommunes, $une_commune);
        }
        return $desCommunes;
    }
    
    public function setInscription($nom, $prenom, $date_naissance, $tel, $mail, $id_reunion, $id_commune, $addresse, $complement_adresse)
    {
        $req = Bdd::$connection->prepare(
            "INSERT INTO adresse (rue1_adresse, rue2_adresse, Id_code_commune)
            VALUES
            (:addr, :cpt_addr, :id_commune)");
        
        $req->execute(array(
            ':addr' => $addresse,
            ':cpt_addr' => $complement_adresse,
            ':id_commune' => $id_commune
        ));
        
        $id_adresse = Bdd::$connection->lastInsertId();
        
        $req = Bdd::$connection->prepare(
            "INSERT INTO utilisateur (id_statut, id_coop, nom_utilisateur, id_type_profil, prenom_utilisateur, id_adresse, date_naissance_utilisateur, telephone_utilisateur, email_utilisateur, id_reunion)
            VALUES
            (:statut, :coop, :nom, :type, :prenom, :addr,  :date, :tel, :mail, :reu)");
        
        $req->execute(array(
            ':statut' => 3,
            ':coop' => 1,
            ':nom' => $nom,
            ':type' => 1,
            ':prenom' => $prenom,
            ':addr' => $id_adresse,
            ':date' => date("Y-m-d", strtotime($date_naissance)),
            ':tel' => $tel,
            ':mail' => $mail,
            ':reu' => $id_reunion
        ));
    }
    
    public function setProjet($nom, $siren, $nic, $desc, $secteur, $web, $logo, $rs, $p1, $p2, $p3, $d1, $d2, $d3, $parcours)
    {
        $req = Bdd::$connection->prepare(
            "INSERT INTO projet (nom_projet, SIREN, NIC, description_projet, id_utilisateur,id_secteur_projet, site_web, logo, raison_social, photo_1, photo_2, photo_3, description_photo_1, description_photo_2, description_photo_3, parcours, date_publication)
            VALUES
            (:nom, :siren, :nic, :desc, :util, :secteur, :web, :logo, :raisonsocial, :p1, :p2, :p3, :d1, :d2, :d3, :parcours, :date_publi)");
        
        $req->execute(array(
            ':nom' => $nom,
            ':siren' => $siren,
            ':nic' => $nic,
            ':desc' => $desc,
            ':util' => $_SESSION['compte']->id_utilisateur,
            ':secteur' => $secteur,
            ':web' => $web,
            ':logo' => $logo,
            ':raisonsocial' => $rs,
            ':p1' => $p1,
            ':p2' => $p2,
            ':p3' => $p3,
            ':d1' => $d1,
            ':d2' => $d2,
            ':d3' => $d3,
            ':parcours' => $parcours,
            ':date_publi' => date("Y-m-d")
        ));
    }
    
     public function getSecteurId($unId){

        $req = Bdd::$connection->prepare(
            "SELECT *
            FROM secteur_projet 
			WHERE id_secteur_projet = ".$unId);
        
        $req->execute();
        $result = $req->fetch(PDO::FETCH_BOTH);
        $unsecteur = new secteur($result['id_secteur_projet'], $result['designation_secteur_projet']);
        return $unsecteur; 
    }
    
    public function getAllSecteurs(){
        $req = Bdd::$connection->prepare("SELECT * FROM secteur_projet");
        $req->execute();
        $des_secteurs = array();
        while ($secteur = $req->fetch())
        {
            $un_secteur = new Secteur($secteur['id_secteur_projet'], $secteur['designation_secteur_projet']);
            array_push($des_secteurs, $un_secteur);
        }
        return $des_secteurs;
    }
    
    public function getAdresseId($unId){
          $req = Bdd::$connection->prepare(
            "SELECT * 
			FROM adresse 
			WHERE id_adresse = :id");
        $req->execute(array(':id' => $unId));
        $result = $req->fetch(PDO::FETCH_BOTH);
		
        $uneadresse = new adresse($result['id_adresse'], $result['rue1_adresse'],$result['rue2_adresse'],$result['Id_code_commune']);
        //var_dump($uneadresse);
        
        return $uneadresse;
    }
	
	public function getAdresses()
	{   
        $req = Bdd::$connection->prepare("SELECT * FROM adresse");
        $desAdresses = array();
        
        while ($result = $req->fetch())
        {
			$une_adresse = new adresse($result['id_adresse'],$result['rue1_adresse'],$result['rue2_adresse'],$result['Id_code_commune']);
		    array_push($desAdresses, $une_adresse);
        }
		
        return $desAdresses; 
    }
	
    public function getAdressesByCommune($unId)
	{   
        $req = Bdd::$connection->prepare("SELECT * FROM adresse WHERE id_code_commune = :id_commune");
        $req->execute(array(':id_commune' => $unId));
        $desAdresses = array();
        
        while ($result = $req->fetch())
        {
			$une_adresse = new adresse($result['id_adresse'],$result['rue1_adresse'],$result['rue2_adresse'],$result['Id_code_commune']);
		    array_push($desAdresses, $une_adresse);
        }
		
        return $desAdresses; 
    }
	
	public function getLieuxByAdresse ($unId)
	{
		$req = Bdd::$connection->prepare("SELECT * FROM lieu WHERE id_adresse = :id_adresse");
        $req->execute(array(':id_adresse' => $unId));
        $desLieux = array();
        
        while ($result = $req->fetch())
        {
			$un_lieu = new lieu($result['id_lieu'],$result['designation_lieu'],$result['place_lieu'],$result['id_adresse']);
		    array_push($desLieux, $un_lieu);
        }
		
        return $desLieux; 
	}
	
	
    public function getAllPorteurs(){
        $req = Bdd::$connection->prepare("SELECT * FROM projet");
        $req->execute();
        $desPorteurs = array();
        
        while ($result = $req->fetch())
        {
            //faire le porteur de projet par rapport a l'id util du projet
            //faire le secteur
            //faire le projet et lui ajouter porteur et secteur
            //ajouter le projet dans les projets

            $un_projet = new Projet($result['id_projet'], $result['nom_projet'], $result['SIREN'], $result['NIC'],
                $result['check_digit_SIRET'], $result['description_projet'], $result['id_utilisateur'],
                $result['id_secteur_projet'], $result['site_web'], $result['photo_1'], $result['photo_2'],
                $result['photo_3'], $result['description_photo_1'], $result['description_photo_2'],
                $result['description_photo_3'], $result['parcours'], $result['date_publication'], $result['logo']);
            $un_projet->un_porteur = Bdd::getPersonneId($result['id_utilisateur']);
            $un_projet->un_secteur = Bdd::getSecteurId($result['id_secteur_projet']);
           array_push($desPorteurs, $un_projet);
        }
        //var_dump($desProjets);
        return $desPorteurs; 
    }

    public function getProjetId($unId){
        $req = Bdd::$connection->prepare("SELECT * FROM projet WHERE id_projet = :id");
        
        $req->execute(array(':id' => $unId));
        $result = $req->fetch(PDO::FETCH_BOTH);
        
        $un_projet = new Projet($result['id_projet'], $result['nom_projet'], $result['SIREN'], $result['NIC'],
            $result['check_digit_SIRET'], $result['description_projet'], $result['id_utilisateur'],
            $result['id_secteur_projet'], $result['site_web'], $result['photo_1'], $result['photo_2'],
            $result['photo_3'], $result['description_photo_1'], $result['description_photo_2'],
            $result['description_photo_3'], $result['parcours'], $result['date_publication'], $result['logo']);
        $un_projet->un_porteur = Bdd::getPersonneId($result['id_utilisateur']);
        $un_projet->un_secteur = Bdd::getSecteurId($result['id_secteur_projet']);
        //var_dump($uneadresse);
        
        return $un_projet;
   }

   public function getProjetIdUtil($unId){
       $req = Bdd::$connection->prepare("SELECT * FROM projet WHERE id_utilisateur = :id");
       
       $req->execute(array(':id' => $unId));
       $result = $req->fetch(PDO::FETCH_BOTH);
       
       $un_projet = new Projet($result['id_projet'], $result['nom_projet'], $result['SIREN'], $result['NIC'],
           $result['check_digit_SIRET'], $result['description_projet'], $result['id_utilisateur'],
           $result['id_secteur_projet'], $result['site_web'], $result['photo_1'], $result['photo_2'],
           $result['photo_3'], $result['description_photo_1'], $result['description_photo_2'],
           $result['description_photo_3'], $result['parcours'], $result['date_publication'], $result['logo']);
		   
       $un_projet->un_porteur = Bdd::getPersonneId($result['id_utilisateur']);
       $un_projet->un_secteur = Bdd::getSecteurId($result['id_secteur_projet']);
       //var_dump($uneadresse);
       
       return $un_projet;
   }
   
   public function verifProjet($unId)
   {
       $req = Bdd::$connection->prepare("SELECT * FROM projet WHERE id_utilisateur = :id");
       $req->execute(array(':id' => $unId));
       $res = $req->fetchAll();
       
       if (count($res) == 0)
       {
           return false;}
       else 
       {
           return true;}
   }
}
?>