<h1>Creation de votre projet:</h1>

<div class='form-group'>
	<form method='POST' action='index.php?controller=projet&action=validate_create' enctype='multipart/form-data'>
			<label for='nom'>Nom du projet: </label>
			<input name='nom' id='login' type='text' class='form-control' size='30' maxlength='45' />
			
			<label for='siren'>SIREN: </label>
			<input name='siren' id='siren' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			<label for='nic'>NIC: </label>
			<input name='nic' id='nic' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='description'>Description du projet: </label>
			<input name='description' id='description' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			<label for='secteur'>Secteur: </label>
			<select name="secteur" size="1" class='form-control'>
			{foreach from=$secteurs item=s}
				<option value="{$s->id_secteur_projet}">{$s->designation_secteur_projet}</option>
			{/foreach}
			</select>
			<label for='site'>Site web: </label>
			<input name='site' id='site' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			
			<label for='raison'>Raison sociale: </label>
			<input name='raison' id='raison' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			<label for='nic'>Photo 1: </label>
			<input name='photo_1' id='photo_1' class='form-control' type='file' value='' size='30' maxlength='45' />
			<label for='nic'>Photo 2:</label>
			<input name='photo_2' id='photo_2' class='form-control' type='file' value='' size='30' maxlength='45' />
			<label for='nic'>Photo 3:</label>
			<input name='photo_3' id='photo_3' class='form-control' type='file' value='' size='30' maxlength='45' />
			<label for='nic'>Description Photo 1: </label>
			<input name='description_photo_1' id='description_photo_1' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='nic'>Description Photo 2:</label>
			<input name='description_photo_2' id='description_photo_2' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='nic'>Description Photo 3:</label>
			<input name='description_photo_3' id='description_photo_3' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			<label for='parcours'>Parcours: </label>
			<input name='parcours' id='parcours' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='logo'>Logo: </label>
			<input name='logo' id='logo' class='form-control' type='file' value='' size='30' maxlength='45' />
			
			</br>
			<input type='submit' value='Valider' class='btn btn-primary'>
			<input type='reset' value='Annuler' class='btn btn-primary'>
		</form>
	</br>
</div>