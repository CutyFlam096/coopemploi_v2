<div class='row'>
    <div class="col-xs-12" >
        <div class = "page-header">

            <h1>
                GESTION DES REUNIONS
				<br>
				<a class="btn btn-info btn-lg" href="index.php?controller=reunion&action=creation">Creer</a>
				<br>
                <small>Voici les réunions: </small>
            </h1>
        </div>
    </div>
</div>

<div class='row'>
	{if isset($utilisateur)}
		{if $utilisateur->id_type_profil == 2}
			{foreach $reunions as $reu}
				<div class='col-xs-4 reunion'>
					<div class="thumbnail">
					Date de debut:<br> {$reu->date_heure_debut_reunion} <br>
					Date de fin:<br> {$reu->date_heure_fin_reunion} <br>
					Organisateur: {$reu->un_organisateur->prenom_utilisateur} {$reu->un_organisateur->nom_utilisateur} <br>
					Lieu: {$reu->un_lieu->designation_lieu} <br>
					<br>

					<a class="btn btn-info btn-lg" href="index.php?controller=reunion&action=modification&id_reunion={$reu->id_reunion}">Modifier</a>
					<button id="{$reu->id_reunion}" type="button" class="delete_reunion btn btn-info btn-lg" data-toggle="modal" data-target="#modalSuppression">Supprimer</button>
					
					</div>
				</div>
			{/foreach}
		{else}
			Pas les droits!
		{/if}
	{else}
		Pas les droits!
	{/if}
	
	<!-- Modal -->
	  <div class="modal fade" id="modalSuppression" role="dialog">
		<div class="modal-dialog">
		
		  <!-- Modal content-->
		  <div class="modal-content">
			<div class="modal-header">
			  <button type="button" class="close" data-dismiss="modal">&times;</button>
			  <h4 class="modal-title">Valider Suppression</h4>
			</div>
			<div class="modal-body">
			  <a type="button" class="valider_delete_reunion btn btn-info btn-lg" href="index.php?controller=reunion&action=suppression&id_reunion={$reu->id_reunion}">Valider suppression</a>
			</div>
			<div class="modal-footer">
			  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		  </div>
		  
		</div>
	  </div>
  
</div>

<script>
$('.delete_reunion').on('click', function () {
	$('.valider_delete_reunion').attr('href', "index.php?controller=reunion&action=get_adresses&id_commune=" + $(this).val());
  $('#myModal').modal('show')
})
</script>