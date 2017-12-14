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
        $req = Bdd::$connection->prepare("SELECT * FROM utilisateur WHERE login=:login");
        $req->execute(array('login' => $login));
        $utilisateur = $req->fetch(PDO::FETCH_ASSOC);
        
        if ($req->rowCount() == 0)
        {return false;}
        else
        {
            echo 'hey';
            
            $mdpBDD = $utilisateur['mdp'];
            var_dump($mdpBDD);
            if (password_verify($mdp, $mdpBDD))
            {
                $_SESSION['compte'] = new Utilisateur($utilisateur['nom'], $utilisateur['prenom'], $utilisateur['adresse'], $utilisateur['mail'], $utilisateur['tel'], $utilisateur['codepostal'], $utilisateur['ville'], $utilisateur['mdp'], $utilisateur['login']);
                return true;
            }
            else
            {return false;}
        }
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
        $unUtil = new Utilisateur($result['id_utilisateur'], $result['nom_utilisateur'], $result['prenom_utilisateur'], $result['date_naissance_utilisateur'], $result['actif'], $result['telephone_utilisateur'], $result['email_utilisateur'], $result['H_F'], $result['nom_profil_utilisateur'], $result['mdp_profil_utilisateur'], $result['type_utilisateur'], $result['id_adresse'], $result['id_projet'], $result['id_type_profil'], $result['emargement'], $result['id_reunion'], $result['id_coop'], $result['id_statut']);
        return $unUtil; 
    }
    
    public function getLieuId($unId)
    {
        $req = Bdd::$connection->prepare(
            "SELECT *
            FROM lieu where id_lieu = ".$unId);
        
        $req->execute();
        $result = $req->fetch(PDO::FETCH_BOTH);
        $unLieu = new Lieu($result['id_lieu'], $result['designation_lieu'], $result['place_lieu'], $result['id_adresse']);
        return $unLieu;
    }
}
?>