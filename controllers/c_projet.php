<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'gerer':
        {
            $smarty->assign('secteurs', $db->getAllSecteurs());
            $smarty->assign('un_projet', $db->getProjetIdUtil($_SESSION['compte']->id_utilisateur));
            if ($db->getProjetIdUtil($_SESSION['compte']->id_utilisateur) != null)
            {$smarty->assign('action_sql', 'update');}
            else
            {$smarty->assign('action_sql', 'insert');}
            
            $smarty->display("vues/projet/v_projet_gerer.tpl");break;
            break;
        }
    case 'mini_site':
        {
            //mini site
//             $_REQUEST['id_projet'];
            $smarty->display("vues/projet/v_mini_site.tpl");break;
            break;
        }
}
?>