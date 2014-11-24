<?php

include_once "include/commonVars.php";
include_once "include/phpFunctions.php";

$page = "home";
if (isset($_REQUEST["page"]) && file_exists($PAGE_PATH."/".$_REQUEST["page"] . ".php")) {
	$page = strtolower($_REQUEST["page"]);
}

renderHeader($page);

include_once $PAGE_PATH."/$page.php";

renderFooter();?>
