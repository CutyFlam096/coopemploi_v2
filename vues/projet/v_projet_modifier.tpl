<h1>Modification de votre projet:</h1>

<div class='form-group'>
		<form method='POST' action='index.php?controller=projet&action=validate_update>
			<label for='nom'>Nom du projet: </label>
			<input value='{$un_projet->nom_projet}' name='nom' id='nom' type='text' class='form-control' size='30' maxlength='45' />
			
			<label for='nic'>NIC: </label>
			<input value='{$un_projet->nic}' name='nic' id='nic' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='description'>Description du projet: </label>
			<textarea value='{$un_projet->description_projet}' name='description' id='description' class='form-control' rows='4' />
			</textarea>
			
			<label for='secteur'>Secteur: </label>
			<Select name='secteur' id='secteur' class='form-control' type='text'/>
			{foreach $secteurs as $secteur}
				<option value='{$secteur->id_secteur_projet}'>{$secteur->designation_secteur_projet}</option>
			{/foreach}
			</select>
			
			
			<label for='site'>Site web: </label>
			<input value='{$un_projet->site_web}' name='site' id='site' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			<label for='nic'>Photo 1: </label>
			<input name='photo_1' id='photo_1' class='form-control' type='file' value='' size='30' maxlength='45' />
			<label for='nic'>Photo 2:</label>
			<input name='photo_2' id='photo_2' class='form-control' type='file' value='' size='30' maxlength='45' />
			<label for='nic'>Photo 3:</label>
			<input name='photo_3' id='photo_3' class='form-control' type='file' value='' size='30' maxlength='45' />
			<label for='nic'>Description Photo 1: </label>
			<input value='{$un_projet->description_photo_1}' name='description_photo_1' id='description_photo_1' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='nic'>Description Photo 2:</label>
			<input value='{$un_projet->description_photo_3}' name='description_photo_2' id='description_photo_2' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='nic'>Description Photo 3:</label>
			<input value='{$un_projet->description_photo_3}' name='description_photo_3' id='description_photo_3' class='form-control' type='text' value='' size='30' maxlength='45' />
			
			<label for='parcours'>Parcours: </label>
			<input value='{$un_projet->parcours}' name='parcours' id='parcours' class='form-control' type='text' value='' size='30' maxlength='45' />
			<label for='logo'>Logo: </label>
			<input name='logo' id='logo' class='form-control' type='file' value='' size='30' maxlength='45' />
			
			</br>
			<input type='submit' value='Valider' class='btn btn-primary'>
			<input type='reset' value='Annuler' class='btn btn-primary'>
		</form>
	</br>
</div>