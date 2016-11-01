<?php
session_start();

$queHago = isset($_POST['queHago']) ? $_POST['queHago'] : NULL;

switch ($queHago) {

    case "LlamarServidor":
    	
    	setcookie("MiCookie", $_POST['user'], time() + (86400 * 30), "/");

    	$_SESSION["user"] = $_POST['user'];
    	var_dump($_SESSION);
    	break;
}

?>