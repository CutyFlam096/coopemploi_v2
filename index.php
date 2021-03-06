<?php
require_once ('autoload.php');
session_start();

$smarty = new Smarty();
$smarty->assign('title',"COOP'EMPLOI");
 
$db = new Bdd('mysql:host=localhost', 'dbname=coop_emploi', 'root', '');

// //$action = $_REQUEST['action'];
if(!isset($_REQUEST['controller']))
{
    $controller = 'reunion';
    $_REQUEST['action'] = 'voir';
}
else
{$controller = $_REQUEST['controller'];}

if(isset($_SESSION['compte']))
{$smarty->assign('utilisateur',$_SESSION['compte'] );}
 
if (!isset($_REQUEST['action']) || $_REQUEST['action'] != 'mini_site')
{
    $entete = $smarty->display('vues/v_entete.tpl');
    $navigation = $smarty->display('vues/v_navigation.tpl');
}

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
    case 'porteur':
    {
        include('controllers/c_porteur.php');
        break;
    }
    case 'projet':
    {
        include('controllers/c_projet.php');
        break;
    }
    case 'faq':
    {
        include('controllers/c_faq.php');
        break;
    }
    case 'contact':
    {
        include('controllers/c_contact.php');
        break;
    }
}

if (!isset($_REQUEST['action']) || $_REQUEST['action'] != 'mini_site')
{
    $pied = $smarty->display('vues/v_pied.tpl');
}
?>