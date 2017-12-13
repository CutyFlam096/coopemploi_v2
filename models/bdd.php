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
}
?>