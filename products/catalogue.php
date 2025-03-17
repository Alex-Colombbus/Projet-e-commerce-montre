<?php
require_once("../includes/functions.inc.php");
require_once("../includes/header.inc.php");
?>

<main>
      <section class="container banniere d-flex justify-content-center">

            <img class="col imageBanniere p-4" src="../assets/img/timex-banniere.webp" alt="banniere timex">
      </section>
      <section class="container">
            <div class="row">
                  <div class="filtres pt-4 col-2">
                        <form action="">
                              <div class="accordion" id="accordeonOpen">
                                    <div class="accordion-item">
                                          <h4 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                      Sexe
                                                </button>
                                          </h4>
                                          <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                                                <div class="accordion-body">
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="homme" id="checkboxHomme">
                                                            <label class="form-check-label" for="checkboxHomme">
                                                                  Homme </label>
                                                      </div>
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="femme" id="checkboxFemme">
                                                            <label class="form-check-label" for="checkboxFemme">
                                                                  Femme
                                                            </label>
                                                      </div>
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="garcon" id="checkboxGarcon">
                                                            <label class="form-check-label" for="checkboxGarcon">
                                                                  Garçon
                                                            </label>
                                                      </div>
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="fille" id="checkboxFille">
                                                            <label class="form-check-label" for="checkboxFille">
                                                                  Fille
                                                            </label>
                                                      </div>
                                                </div>
                                          </div>
                                    </div>
                                    <div class="accordion-item">
                                          <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                      Marques
                                                </button>
                                          </h4>
                                          <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="timex" id="checkboxtimex">
                                                            <label class="form-check-label" for="checkboxtimex">
                                                                  Timex
                                                            </label>
                                                      </div>
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="casio" id="checkboxCasio">
                                                            <label class="form-check-label" for="checkboxCasio">
                                                                  Casio
                                                            </label>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                                    <div class="accordion-item">
                                          <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                      Type d'affichage
                                                </button>
                                          </h4>
                                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="analogique" id="checkboxAnalogique">
                                                            <label class="form-check-label" for="checkboxAnalogique">
                                                                  Analogique
                                                            </label>
                                                      </div>
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="numerique" id="checkboxNumerique">
                                                            <label class="form-check-label" for="checkboxNumerique">
                                                                  Numérique
                                                            </label>
                                                      </div>
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="montreConnectee" id="checkboxMontreConnectee">
                                                            <label class="form-check-label" for="checkboxMontreConnectee">
                                                                  Montre Connectée
                                                            </label>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                                    <div class="accordion-item">
                                          <h4 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                                                      Couleur
                                                </button>
                                          </h4>
                                          <!-- UTILISATION D'UNE BOUCLE POUR AFFICHER LES DIFFERENTE COULEURS -->
                                          <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="noir" id="checkboxNoir">
                                                            <label class="form-check-label" for="checkboxNoir">
                                                                  Noir
                                                            </label>
                                                      </div>
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="blanc" id="checkboxBlanc">
                                                            <label class="form-check-label" for="checkboxBlanc">
                                                                  Blanc
                                                            </label>
                                                      </div>
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="vert" id="checkboxVert">
                                                            <label class="form-check-label" for="checkboxVert">
                                                                  Vert
                                                            </label>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </form>

                  </div>
                  <div class="cartes-montres pt-3 container col-8">
                        <div class="row justify-content-center">
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line">
                                    <h4 class="text-center pt-3">TIMEX</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center fw-bold">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line">
                                    <h4 class="text-center pt-3">TIMEX</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center fw-bold">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line">
                                    <h4 class="text-center pt-3">TIMEX</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center fw-bold">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line">
                                    <h4 class="text-center pt-3">TIMEX</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center fw-bold">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line">
                                    <h4 class="text-center pt-3">TIMEX</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center fw-bold">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line">
                                    <h4 class="text-center pt-3">TIMEX</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center fw-bold">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line">
                                    <h4 class="text-center pt-3">TIMEX</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center fw-bold">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line">
                                    <h4 class="text-center pt-3">TIMEX</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center fw-bold">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>

                        </div>
                  </div>

      </section>
</main>


<?php
require_once("../includes/footer.inc.php");
?>