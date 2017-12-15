<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'gerer':
    {
        //recuperer els reunions, les attribuer a smarty
        $desProfils = $db->getUtilisateurs();
        $smarty->assign('profil', $desProfils);
        
        $smarty->display("vues/conseiller/v_gerer_profil.tpl");break;
        break;
    }
    case 'modifier':
   {   
        $desProfils = $db->getUtilisateursId($_REQUEST['id_utilisateur']);
        $smarty->assign('modif', $desProfils);
        $smarty->assign('id_utilisateur', $_REQUEST['id_utilisateur']);
        $smarty->display("vues/conseiller/v_modifier_profil.tpl");break;
        break;
    }
}
?>