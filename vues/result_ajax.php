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

	switch($_REQUEST['action']))
	{
		case 'adresses':
		{
			$id_commune = $_REQUEST['id_commune'];
			$result = array();
			$desAdresses = $db->getAdressesByCommune($id_commune);
			var_dump(desAdresses);
			foreach ($desAdresses as $uneAdresse)
			{
				//array_push($result, array($uneAdresse->id_adresse, $uneAdresse->rue1_adresse, $uneAdresse->rue2_adresse));
				echo "<option value='".$uneAdresse->id_adresse."'>".$uneAdresse->rue1_adresse." ".$uneAdresse->rue2_adresse."</option>";
			}
		}
	}
?>