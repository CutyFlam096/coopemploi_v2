<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'gerer':
        {
            $smarty->assign('secteurs', $db->getAllSecteurs());
            
            if ($db->verifProjet($_SESSION['compte']->id_utilisateur) == false)
            {
                $smarty->display("vues/projet/v_projet_creer.tpl");
            }
            else 
            {
                $db->getProjetIdUtil($_SESSION['compte']->id_utilisateur);
                
                $un_projet = $db->getProjetIdUtil($_SESSION['compte']->id_utilisateur);
                $smarty->assign('un_projet', $un_projet);
                
                $smarty->display("vues/projet/v_projet_modifier.tpl");
            }
            
            
            break;
        }
    case 'mini_site':
        {
            $smarty->display("vues/projet/v_mini_site.tpl");break;
            break;
        }
    case 'validate_create':
        { 
            $img1 = addslashes(file_get_contents($_FILES['photo_1']['tmp_name']));
            $img2 = addslashes(file_get_contents($_FILES['photo_2']['tmp_name']));
            $img3 = addslashes(file_get_contents($_FILES['photo_3']['tmp_name']));
            $logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));

            $db->setProjet($_REQUEST['nom'], $_REQUEST['siren'], $_REQUEST['nic'], 
                $_REQUEST['description'] ,intval($_REQUEST['secteur']), 
                $_REQUEST['site'], $logo, $_REQUEST['raison'], $img1, $img2, 
                $img3, $_REQUEST['description_photo_1'], 
                $_REQUEST['description_photo_2'], 
                $_REQUEST['description_photo_3'], $_REQUEST['parcours'] 
                );
            
            break;
        }
    case 'validate_update':
        {
            $img1 = addslashes(file_get_contents($_FILES['photo_1']['tmp_name']));
            $img2 = addslashes(file_get_contents($_FILES['photo_2']['tmp_name']));
            $img3 = addslashes(file_get_contents($_FILES['photo_3']['tmp_name']));
            $logo = addslashes(file_get_contents($_FILES['logo']['tmp_name']));
            
            $db->updateProjet($_REQUEST['nom'], $_REQUEST['siren'], $_REQUEST['nic'],
                $_REQUEST['description'] ,intval($_REQUEST['secteur']),
                $_REQUEST['site'], $logo, $_REQUEST['raison'], $img1, $img2,
                $img3, $_REQUEST['description_photo_1'],
                $_REQUEST['description_photo_2'],
                $_REQUEST['description_photo_3'], $_REQUEST['parcours']
                );
            
            break;
        }
}
?>