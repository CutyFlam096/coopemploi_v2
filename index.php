<?php
session_start();
require_once ('smarty-3.1.30/libs/Smarty.class.php');
require_once('models/bdd.php');

$smarty = new Smarty();
$db = new Bdd('mysql:host=localhost', 'dbname=smarty', 'root', '');

// //$action = $_REQUEST['action'];
if(!isset($_REQUEST['controller']))
{
    $controller = 'reunion';
    $_REQUEST['action'] = 'voir';
    
}
else
{$controller = $_REQUEST['controller'];}

$smarty->assign('title',"COOP'EMPLOI");

if(isset($_SESSION['compte']))
{$smarty->assign('utilisateur', (array)$_SESSION['compte'] );}

$entete = $smarty->display('vues/v_entete.tpl');
$navigation = $smarty->display('vues/v_navigation.tpl');

switch($controller)
{
    case ('reunion'):
        {include("controllers/c_reunion.php");break;}
    case ('connection'):
        {include("controllers/c_connection.php");break;}
}

$pied = $smarty->display('vues/v_pied.tpl');
?>