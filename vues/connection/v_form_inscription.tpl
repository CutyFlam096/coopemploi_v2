<div class='form-group'>
	<form method='POST' action='index.php?controller=connection&action=inscription'>
		<label for='login'>Login</label>
		<input name='login' id='login' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='nom'>Nom</label>
		<input name='nom' id='nom' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='prenom'>Prénom</label>
		<input name='prenom' id='prenom' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='adresse'>Adresse</label>
		<input name='adresse' id='adresse' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='mail'>Mail</label>
		<input name='mail' id='mail' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='tel'>Téléphone</label>
		<input name='tel' id='tel' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='code_postal'>Code postal</label>
		<input name='code_postal' id='code_postal' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='ville'>Ville</label>
		<input name='ville' id='ville' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='mdp'>Mot de passe</label>
		<input name='mdp' id='mdp' class='form-control' type='password' value='' size='30' maxlength='45'>
		Confirmer mot de passe
		<input name='mdp2' id='mdp2' class='form-control' type='password' value='' size='30' maxlength='45'>
		</br>
		
		<input type='submit' value='Valider' name='valider' class='btn btn-primary'>
		<input type='reset' value='Annuler' name='annuler' class='btn btn-primary'>
	</form>
</div>