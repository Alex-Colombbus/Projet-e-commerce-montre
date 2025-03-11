<?php
require_once("../includes/functions.inc.php");
require_once("../includes/header.inc.php");
?>

<main>
      <section class="banniere">
            <img src="../assets/img/timex-banniere.webp" alt="banniere timex">
      </section>
      <section class="container-fluid">
            <div class="row">
                  <div class="filtres">
                        <form action="">
                              <div class="accordion" id="accordeonOpen">
                                    <div class="accordion-item">
                                          <h2 class="accordion-header">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                                      Sexe
                                                </button>
                                          </h2>
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
                                          <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                                      Marques
                                                </button>
                                          </h2>
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
                                          <h2 class="accordion-header">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                                      Type d'affichage
                                                </button>
                                          </h2>
                                          <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                                                <div class="accordion-body">
                                                      <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value="casio" id="checkboxAnalogique">
                                                            <label class="form-check-label" for="checkboxAnalogique">
                                                                  Analogique
                                                            </label>
                                                      </div>

                                                </div>
                                          </div>
                                    </div>
                              </div>
                        </form>

                  </div>
                  <div class="cartes-montres container col-10">
                        <div class="row">
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>
                              <div class="carte-montre p-3 col-sm-4 col-md-3">
                                    <img src="../assets/img/photos_montres/timex_Q_TW2W70800_1983_E-Line.webp" alt="Montre timex_Q_TW2W70800_1983_E-Line ">
                                    <h4 class="text-center">Timex</h4>
                                    <p class="reference text-center">référence(id)</p>
                                    <p class="text-center">désignation 1</p>
                                    <h4 class="text-center">50.00€</h4>
                                    <div class="container d-flex justify-content-center">
                                          <button class="btn ft-btn-produit">Voir les produits</button>
                                    </div>
                              </div>



                        </div>

                  </div>
            </div>

      </section>
</main>


<?php
require_once("../includes/footer.inc.php");
?>