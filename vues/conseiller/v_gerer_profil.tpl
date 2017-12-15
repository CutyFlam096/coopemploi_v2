<div class='row'>
    <div class="col-xs-12" >
        <div class = "page-header">

            <h1>
                ACCUEIL
               <small>Voici les projets en cours : </small>
            </h1>
        </div>
    </div>
</div>

<div class='row'>
  {foreach $profil as $profils }
	    <div class='col-xs-6  profil '>
		   <div class="thumbnail">

		   Nom : {$profils->nom_utilisateur} <br>
      Prénom: {$profils->prenom_utilisateur}<br>
      Date de naissance: {$profils->date_naissance_utilisateur}<br>
      Téléphone : {$profils->telephone_utilisateur}<br>
      E-mail : {$profils->email_utilisateur}<br>
      Type : {$profils->type_utilisateur}<br>
      Adresse : {$profils->une_adresse->rue1_adresse} {$profils->une_adresse->rue2_adresse}<br>
      Projet : {$profils->un_projet->nom_projet}<br>
      Type de profil: {$profils->un_type->designation_type_profil}<br>
      Statut : {$profils->un_statut->libelle_statut}<br>



		   
        <a href='index.php?controller=conseiller&action=modifier&id_utilisateur={$profils->id_utilisateur}'><button>Modifier</button></a>
		    <!--Lieu: {$reu->project->designation_lieu} <br>
		    <br>!-->

        </div>
	    </div>
   {/foreach}
</div>