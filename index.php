<?php
session_start();
require_once ('autoload.php');

$smarty = new Smarty();
$db = new Bdd('mysql:host=localhost', 'dbname=coop_emploi', 'root', '');

// //$action = $_REQUEST['action'];
if(!isset($_REQUEST['controller']))
{
    $controller = 'reunion';
    $_REQUEST['action'] = 'voir';
}
else
{$controller = $_REQUEST['controller'];}

$smarty->assign('title','Smarty');

// $_SESSION['compte'] = new Utilisateur('Fouque', 'Patrice', '3 rue de la boustifaille', 'fouquepatrice@mail.com', '0606060606', '45200', 'Orl�ans', 'PatriceMdp', 'SuperPatou');
// $_SESSION['nom'] = 'Fouque';
// $_SESSION['prenom'] = 'Patrice';
// $_SESSION['adresse'] = '3 rue de la boustifaille';
// $_SESSION['mail'] = 'fouquepatrice@mail.com';
// $_SESSION['tel'] = '0606060606';
// $_SESSION['codepostal'] = '45200';
// $_SESSION['ville'] = 'Orl�ans';
// $_SESSION['mdp'] = 'PatriceMdp';
// $_SESSION['login'] = 'SuperPatou';
// $_SESSION['id_type_utilisateur'] = 1;

if(isset($_SESSION['compte']))
{$smarty->assign('utilisateur', (array)$_SESSION['compte'] );}

$entete = $smarty->display('vues/v_entete.tpl');
$navigation = $smarty->display('vues/v_navigation.tpl');

switch($controller)
{
    case 'reunion':
    {
        include('controllers/c_reunion.php');
        break;
    }
    case 'connection':
    {
        include('controllers/c_connection.php');
        break;
    }
}
$pied = $smarty->display('vues/v_pied.tpl');
?>