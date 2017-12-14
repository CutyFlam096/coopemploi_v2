<div class='form-group'>
	<form method='POST' action='index.php?controller=connection&action=inscription'>
		<label for='nom'>Nom</label>
		<input name='nom' id='nom' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='prenom'>Pr�nom</label>
		<input name='prenom' id='prenom' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='adresse'>Adresse</label>
		<input name='adresse' id='adresse' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='mail'>Mail</label>
		<input name='mail' id='mail' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='tel'>T�l�phone</label>
		<input name='tel' id='tel' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='code_postal'>Code postal</label>
		<input name='code_postal' id='code_postal' type='text' class='form-control' size='30' maxlength='45'>
		
		<label for='ville'>Ville</label>
		<input name='ville' id='ville' type='text' class='form-control' size='30' maxlength='45'>
		
		<input type='submit' value='Valider' name='valider' class='btn btn-primary'>
		<input type='reset' value='Annuler' name='annuler' class='btn btn-primary'>
	</form>
</div>