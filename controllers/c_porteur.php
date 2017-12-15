<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'voir':
    {
        //recuperer els reunions, les attribuer a smarty
        $desPorteurs = $db->getAllPorteurs();
        $smarty->assign('porteur', $desPorteurs);
        $smarty->display("vues/porteur/v_voir_porteur.tpl");break;
        break;
    }
    case 'afficher':
    {   
        $desProjets = $db->getProjetId($_REQUEST['id_projet']);
        
         $smarty->assign('projet', $desProjets);
        $smarty->assign('id_projet', $_REQUEST['id_projet']);
        $smarty->display("vues/porteur/v_afficher_projet.tpl");break;
        break;
    }
}
?>