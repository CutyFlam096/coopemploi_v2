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
	    <div class='col-xs-12  modif '>
        <div class='form-group'>
		   Nom : <input id="{$modif->id_utilisateur}" class='form-control' type="text" name="nom_utilisateur" value="{$modif->nom_utilisateur}"/><br>
       Prénom : <input id="{$modif->id_utilisateur}" class='form-control' type="text" name="prenom_utilisateur" value="{$modif->prenom_utilisateur}"/><br>
       Date de naissance : <input id="{$modif->id_utilisateur}" class='form-control' type="text" name="date_naissance_utilisateur" value="{$modif->date_naissance_utilisateur}"/><br>
         Téléphone : <input id="{$modif->id_utilisateur}" class='form-control' type="text" name="telephone_utilisateur" value="{$modif->telephone_utilisateur}"/><br>
           E-mail : <input id="{$modif->id_utilisateur}" class='form-control' type="text" name="email_utilisateur" value="{$modif->email_utilisateur}"/><br>
            Type : <input id="{$modif->id_utilisateur}" class='form-control' type="text" name="type_utilisateur" value="{$modif->type_utilisateur}"/><br>
             Adresse 1 : <input id="{$modif->id_utilisateur}" class='form-control' type="text" name="adresse1" value="{$modif->une_adresse->rue1_adresse}"/><br>
             Adresse 2 : <input id="{$modif->id_utilisateur}" class='form-control' type="text" name="adresse2" value="{$modif->une_adresse->rue2_adresse}"/><br>
             Commune : <input id="{$modif->id_utilisateur}" class='form-control' type="text" name="commune" value="{$modif->une_adresse->rue1_adresse}"/><br>
              Type de profil : <input id="{$modif->id_utilisateur}" class='form-control' type="text" name="profil" value="{$modif->un_type->designation_type_profil}"/><br>
               Statut : <input id="{$modif->id_utilisateur}" class='form-control' type="text" name="statut" value="{$modif->un_statut->libelle_statut}"/><br>
      		</div>
	    </div>
  </div>
</div>

   <label for="statut">Dans quel pays habitez-vous ?</label><br />
       <select name="statut" id="{$modif->id_utilisateur}">
           <option value="{$modif->un_statut->libelle_statut}">{$modif->un_statut->libelle_statut}</option>
           <option value="{$modif->un_statut->libelle_statut}">{$modif->un_statut->libelle_statut}</option>
          
       </select>