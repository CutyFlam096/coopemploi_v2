<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'voir':
    {
        //recuperer els reunions, les attribuer a smarty
        $smarty->display("vues/reunion/v_voir_reunion.tpl");break;
        break;
    }
}
?>