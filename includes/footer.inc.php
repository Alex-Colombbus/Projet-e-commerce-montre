<footer>
      <div class="container-fluid nav-color text-white p-4">
            <div class="row text-center">
                  <div class="col-2">
                        <ul class="navbar-nav">
                              <li class="nav-item">
                                    <a class="nav-link px-3  text-start" href="#">Marques populaires</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link px-3  text-start" href="#">Hommes</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link px-3  text-start" href="#">Femmes</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link px-3  text-start" href="#">Garçons</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link px-3  text-start" href="#">Filles</a>
                              </li>
                        </ul>
                  </div>
                  <div class="col-2 ">
                        <ul class="navbar-nav">
                              <li class="nav-item">
                                    <a class="nav-link px-3 text-start" href="#">Pages populaires</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link px-3  text-start" href="#">Montres Hommes</a>
                              </li>
                              <li class="nav-item">
                                    <a class="nav-link px-3  text-start" href="#">Montres Femmes</a>
                              </li>
                        </ul>
                  </div>
                  <div class="col-4 align-content-center">
                        <a class="navbar-brand" href="<?= RACINE_SITE ?>index.php">
                              <img src="<?= RACINE_SITE ?>assets/img/logoMaisonduTemps.png" alt="Maison du Temps" width="200" height="auto">
                        </a>
                  </div>
                  <div class="col-4 align-content-center">
                        <ul class="navbar-nav flex-row justify-content-center">
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
                              <?php }
                              } ?>

                              <li class="nav-item">
                                    <a class="nav-link px-4" href="#"><i class="bi bi-cart3"></i></a>
                              </li>
                              <?php
                              // test connexion pour affichage de la deconnexion
                              if (isset($_SESSION['client'])) {
                              ?>
                                    <li class="nav-item">
                                          <a class="nav-link px-4" href="<?= RACINE_SITE ?>auth/logout.php">
                                                <i class="bi bi-x"></i>
                                          </a>
                                    </li>
                              <?php } ?>
                        </ul>
                  </div>

            </div>
      </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"></script>
</body>


</html>