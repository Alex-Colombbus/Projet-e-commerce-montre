<?php
require_once("../includes/functions.inc.php");

if (isset($_SESSION['client'])) { // si une session existe avec un identifiant user, je me redirige vers la page de profil
      header("location:profil.php");
}

$info = "";

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

            if (!$verif) { // si les champs sont vides, on envoie une alert qui dit "veuillez renseigner tous les champs"
                  $info = alert("Veuillez renseigner tous les champs", "danger");
            } else {

                  $name = $_POST['nom'];
                  $email = $_POST['email'];
                  $mdp = $_POST['mdp'];

                  $user = checkNomEtEmailUser($name, $email); // je vérifie si les données passées dans le formulaire existent dans la BDD

                  if ($user) {


                        if (password_verify($mdp, $user['mdp'])) {
                              // si les 2 mdp correspondent (celui du post, et celui de la BDD), on affiche une alerte :

                              // password_verify() pour vérifier si un mot de passe correspond à un mot de passe haché créé par la password_hash().
                              // Si le hash du mdp de la BDD correspond au mdp du formulaire, alors password_verify retourne true

                              /*  
              Suite à la connexion on vas créer ce qu'on appelle une session :
              Principe des sessions : un fichier temporaire appeléé "session" est crée sur le serveur, avec un identifiant unique . Les sessions constituent un moyen de stocker les données sur le serveur. Cette session est liée à un internaute car ces données sont propres à ce dernier,  Les données du fichier de session sont accessibles et manipulables à partir de la superglobale $_SESSION, elle est mêmorisée par le serveur et est disponible tant que la session de l'utilsateur est maintenu sur le serveur.
              Quand une session est créée sur le serveur, ce dernier envoie son identifiant (unique) au client sous forme d'un cookie.
              Un cookie est déposé sur le poste de l'internaute avec l'identifiant (au nom de PHPSESSID). Ce cookie se détruit lorsqu'on quitte le navigateur.   
              */

                              // Création ou ouverture d'une session : 

                              // session_start();
                              $_SESSION['client'] = $user; // nous créons une session avec les infos de l'utilisateur provenant de la BDD
                              // debug($_SESSION['client']);
                              // $_SESSION['panier'] = "Yaya";
                              header("location:profil.php"); // permet de faire des redirections (header() -> c'est une fonction php)

                              // ------------- header() (fonction php) doit TOUJOURS être placée AVANT le header de notre html, c'est pourquoi on déplace notre require_once "inc/header.inc.php"; APRES header(). -----------------

                              $info = alert("MDP bon", "success");
                        } else {
                              $info = alert("Les identifiants sont incorrects", "danger");
                        }
                  } else {
                        $info = alert("Les identifiants sont incorrects", "danger");
                  }
            }
      }
}
require_once("../includes/header.inc.php");
?>

<main>
      <h1>Login</h1>
      <?php echo $info ?>
      <form method="post" action="" class="">
            <div class="mb-3 col-sm-12 col-md-8">
                  <label for="nom" class="form-label">Nom</label>
                  <input type="text" class="form-control" id="nom" name="nom" aria-describedby="nom">
            </div>
            <div class="mb-3 col-sm-12 col-md-8">
                  <label for=" email" class="form-label">Adresse e-mail</label>
                  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                  <div id="emailHelp" class="form-text">Nous ne partagerons pas votre e-mail.</div>
            </div>
            <div class="mb-3 col-sm-12 col-md-8">
                  <label for=" mdp" class="form-label">Mot de passe</label>
                  <input type="password" class="form-control" id="mdp" name="mdp">
            </div>
            <button type="submit" class="btn btn-primary">Connexion</button>
      </form>
</main>



<?php
require_once("../includes/footer.inc.php");
?>