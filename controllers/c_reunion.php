<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'voir':
    {
        //recuperer els reunions, les attribuer a smarty
        $desReunions = $db->getReunionsAVenir();
        $smarty->assign('reunions', $desReunions);
        
        $smarty->display("vues/reunion/v_voir_reunion.tpl");break;
        break;
    }
    case 'inscription':
    {
        $desCommunes = $db->getCommunes();
        $smarty->assign('communes', $desCommunes);
        
        $smarty->assign('id_reunion', $_REQUEST['id_reunion']);
        $smarty->display("vues/reunion/v_inscription_reunion.tpl");break;
        break;
    }
    case 'valider_inscription':
    {
           $db->setInscription($_REQUEST["nom"], $_REQUEST["prenom"], $_REQUEST["date"], $_REQUEST["telephone"], $_REQUEST["mail"], $_REQUEST["id_reunion"], $_REQUEST["commune"], $_REQUEST["adresse"], $_REQUEST["complement_adresse"]);
//         
           $smarty->display("vues/reunion/v_valider_inscription.tpl");break;
           $smarty->assign('ok', $_REQUEST['id_reunion']);
//         $smarty->display("vues/reunion/v_inscription_reunion.tpl");
//         break;
    }
}
?>