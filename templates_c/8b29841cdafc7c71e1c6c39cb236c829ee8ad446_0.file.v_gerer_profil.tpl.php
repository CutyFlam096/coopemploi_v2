<?php
/* Smarty version 3.1.30, created on 2017-12-15 11:19:42
  from "C:\wamp64\www\coopemploiv2\vues\conseiller\v_gerer_profil.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a33afce6b7063_39620531',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b29841cdafc7c71e1c6c39cb236c829ee8ad446' => 
    array (
      0 => 'C:\\wamp64\\www\\coopemploiv2\\vues\\conseiller\\v_gerer_profil.tpl',
      1 => 1513336779,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a33afce6b7063_39620531 (Smarty_Internal_Template $_smarty_tpl) {
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
  <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['profil']->value, 'profils');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['profils']->value) {
?>
	    <div class='col-xs-6  profil '>
		   <div class="thumbnail">

		   Nom : <?php echo $_smarty_tpl->tpl_vars['profils']->value->nom_utilisateur;?>
 <br>
      Prénom: <?php echo $_smarty_tpl->tpl_vars['profils']->value->prenom_utilisateur;?>
<br>
      Date de naissance: <?php echo $_smarty_tpl->tpl_vars['profils']->value->date_naissance_utilisateur;?>
<br>
      Téléphone : <?php echo $_smarty_tpl->tpl_vars['profils']->value->telephone_utilisateur;?>
<br>
      E-mail : <?php echo $_smarty_tpl->tpl_vars['profils']->value->email_utilisateur;?>
<br>
      Type : <?php echo $_smarty_tpl->tpl_vars['profils']->value->type_utilisateur;?>
<br>
      Adresse : <?php echo $_smarty_tpl->tpl_vars['profils']->value->une_adresse->rue1_adresse;?>
 <?php echo $_smarty_tpl->tpl_vars['profils']->value->une_adresse->rue2_adresse;?>
<br>
      Projet : <?php echo $_smarty_tpl->tpl_vars['profils']->value->un_projet->nom_projet;?>
<br>
      Type de profil: <?php echo $_smarty_tpl->tpl_vars['profils']->value->un_type->designation_type_profil;?>
<br>
      Statut : <?php echo $_smarty_tpl->tpl_vars['profils']->value->un_statut->libelle_statut;?>
<br>



		   
        <a href='index.php?controller=conseiller&action=modifier&id_utilisateur=<?php echo $_smarty_tpl->tpl_vars['profils']->value->id_utilisateur;?>
'><button>Modifier</button></a>
		    <!--Lieu: <?php echo $_smarty_tpl->tpl_vars['reu']->value->project->designation_lieu;?>
 <br>
		    <br>!-->

        </div>
	    </div>
   <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
