<?php

if ( $_GET['action'] === "set")
	setcookie($_GET['name'], $_GET['value'], time() + 1000000);
else if ($_GET['action'] == "del")
	setcookie($_GET['name'], Null, -1);
else if ($_GET['action'] == "get" && array_key_exists($_GET['name'], $_COOKIE))
	echo $_COOKIE[$_GET['name']];
?>