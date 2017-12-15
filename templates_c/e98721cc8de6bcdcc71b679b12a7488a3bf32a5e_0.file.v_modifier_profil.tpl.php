<?php
/* Smarty version 3.1.30, created on 2017-12-15 13:16:12
  from "C:\wamp64\www\coopemploiv2\vues\conseiller\v_modifier_profil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a33cb1c18f275_48079024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e98721cc8de6bcdcc71b679b12a7488a3bf32a5e' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploiv2\\vues\\conseiller\\v_modifier_profil.tpl',
      1 => 1513343684,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a33cb1c18f275_48079024 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
		   Nom : <input id="<?php echo $_smarty_tpl->tpl_vars['modif']->value->id_utilisateur;?>
" class='form-control' type="text" name="nom_utilisateur" value="<?php echo $_smarty_tpl->tpl_vars['modif']->value->nom_utilisateur;?>
"/><br>
       Prénom : <input id="<?php echo $_smarty_tpl->tpl_vars['modif']->value->id_utilisateur;?>
" class='form-control' type="text" name="prenom_utilisateur" value="<?php echo $_smarty_tpl->tpl_vars['modif']->value->prenom_utilisateur;?>
"/><br>
       Date de naissance : <input id="<?php echo $_smarty_tpl->tpl_vars['modif']->value->id_utilisateur;?>
" class='form-control' type="text" name="date_naissance_utilisateur" value="<?php echo $_smarty_tpl->tpl_vars['modif']->value->date_naissance_utilisateur;?>
"/><br>
         Téléphone : <input id="<?php echo $_smarty_tpl->tpl_vars['modif']->value->id_utilisateur;?>
" class='form-control' type="text" name="telephone_utilisateur" value="<?php echo $_smarty_tpl->tpl_vars['modif']->value->telephone_utilisateur;?>
"/><br>
           E-mail : <input id="<?php echo $_smarty_tpl->tpl_vars['modif']->value->id_utilisateur;?>
" class='form-control' type="text" name="email_utilisateur" value="<?php echo $_smarty_tpl->tpl_vars['modif']->value->email_utilisateur;?>
"/><br>
            Type : <input id="<?php echo $_smarty_tpl->tpl_vars['modif']->value->id_utilisateur;?>
" class='form-control' type="text" name="type_utilisateur" value="<?php echo $_smarty_tpl->tpl_vars['modif']->value->type_utilisateur;?>
"/><br>
             Adresse 1 : <input id="<?php echo $_smarty_tpl->tpl_vars['modif']->value->id_utilisateur;?>
" class='form-control' type="text" name="adresse1" value="<?php echo $_smarty_tpl->tpl_vars['modif']->value->une_adresse->rue1_adresse;?>
"/><br>
             Adresse 2 : <input id="<?php echo $_smarty_tpl->tpl_vars['modif']->value->id_utilisateur;?>
" class='form-control' type="text" name="adresse2" value="<?php echo $_smarty_tpl->tpl_vars['modif']->value->une_adresse->rue2_adresse;?>
"/><br>
             Commune : <input id="<?php echo $_smarty_tpl->tpl_vars['modif']->value->id_utilisateur;?>
" class='form-control' type="text" name="commune" value="<?php echo $_smarty_tpl->tpl_vars['modif']->value->une_adresse->rue1_adresse;?>
"/><br>
              Type de profil : <input id="<?php echo $_smarty_tpl->tpl_vars['modif']->value->id_utilisateur;?>
" class='form-control' type="text" name="profil" value="<?php echo $_smarty_tpl->tpl_vars['modif']->value->un_type->designation_type_profil;?>
"/><br>
               Statut : <input id="<?php echo $_smarty_tpl->tpl_vars['modif']->value->id_utilisateur;?>
" class='form-control' type="text" name="statut" value="<?php echo $_smarty_tpl->tpl_vars['modif']->value->un_statut->libelle_statut;?>
"/><br>
      		</div>
	    </div>
  </div>
</div>

   <label for="statut">Dans quel pays habitez-vous ?</label><br />
       <select name="statut" id="<?php echo $_smarty_tpl->tpl_vars['modif']->value->id_utilisateur;?>
">
           <option value="<?php echo $_smarty_tpl->tpl_vars['modif']->value->un_statut->libelle_statut;?>
"><?php echo $_smarty_tpl->tpl_vars['modif']->value->un_statut->libelle_statut;?>
</option>
           <option value="<?php echo $_smarty_tpl->tpl_vars['modif']->value->un_statut->libelle_statut;?>
"><?php echo $_smarty_tpl->tpl_vars['modif']->value->un_statut->libelle_statut;?>
</option>
          
       </select><?php }
}
