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
        {
            echo 'Connexion impossible';
            //aller sur une vue erreur de connexion 
        }
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
            FROM utilisateur where id_utilisateur = ".$unId);
        
        $req->execute();
        $result = $req->fetch(PDO::FETCH_BOTH);
        $unUtil = new Utilisateur($result['id_utilisateur'], $result['nom_utilisateur'], $result['prenom_utilisateur'], $result['date_naissance_utilisateur'], $result['telephone_utilisateur'], $result['email_utilisateur'], $result['nom_profil_utilisateur'], $result['mdp_profil_utilisateur'], $result['type_utilisateur'], $result['id_adresse'], $result['id_projet'], $result['id_type_profil'], $result['emargement'], $result['id_reunion'], $result['id_coop'], $result['id_statut']);
        $unUtil->une_adresse = Bdd::getAdresseId($result['id_adresse']);
        return $unUtil; 
    }
    
    public function _destruct()
    {
        Bdd::$connection = null;
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
    
    public function getReunionsAVenir()
    {
        $req = Bdd::$connection->prepare(
        "SELECT * 
        FROM reunion_information");
        $req->execute();
        
        $desReunions = array();
        
        while ($donnees = $req->fetch())
        {
           $une_reunion = new Reunion($donnees['id_reunion'], $donnees['date_heure_debut_reunion'], $donnees['date_heure_fin_reunion'], $donnees['id_lieu'], $donnees['id_utilisateur']);
           $une_reunion->un_organisateur = Bdd::getPersonneId($donnees['id_utilisateur']);
           $une_reunion->un_lieu = Bdd::getLieuId($donnees['id_lieu']);
           array_push($desReunions, $une_reunion);
        }
        return $desReunions;
    }
    
    public function getPersonneId($unId)
    {
        $req = Bdd::$connection->prepare(
            "SELECT *
            FROM utilisateur where id_utilisateur = ".$unId);
        
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
            FROM lieu where id_lieu = :lieu");
        
        $req->execute(array(':lieu' => $unId));
        $result = $req->fetch(PDO::FETCH_BOTH);
        $unLieu = new Lieu($result['id_lieu'], $result['designation_lieu'], $result['place_lieu'], $result['id_adresse']);
        return $unLieu;
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

     public function getSecteurId($unId){

        $req = Bdd::$connection->prepare(
            "SELECT *
            FROM secteur_projet where id_secteur_projet = ".$unId);
        
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
            "SELECT * FROM adresse where id_adresse = :id");

        $req->execute(array(':id' => $unId));
        $result = $req->fetch(PDO::FETCH_BOTH);
        $uneadresse = new adresse($result['id_adresse'], $result['rue1_adresse'],$result['rue2_adresse'],$result['Id_code_commune']);
        //var_dump($uneadresse);
        
        return $uneadresse;
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
        $req = Bdd::$connection->prepare("SELECT * FROM projet where id_projet = :id");
        
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
       $req = Bdd::$connection->prepare("SELECT * FROM projet where id_utilisateur = :id");
       
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

}
?>