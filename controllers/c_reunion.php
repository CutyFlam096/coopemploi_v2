<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'voir':
    {
        $desReunions = $db->getAllReunions();
        $smarty->assign('reunions', $desReunions);
        
        $smarty->display("vues/reunion/v_voir_reunion.tpl");break;
        break;
    }
    case 'suppression':
    {
		$id_reunion = $_REQUEST['id_reunion'];
        $db->deleteReunion($id_reunion);
		
		$desReunions = $db->getAllReunions();
        $smarty->assign('reunions', $desReunions);
        $smarty->display("vues/reunion/v_voir_reunion.tpl");break;
        break;
    }
    case 'modification':
    {
		$id_reunion = $_REQUEST['id_reunion'];
		$uneReunion = $db->getReunionId($id_reunion);
        
		$unLieu = $uneReunion->un_lieu;
		$uneAdresse = $db->getAdresseId($unLieu->id_adresse);
		$uneCommune = $db->getCommuneId($uneAdresse->id_code_commune);
		
		$desLieux = $db->getLieuxByAdresse($uneAdresse->id_adresse);
		$desAdresses = $db->getAdressesByCommune($uneCommune->id_code_commune);
		$desCommunes = $db->getCommunes();
		
		list ($date_debut, $hm_deb) = explode(" ", $uneReunion-> date_heure_debut_reunion);
		list ($date_fin, $hm_fin) = explode(" ", $uneReunion-> date_heure_fin_reunion);
		list ($h_debut, $m_debut, $s_debut) = explode(":", $hm_deb);
		list ($h_fin, $m_fin, $s_fin) = explode(":", $hm_fin);
		
		$smarty->assign('une_reunion', $uneReunion);
		
        $smarty->assign('des_communes', $desCommunes);
		$smarty->assign('une_commune', $uneCommune);
		$smarty->assign('des_adresses', $desAdresses);
		$smarty->assign('une_adresse', $uneAdresse);
		$smarty->assign('des_lieux', $desLieux);
		$smarty->assign('un_lieu', $unLieu);
		
		$smarty->assign('date_deb', $date_debut);
		$smarty->assign('date_fin', $date_fin);
		$smarty->assign('h_deb', $h_debut);
		$smarty->assign('h_fin', $h_fin);
		$smarty->assign('m_deb', $m_debut);
		$smarty->assign('m_fin', $m_fin);
		
        $smarty->display("vues/reunion/v_modification_reunion.tpl");break;
        break;
    }
	case 'validate_modification':
	{
		$idReunion = $_REQUEST['id_reunion']; 
		$date_deb = $_REQUEST['deb_reunion']; 
		list($year_deb, $month_deb, $day_deb) = explode('-', $date_deb);
		$date_fin = $_REQUEST['fin_reunion'];
		list($year_fin, $month_fin, $day_fin) = explode('-', $date_fin);
		
		$datetimedeb = $year_deb."-".$month_deb."-".$day_deb." ".$_REQUEST['m_deb_reunion'].":".$_REQUEST['h_deb_reunion'].":00";
		$datetimefin = $year_fin."-".$month_fin."-".$day_fin." ".$_REQUEST['m_fin_reunion'].":".$_REQUEST['h_fin_reunion'].":00";
		
		$id_lieu = $_REQUEST['select_lieu'];
		$db->updateReunion($idReunion, $datetimedeb, $datetimefin, $id_lieu);
		break;
	}
	case 'creation':
    {
        $desCommunes = $db->getCommunes();
		//$desAdresses = $db->getAdresse();
		//$desLieux = $db->getLieu();
		
        $smarty->assign('communes', $desCommunes);
		//$smarty->assign('adresses', $desAdresses);
		//$smarty->assign('lieux', $desLieux);
		
        $smarty->display("vues/reunion/v_creer_reunion.tpl");
        break;
    }
	case 'validate_creation':
	{
		$date_deb = $_REQUEST['deb_reunion']; 
		list($year_deb, $month_deb, $day_deb) = explode('-', $date_deb);
		$date_fin = $_REQUEST['fin_reunion'];
		list($year_fin, $month_fin, $day_fin) = explode('-', $date_fin);
		
		$datetimedeb = $year_deb."-".$month_deb."-".$day_deb." ".$_REQUEST['m_deb_reunion'].":".$_REQUEST['h_deb_reunion'].":00";
		$datetimefin = $year_fin."-".$month_fin."-".$day_fin." ".$_REQUEST['m_fin_reunion'].":".$_REQUEST['h_fin_reunion'].":00";
		
		$createur = $_SESSION['compte']->id_utilisateur;
		$id_lieu = $_REQUEST['select_lieu'];
		$db->setReunion($datetimedeb, $datetimefin, $createur, $id_lieu);
		break;
	}
	/*
	case 'get_adresses':
	{
		$id_commune = $_REQUEST['id_commune'];
		$result = array();
		$desAdresses = $db->getAdressesByCommune($id_commune);
		
		foreach ($desAdresses as $uneAdresse)
		{
			echo "<option value='".$uneAdresse->id_adresse."'>".$uneAdresse->rue1_adresse." ".$uneAdresse->rue2_adresse."</option>";
		}
	}
	*/
}
?>