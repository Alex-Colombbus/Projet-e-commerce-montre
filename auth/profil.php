<?php
require_once("../includes/functions.inc.php");

if (!isset($_SESSION['client'])) {
      header("location: " . RACINE_SITE . "auth/login.php");
      exit();
}

require_once("../includes/header.inc.php");
?>
<main>
      <h1>Profil</h1>

      <h2 class="text-center mb-5">Bonjour <?= $_SESSION['client']['nom'] ?> </h2>


      <div class="container">
            <table class="table col-10">
                  <thead>
                        <tr>
                              <th scope="col">#</th>
                              <th scope="col">Nom</th>
                              <th scope="col">Prenom</th>
                              <th scope="col">Email</th>
                              <th scope="col">Telephone</th>
                              <th scope="col">Adresse</th>
                              <th scope="col">Code postal</th>
                              <th scope="col">Ville</th>
                              <th scope="col">Pays</th>
                        </tr>
                  </thead>
                  <tbody>
                        <tr>
                              <th scope="row"><?= $_SESSION['client']['id_utilisateur'] ?></th>

                              <td><?= ucfirst($_SESSION['client']['nom']) ?></td>
                              <td><?= ucfirst($_SESSION['client']['prenom']) ?></td>
                              <td><?= $_SESSION['client']['email'] ?></td>
                              <td><?= $_SESSION['client']['telephone'] ?></td>
                              <td><?= $_SESSION['client']['adresse'] ?></td>
                              <td><?= $_SESSION['client']['code_postal'] ?></td>
                              <td><?= ucfirst($_SESSION['client']['ville']) ?></td>
                              <td><?= ucfirst($_SESSION['client']['pays']) ?></td>

                        </tr>
                  </tbody>
            </table>
      </div>
</main>
<?php
require_once("../includes/footer.inc.php");
?>