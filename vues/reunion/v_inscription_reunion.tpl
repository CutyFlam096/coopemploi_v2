<div class='row'>
    <div class="col-xs-12" >
		<h2>Inscription a la reunion n°{$id_reunion}</h2>
		<div class='form-group'>
			<form method='POST' action='index.php?controller=reunion&action=valider_inscription&id_reunion={$id_reunion}'>
				<label for='nom'>Nom:</label>
				<input name='nom' id='nom' class='form-control' type='text' value='' size='30' maxlength='45' />
				<label for='prenom'>Prenom: </label>
				<input name='prenom' id='prenom' class='form-control' type='text' value='' size='30' maxlength='45' />
				<label for='date'>Date de naissance: : </label>
				<input name='date' id='date' class='form-control' type='date' value='' size='30' maxlength='45' />
				<label for='telephone: '>Telephone: : </label>
				<input name='telephone' id='telephone' class='form-control' type='text' value='' size='30' maxlength='45' />
				<label for='mail'>Mail: </label>
				<input name='mail' id='mail' class='form-control' type='text' value='' size='30' maxlength='45' />
				
				<label for="commune">Commune: </label>
				<select class="form-control" name='commune'>
				{foreach $communes as $commune}
					<option value="{$commune->id_code_commune}">{$commune->nom_commune}</option>
				{/foreach}
				</select> 

				<label for='adresse'>Adresse: </label>
				<input name='adresse' id='adresse' class='form-control' type='text' value='' size='30' maxlength='45' />
				<label for='complement_adresse'>Complement adresse: </label>
				<input name='complement_adresse' id='complement_adresse' class='form-control' type='text' value='' size='30' maxlength='45' />
				
				</br>
				<input type='submit' value='Valider' class='btn btn-primary'>
				<input type='reset' value='Annuler' class='btn btn-primary'>
				</form>
		</div>
    </div>
</div>