<?php


require_once("../includes/functions.inc.php");


if ($_SESSION['client']['role'] == 'client' || !isset($_SESSION['client'])) {

      header("location: " . RACINE_SITE . "index.php");
      exit();
}
require_once("../includes/header.inc.php");
?>

<main>
      <h1>Dashboard</h1>
</main>

<?php
require_once("../includes/footer.inc.php")
?>