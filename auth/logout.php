<?php

require_once("../includes/functions.inc.php");

$_SESSION = array(); // Supprimer toutes les variables de session

session_destroy(); // Détruire la session

header("Location: " . RACINE_SITE . "index.php"); // Rediriger vers la page de connexion
exit();
