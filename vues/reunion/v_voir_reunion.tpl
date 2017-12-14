<div class='row'>
    <div class="col-xs-12" >
        <div class = "page-header">

            <h1>
                ACCUEIL
               <small>Voici les rÃ©unions a venir ou il reste de la place: </small>
            </h1>
        </div>
    </div>
</div>

<div class='row'>
    {foreach $reunions as $reu}
	    <div class='col-xs-4 reunion '>
		    <div class="thumbnail">
		    Date de debut:<br> {$reu->date_heure_debut_reunion} <br>
		    Date de fin:<br> {$reu->date_heure_fin_reunion} <br>
		    Organisateur: {$reu->un_organisateur->prenom} {$reu->un_organisateur->nom} <br>
		    Lieu: {$reu->un_lieu->designation_lieu} <br>
		    <br>

      		<a href="index.php?controller=reunion&action=inscription&id_reunion={$reu->id_reunion}">S'inscrire</a>
      		</div>
	    </div>
    {/foreach}
</div>