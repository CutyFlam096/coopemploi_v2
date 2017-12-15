<div class='row'>
    <div class="col-xs-12" >
        <div class = "page-header">

            <h1>
                ACCUEIL
               <small>Voici les porteurs de projet : </small>
            </h1>
        </div>
    </div>
</div>

<div class='row'>
    {foreach $porteur as $project}
	    <div class='col-xs-6  projet '>
		    <div class="thumbnail">
		    Nom du projet : {$project->nom_projet} <br>
            Secteur : {$project->un_secteur->designation_secteur_projet}<br>
            Porteur du Projet : {$project->un_porteur->prenom_utilisateur} {$project->un_porteur->nom_utilisateur} <br>
            Siren : {$project->siren}<br>
            NIC : {$project->nic}<br>
            Adresse du Porteur : {$project->un_porteur->une_adresse->rue1_adresse} {$project->un_porteur->une_adresse->rue2_adresse}<br>
            E-mail : {$project->un_porteur->email_utilisateur}<br>
            Téléphone : {$project->un_porteur->telephone_utilisateur}<br>

		   
        
		    <!--Lieu: {$reu->project->designation_lieu} <br>
		    <br>!-->

      		<a href="index.php?controller=projet&action=mini_site&id_projet={$project->id_projet}">Mon Projet</a>
      		</div>
	    </div>
    {/foreach}
</div>