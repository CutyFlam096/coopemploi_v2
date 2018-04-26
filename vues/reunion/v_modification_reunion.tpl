<h1>Modification d'une reunion</h1>
<div class='form-group'>
	<form method='POST' action='index.php?controller=reunion&action=validate_modification'>
			<input class="form-control" id="id_reunion" name="id_reunion" type="hidden" value="{$une_reunion->id_reunion}"/>
	
			<label for='deb_reunion'>Date de debut de la reunion: </label>
			<input class="form-control" id="deb_reunion" name="deb_reunion" type="text" value="{$date_deb}"/>
			
			<label for='h_deb_reunion'>Heure de debut de la reunion: </label>
			<input class="form-control" id="h_deb_reunion" name="h_deb_reunion" type="number" min="0" max="24" value="{$h_deb}"/>
			
			<label for='m_deb_reunion'>Minute de debut de la reunion: </label>
			<input class="form-control" id="m_deb_reunion" name="m_deb_reunion" type="number" min="0" max="60" value="{$m_deb}"/>
			
			
			
			<label for='fin_reunion'>Date de fin de la reunion: </label>
			<input class="form-control" id="fin_reunion" name="fin_reunion" type="text" value="{$date_fin}"/>
			
			<label for='deb_reunion'>Heure de fin de la reunion: </label>
			<input class="form-control" id="h_fin_reunion" name="h_fin_reunion" type="number" min="0" max="24" value="{$h_fin}"/>
			
			<label for='deb_reunion'>Minute de fin de la reunion: </label>
			<input class="form-control" id="m_fin_reunion" name="m_fin_reunion" type="number" min="0" max="60" value="{$m_fin}"/>
			
			
			<label for='select_commune'>Commune: </label>
			<select id="select_commune" class="form-control" name="select_commune">
				{foreach $des_communes as $com}
					{if $nom->id_code_commune == $une_commune->id_commune}
						<option value="{$com->id_code_commune}" selected>{$com->nom_commune}</option>
					{else}
						<option value="{$com->id_code_commune}">{$com->nom_commune}</option>
					{/if}
				{/foreach}
			</select>
			
			<label for='select_adresse'>Adresse: </label>
			<select id="select_adresse" class="form-control">
				{foreach $des_adresses as $add}
					{if $add->id_adresse == $une_adresse->id_adresse}
						<option value="{$add->id_adresse}" selected>{$add->rue1_adresse} {$add->rue2_adresse}</option>
					{else}
						<option value="{$add->id_adresse}">{$add->rue1_adresse} {$add->rue2_adresse}</option>
					{/if}
				{/foreach}
			</select>
			
			<label for='select_lieu'>Lieu: </label>
			<select id="select_lieu" class="form-control" name="select_lieu">
				{foreach $des_lieux as $lieu}
					{if $lieu->id_lieu == $un_lieu->id_lieu}
						<option value="{$lieu->id_lieu}" selected>{$lieu->designation_lieu} - {$lieu->place_lieu}</option>
					{else}
						<option value="{$lieu->id_lieu}">{$lieu->designation_lieu} - {$lieu->place_lieu}</option>
					{/if}
				{/foreach}
			</select>
			
			</br>
			<input type='submit' value='Valider' class='btn btn-primary'>
			<input type='reset' value='Annuler' class='btn btn-primary'>
		</form>
	</br>
</div>

<script>
$( function() 
	{
		$( "#deb_reunion" ).datepicker(
			{
				altField: "#datepicker",
				closeText: 'Fermer',
				prevText: 'Précédent',
				nextText: 'Suivant',
				currentText: 'Aujourd\'hui',
				monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
				monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
				dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
				dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
				dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
				weekHeader: 'Sem.',
				dateFormat: 'yy-mm-dd'
			}
		);
		
		$( "#fin_reunion" ).datepicker(
			{
				altField: "#datepicker",
				closeText: 'Fermer',
				prevText: 'Précédent',
				nextText: 'Suivant',
				currentText: 'Aujourd\'hui',
				monthNames: ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'],
				monthNamesShort: ['Janv.', 'Févr.', 'Mars', 'Avril', 'Mai', 'Juin', 'Juil.', 'Août', 'Sept.', 'Oct.', 'Nov.', 'Déc.'],
				dayNames: ['Dimanche', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi'],
				dayNamesShort: ['Dim.', 'Lun.', 'Mar.', 'Mer.', 'Jeu.', 'Ven.', 'Sam.'],
				dayNamesMin: ['D', 'L', 'M', 'M', 'J', 'V', 'S'],
				weekHeader: 'Sem.',
				dateFormat: 'yy-mm-dd'
			}
		
		);
		$( "#select_commune" ).change(function() 
		{
			$("#select_adresse").removeAttr('disabled');
			
			$.get("result_ajax.php?action=liste_adresses&id_commune=" + $("#select_commune").val(), function(result)
			{
				$("#select_adresse").html(result);
			});
		});
		
		$( "#select_adresse" ).change(function() 
		{
			$("#select_lieu").removeAttr('disabled');
		
			$.get("result_ajax.php?action=liste_lieux&id_adresse=" + $("#select_adresse").val(), function(result)
			{
				$("#select_lieu").html(result);
			});
		});
	} 
);
</script>            