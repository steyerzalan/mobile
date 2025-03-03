<?php

require_once("MobileRestHandler.php");

$view = "";
if(isset($_GET["view"]))
{
    $view = $_GET["view"];

    switch($view)
    {
        case "all":
            // to handle REST URL /mobile/list/
            $mobileRestHandler = new MobileRestHandler();
            $mobileRestHandler->getAllMobiles();
            break;
        
        case "" :
            //404 - not found;
            break;
    }
}
?>