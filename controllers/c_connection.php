<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'form-connection':
        {
            $smarty->display("vues/connection/v_form_connection.tpl");break;
            break;
        }
    case 'deconnection':
        {
            unset($_SESSION['compte']);
            header("location: index.php");
            break;
        }
    case 'verif-connection':
        {
            $login= $_REQUEST['login'];
            $mdp=$_REQUEST['mdp'];
            
            var_dump($login);
            var_dump($mdp);
            
            $recup = $db->getCompte($login, $mdp);
                        
            if ($recup)
            {$smarty->display("vues/connection/v_valide_connection_compte.tpl");}
            else
            {$smarty->display("vues/connection/v_erreur_connection_compte.tpl");}
            
            break;
        }
    case 'form-inscription':
        {
            $smarty->display("vues/connection/v_form_inscription.tpl");break;
            break;
        }
    case 'inscription':
        {
            $login = $_REQUEST['login'];
            $nom = $_REQUEST['nom'];
            $prenom = $_REQUEST['prenom'];
            $addr = $_REQUEST['adresse'];
            $mail = $_REQUEST['mail'];
            $tel = $_REQUEST['tel'];
            $cp = $_REQUEST['code_postal'];
            $ville = $_REQUEST['ville'];
            $mdp = $_REQUEST['mdp'];
            $mdp2 = $_REQUEST['mdp2'];
            
            $creation = $db->setCompte($login, $nom, $prenom, $addr, $mail, $tel, $cp, $ville, $mdp);
           
            if ($creation)
            {header("location: index.php");}  
            else 
            {$smarty->display("vues/connection/v_erreur_creation_compte.tpl");}

            break;
        }
    }
?>