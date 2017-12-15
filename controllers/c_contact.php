<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'voir':
    {
        $smarty->display("vues/contact/v_form_contact.tpl");break;
    }
}