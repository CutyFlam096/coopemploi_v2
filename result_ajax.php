<?php
	require_once ('smarty-3.1.30/libs/Smarty.class.php');
	require_once('models/type_profil.php');
	require_once('models/secteur.php');
	require_once('models/commune.php');
	require_once('models/adresse.php');
	require_once('models/coop_emploi.php');
	require_once('models/lieu.php');
	require_once('models/projet.php');
	require_once('models/utilisateur.php');
	require_once('models/reunion.php');
	require_once('models/entretien.php');
	require_once('models/projet.php');
	require_once('models/bdd.php');
	
	$db = new Bdd('mysql:host=localhost', 'dbname=coop_emploi', 'root', '');
	
	$result = "";
	
	$action = $_GET["action"];
	//$action = 'liste_adresses';
	switch($action)
	{
		case 'liste_adresses':
		{
			$desAdresses = $db->getAdressesByCommune((int) $_GET["id_commune"]);
			foreach ($desAdresses as $uneAdresse)
			{
				$result .= "<option value='".$uneAdresse->id_adresse."'>".$uneAdresse->rue1_adresse." ".$uneAdresse->rue2_adresse."</option>";
			
			}
		}
		case 'liste_lieux':
		{
			$desLieux = $db->getLieuxByAdresse((int) $_GET["id_adresse"]);
			
			foreach ($desLieux as $unLieu)
			{
				$result .= "<option value='".$unLieu->id_lieu."'>".$unLieu->designation_lieu." - ".$unLieu->place_lieu." places </option>";
			}
		}
	}
	
	echo $result;
?>