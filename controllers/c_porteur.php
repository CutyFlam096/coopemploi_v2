<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'voir':
    {
        //recuperer els reunions, les attribuer a smarty
        $desProjets = $db->getAllProjets();
        $smarty->assign('projet', $desProjets);
        
        $smarty->display("vues/porteur/v_voir_porteur.tpl");break;
        break;
    }
    case 'afficher':
    {
        $smarty->assign('id_projet', $_REQUEST['id_projet']);
        $smarty->display("vues/porteur/v_afficher_projet.tpl");break;
        break;
    }
}
?>