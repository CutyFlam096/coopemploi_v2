<?php
/* Smarty version 3.1.30, created on 2017-12-14 13:58:09
  from "C:\wamp\www\coopemploi\vues\porteur\v_voir_porteur.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a328371befc12_65145315',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e51cb1db5910913f25a32b9ea637a5fd5a01a09e' => 
    array (
      0 => 'C:\\wamp\\www\\coopemploi\\vues\\porteur\\v_voir_porteur.tpl',
      1 => 1513259878,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a328371befc12_65145315 (Smarty_Internal_Template $_smarty_tpl) {
?>
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
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['projet']->value, 'project');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['project']->value) {
?>
	    <div class='col-xs-6  projet '>
		    <div class="thumbnail">
		    Nom du projet : <?php echo $_smarty_tpl->tpl_vars['project']->value->nom_projet;?>
 <br>
            Secteur : <?php echo $_smarty_tpl->tpl_vars['project']->value->un_secteur->designation_secteur_projet;?>
<br>
            Porteur du Projet : <?php echo $_smarty_tpl->tpl_vars['project']->value->un_porteur->prenom;?>
 <?php echo $_smarty_tpl->tpl_vars['project']->value->un_porteur->nom;?>
 <br>
            Adresse du Porteur : <?php echo $_smarty_tpl->tpl_vars['project']->value->un_porteur->une_adresse->rue1_adresse;?>
 <?php echo $_smarty_tpl->tpl_vars['project']->value->un_porteur->une_adresse->rue2_adresse;?>
<br>

		   
        
		    <!--Lieu: <?php echo $_smarty_tpl->tpl_vars['reu']->value->project->designation_lieu;?>
 <br>
		    <br>!-->

      		<a href="index.php?controller=porteur&action=afficher&id_projet=<?php echo $_smarty_tpl->tpl_vars['project']->value->id_projet;?>
">Mon Projet</a>
      		</div>
	    </div>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

</div><?php }
}
