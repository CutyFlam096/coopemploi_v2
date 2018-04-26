<h1>Creation d'une reunion</h1>
<div class='form-group'>
	<form method='POST' action='index.php?controller=reunion&action=validate_creation'>
			<label for='deb_reunion'>Date de debut de la reunion: </label>
			<input class="form-control" id="deb_reunion" name="deb_reunion" type="text"/>
			
			<label for='h_deb_reunion'>Heure de debut de la reunion: </label>
			<input class="form-control" id="h_deb_reunion" name="h_deb_reunion" type="number" min="0" max="24"/>
			
			<label for='m_deb_reunion'>Minute de debut de la reunion: </label>
			<input class="form-control" id="m_deb_reunion" name="m_deb_reunion" type="number" min="0" max="60"/>
			
			
			
			<label for='fin_reunion'>Date de fin de la reunion: </label>
			<input class="form-control" id="fin_reunion" name="fin_reunion" type="text"/>
			
			<label for='deb_reunion'>Heure de fin de la reunion: </label>
			<input class="form-control" id="h_fin_reunion" name="h_fin_reunion" type="number" min="0" max="24"/>
			
			<label for='deb_reunion'>Minute de fin de la reunion: </label>
			<input class="form-control" id="m_fin_reunion" name="m_fin_reunion" type="number" min="0" max="60"/>
			
			
			<label for='select_commune'>Commune: </label>
			<select id="select_commune" class="form-control" name="select_commune">
				{foreach $communes as $com}
					 <option value="{$com->id_code_commune}">{$com->nom_commune}</option>
				{/foreach}
			</select>
			
			<label for='select_adresse'>Adresse: </label>
			<select id="select_adresse" class="form-control" disabled>
			</select>
			
			<label for='select_lieu'>Lieu: </label>
			<select id="select_lieu" class="form-control" name="select_lieu" disabled>
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