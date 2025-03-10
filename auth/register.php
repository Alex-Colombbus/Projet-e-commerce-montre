<?php
require_once("../includes/functions.inc.php");

$info = ""; //stockage des erreurs

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      if (!empty($_POST)) {

            // On vérifie si un champs est vide 

            // trim en js, ça permet d'enlever les espaces ; en php, trim permet d'enlever aussi les / et autres caractères spéciaux
            $verif = true;
            foreach ($_POST as $key => $value) { // je prend les valeurs de mon tableau en le parcourant

                  if (empty(trim($value))) { // si une de ces valeurs est vide, je passe verif en false
                        $verif = false;
                  }
            }

            if ($verif === false) {
                  $info = alert("Veuillez renseigner tous les champs", "danger");
            } else {

                  if (!isset($_POST['nom']) || strlen(trim($_POST['nom'])) < 2 || strlen(trim($_POST['nom'])) > 50) {
                        $info .= alert("Le champ nom n'est pas valide", "danger");
                  }

                  if (!isset($_POST['prenom']) || strlen(trim($_POST['prenom'])) > 50) {
                        $info .= alert("Le champ prénom n'est pas valide", "danger");
                  }


                  // La fonction filter_var() applique un filtre spécifique à une variable. Lorsqu'elle est utilisée avec la constante FILTER_VALIDATE_EMAIL, elle vérifie si la chaîne passée en paramètre est une adresse e-mail valide. Si l'adresse est valide, la fonction retourne la chaîne elle-même ; sinon, elle retourne false.
                  // La constante FILTER_VALIDATE_EMAIL est utilisée dans la fonction filter_var() en PHP pour valider une adresse e-mail. C'est une option de filtrage qui permet de vérifier si une chaîne de caractères est une adresse e-mail valide selon le format standard des e-mails.

                  if (!isset($_POST['email']) || strlen(trim($_POST['email'])) < 3 || strlen(trim($_POST['email'])) > 100 || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
                        $info .= alert("Le champ email n'est pas valide", "danger");
                  }

                  $regexPhone = "/^[0-9]{10}$/";

                  if (!isset($_POST['tel']) || !preg_match($regexPhone, $_POST['tel'])) { // Vérifie si le téléphone contient 10 chiffres
                        $info .= alert("Le champ phone n'est pas valide", "danger");
                  }

                  $regexMdp = '/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/';
                  /*
                    ^ : Début de la chaîne.
                    (?=.*[A-Z]) : Doit contenir au moins une lettre majuscule.
                    (?=.*[a-z]) : Doit contenir au moins une lettre minuscule.
                    (?=.*\d) : Doit contenir au moins un chiffre.
                    (?=.*[@$!%*?&]) : Doit contenir au moins un caractère spécial parmi @$!%*?&.
                    [A-Za-z\d@$!%*?&]{8,} : Doit être constitué uniquement de lettres majuscules, lettres minuscules, chiffres et caractères spéciaux spécifiés, et doit avoir une longueur minimale de 8 caractères.
                    $ : Fin de la chaîne.
               */

                  if (!isset($_POST['mdp']) || !preg_match($regexMdp, $_POST['mdp'])) {
                        $info .= alert("Le champ mot de passe n'est pas valide", "danger");
                  }

                  if (!isset($_POST['confirmMdp']) || $_POST['mdp'] !== $_POST['confirmMdp']) {
                        $info .= alert("La confirmation et le mot de passe doivent être identiques", "danger");
                  }

                  // var_dump((int) $birthdayYear[0]); 

                  // on récupère l'année grâce au explode, qui nous explose la chaine de caractère date en un tableau (de chaines de caractères) quand il tombe sur le séparateur '-', puis on (int) l'indice 0 du tableau, qui correpond à l'année. Grâce à cela, on peut ensuite faire des opérations numériques avec les dates pour après. 



                  if (!isset($_POST['adresse']) || strlen(trim($_POST['adresse'])) < 5 || strlen(trim($_POST['adresse'])) > 50) {
                        $info .= alert("L'adresse n'est pas valide", "danger");
                  }

                  if (!isset($_POST['zip']) || !preg_match('/^[0-9]{5}$/', $_POST['zip'])) {
                        $info .= alert("Le code postal n'est pas valide", "danger");
                  }

                  if (!isset($_POST['ville']) || strlen(trim($_POST['ville'])) < 5 || strlen(trim($_POST['ville'])) > 50 || preg_match('/[0-9]/', $_POST['ville'])) {
                        $info .= alert("La ville n'est pas valide", "danger");
                  }

                  $pays_autorisés = ["andorre", "belgique", "france", "luxembourg", "monaco", "suisse"];

                  if (!isset($_POST['pays']) || !in_array($_POST['pays'], $pays_autorisés)) {
                        $info .= alert("Le pays n'est pas valide", "danger");
                  }

                  if (empty($info)) { // = "si on a pas de message d'erreur"

                        // on récupère les valeurs de nos champs et on les stocke dans des variables
                        $lastName = htmlspecialchars(trim($_POST['nom']));
                        $firstName = htmlspecialchars(trim($_POST['prenom']));
                        $email = htmlspecialchars(trim($_POST['email']));
                        $phone = htmlspecialchars(trim($_POST['tel']));
                        $mdp = htmlspecialchars(trim($_POST['mdp'])); // attention, on ne met pas le mdp en dur comme ça dans la bdd, avant : il faut le "hasher"
                        // confirmMpd on l'a enlevé : pas besoin de le stocker dans la bdd

                        $address = htmlspecialchars(trim($_POST['adresse']));
                        $zip = htmlspecialchars(trim($_POST['zip']));
                        $city = htmlspecialchars(trim($_POST['ville']));
                        $country = htmlspecialchars(trim($_POST['pays']));
                        $newsletter = htmlspecialchars($_POST['newsletter']);

                        $mdpHash = password_hash($mdp, PASSWORD_DEFAULT);

                        // Cette fonction PHP crée un hachage sécurisé d'un mot de passe en utilisant un algorithme de hachage fort : génère une chaîne de caractères unique à partir d'une entrée. C'est un mécanisme unidirectionnel dont l'utilité est d'empêcher le déchiffrement d'un hash. Lors de la connexion, il faudra comparer le hash stocké dans la base de données avec celui du mot de passe fourni par l'internaute.
                        // PASSWORD_DEFAULT : constante indique à password_hash() d'utiliser l'algorithme de hachage par défaut actuel c'est le plus recommandé car elle garantit que le code utilisera toujours le meilleur algorithme disponible sans avoir besoin de modifications.
                        // debug($mdpHash);
                        // debug($mdp);


                        $emailExist = checkEmailUser($email);
                        // debug($emailExist);
                        $userExist = checkNomEtEmailUser($lastName, $email);
                        // debug($userExist);

                        // die;


                        if ($emailExist) { // on vérifie si l'email existe dans la BDD //En gros on va : "SELECT * FROM users WHERE (email = email input du formulaire)"

                              $info = alert("Ce mail n'est pas disponible", "danger");
                        }

                        if ($userExist) { // on vérifie si l'email ET le pseudo correspondent au même utilisateur

                              $info = alert("Vous avez déjà un compte", "danger");
                        } elseif (empty($info)) {

                              addUser(
                                    $lastName,
                                    $firstName,
                                    $email,
                                    $mdpHash,
                                    $phone,
                                    $address,
                                    $city,
                                    $zip,
                                    $country,
                                    $newsletter
                              );

                              $info = alert("Vous êtes bien inscrit, vous pouvez vous connecter <a href='login.php' class='text-danger fw-bold'>ici</a>", 'success');
                        }
                  }
            }
      }
}

require_once("../includes/header.inc.php");
?>

<main>
      <section class="container col-sm-12 col-md-6">
            <h1>Inscription</h1>
            <?php
            echo $info;
            ?>
            <form method="post" action="" class="">
                  <div class="row">
                        <div class="mb-3 col-sm-12 col-md-6">
                              <label for="nom" class="form-label">Nom</label>
                              <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nom">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-6">
                              <label for="prenom" class="form-label">Prénom</label>
                              <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="prenom">

                        </div>
                  </div>
                  <div class="mb-3">
                        <label for="email" class="form-label">Adresse e-mail</label>
                        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                        <div id="emailHelp" class="form-text">Nous ne partagerons pas votre e-mail.</div>
                  </div>
                  <div class="row">
                        <div class="mb-3 col-sm-12 col-md-6">
                              <label for="mdp" class="form-label">Mot de passe</label>
                              <input type="password" class="form-control" id="mdp" name="mdp">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-6">
                              <label for="confirmMdp" class="form-label">Confirmation du mot de passe</label>
                              <input type="password" class="form-control" id="confirmMdp" name="confirmMdp">
                        </div>
                  </div>
                  <div class="mb-3">
                        <label for="tel" class="form-label">Télephone</label>
                        <input type="tel" class="form-control" id="tel" name="tel">
                  </div>
                  <div class="mb-3">
                        <label for="adresse" class="form-label">Adresse</label>
                        <input type="text" class="form-control" id="adresse" name="adresse">
                  </div>
                  <div class="row">
                        <div class="mb-3 col-sm-12 col-md-4">
                              <label for="ville" class="form-label">Ville</label>
                              <input type="text" class="form-control" id="ville" name="ville">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-4">
                              <label for="zip" class="form-label">Code postal</label>
                              <input type="number" class="form-control" id="zip" name="zip">
                        </div>
                        <div class="mb-3 col-sm-12 col-md-4">
                              <label for="pays" class="form-label">Pays</label>
                              <select class="form-select" name="pays" id="pays" name="pays">
                                    <option value="" disabled selected>Pays de livraison</option>
                                    <option value="andorre">Andorre</option>
                                    <option value="belgique">Belgique</option>
                                    <option value="france">France</option>
                                    <option value="luxembourg">Luxembourg</option>
                                    <option value="monaco">Monaco</option>
                                    <option value="suisse">Suisse</option>
                              </select>
                        </div>
                  </div>
                  <div class="mb-3 form-check">
                        <input type="hidden" name="newsletter" value="non">
                        <input type="checkbox" class="form-check-input" id="newsletter" name="newsletter" value="oui">
                        <label class="form-check-label" for="newsletter">Souhaitez vous vous inscrire à note
                              newsletter?</label>
                  </div>
                  <button type="submit" class="btn btn-primary">Inscription</button>
            </form>
            <div>
                  <p><a href="login.php">Vous avez déjà un compte?</a></p>

            </div>
      </section>
</main>
<?php
require_once("../includes/footer.inc.php");
?>