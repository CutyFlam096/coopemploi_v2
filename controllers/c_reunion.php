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
        $smarty->assign('id_reunion', $_REQUEST['id_reunion']);
        $smarty->display("vues/reunion/v_inscription_reunion.tpl");break;
        break;
    }
}
?>