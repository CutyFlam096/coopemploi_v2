<?php
$action = $_REQUEST['action'];
switch($action)
{
    case 'voir':
    {
        $smarty->display("vues/faq/v_faq.tpl");break;
        break;
    }
}
?>