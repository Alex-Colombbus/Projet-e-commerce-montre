<!DOCTYPE html>
<html lang="fr">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Maison du temps</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

      <!-- Chemin optimisé grâce à une constante RACINE_SITE -->
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
      <link rel="stylesheet" href="<?= RACINE_SITE ?>assets/css/style.css">


</head>

<body>
      <nav class="navbar navbar-expand-lg nav-color ">
            <div class="container-fluid ">


                  <a class="navbar-brand" href="<?= RACINE_SITE ?>index.php"><img src="<?= RACINE_SITE ?>assets/img/logoMaisonduTemps.png" alt="Maison du Temps" width="200px" height="auto"></a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav ">
                              <?php
                              if (!isset($_SESSION['client'])) {
                              ?>
                                    <li class="nav-item ">
                                          <a class="nav-link px-4 active " href="<?= RACINE_SITE ?>auth/login.php"><i class="bi bi-person"></i>
                                          </a>
                                    </li>
                              <?php } else { ?>
                                    <li class="nav-item">
                                          <a class="nav-link px-4 active" href="<?= RACINE_SITE ?>auth/profil.php"><i class="bi bi-person-gear"></i></a>
                                    </li>


                                    <?php

                                    // cache le dashboard pour les non admins
                                    if ($_SESSION['client']['role'] == 'admin') {

                                    ?>
                                          <li class="nav-item">
                                                <a class="nav-link px-4" href="<?= RACINE_SITE ?>admin/dashboard.php"><i class="bi bi-pc-display-horizontal"></i>Dashboard</a>
                                          </li>
                                    <?php } ?>
                              <?php } ?>

                              <li class="nav-item">
                                    <a class="nav-link px-4" href="#"><i class="bi bi-cart3"></i></a>
                              </li>

                              <li class="nav-item">
                                    <a class="nav-link px-4" href="<?= RACINE_SITE ?>auth/logout.php"><i class="bi bi-x"></i></a>
                              </li>

                        </ul>
                  </div>



            </div>
      </nav>
      <div class="container-fluid nav-color text-white">
            <div class="line"></div>
            <ul class="navbar-nav flex-row justify-content-center">
                  <li class="nav-item">
                        <a class="nav-link m-3" href="#">Marques</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link m-3" href="#">Hommes</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link m-3" href="#">Femmes</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link m-3" href="#">Garçons</a>
                  </li>
                  <li class="nav-item">
                        <a class="nav-link m-3" href="#">Filles</a>
                  </li>

            </ul>


      </div>