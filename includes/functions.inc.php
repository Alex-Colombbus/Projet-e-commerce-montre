<?php
session_start();
define("RACINE_SITE", "http://localhost/");

// Constante du serveur
define("DBHOST", "localhost");

// constante de l'utilisateur de la BDD du serveur en local => root
define("DBUSER", "root");

// constante pour le mot de passe de serveur en local => pas de mot de passe
define("DBPASS", "");

// Constante pour le nom de la BDD
define("DBNAME", "maison_du_temps");

// echo "test";
// ************UTILITAIRES ALERTE ET DEBUG*******************************************************************
function alert(string $contenu, string $class): string
{
      return "<div class=\"alert alert-$class alert-dismissible fade show text-center w-50 m-auto mb-5\" role=\"alert\">
    $contenu
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button>
            </div>";
}

function debug ($var) {
    echo '<pre class= "border border-dark bg-light text-danger fw-bold w-50 p-5 mt-5">';
        var_dump($var);
    echo '</pre>';
}
//*************************************************************************************************************** */



function connexionBdd(): object
{


      //DSN (Data Source Name):

      //$dsn = mysql:host=localhost;dbname=cinema;charset=utf8;
      $dsn = "mysql:host=" . DBHOST . ";dbname=" . DBNAME . ";charset=utf8";


      try {
            // $pdo = new PDO('mysql:host=localhost;dbname=entreprise;charset=utf8','root','');
            $pdo = new PDO($dsn, DBUSER, DBPASS);
            //On définit le mode d'erreur de PDO sur Exception
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            //On définit le mode de "fetch" par défaut
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            // grâce à fetch_assoc, on récupère l'objet (qu'on ne peut pas afficher comme ça), puis fetch le transforme en tableau, qu'on peut afficher !
            // je vérifie la connexion avec ma BDD avec un simple echo

            // echo "Je suis connecté à la BDD";
      } catch (PDOException $e) {  // PDOException est une classe qui représente une erreur émise par PDO et $e c'est l'objet de la clase en question qui va stocker cette erreur

            die("Erreur : " . $e->getMessage()); // die d'arrêter le PHP et d'afficher une erreur en utilisant la méthode getmessage de l'objet $e
      }

      //le catch sera exécuter dès lors on aura un problème da le try
      return $pdo;
}


function addUser(
      string $lastName,
      string $firstName,
      string $email,
      string $mdp,
      string $phone,
      string $address,
      string $city,
      string $zip,
      string $country,
      string $newsletter
): void { // cette fonction va prendre en paramètre les variables du formulaire

      // On crée un tableau associatif avec les noms des colonnes de la table users comme clés (les clés dans ce tableau doivent être identiques aux colonnes de la table users de la base de données)
      $data = [
            'nom' => $lastName,
            'prenom' => $firstName,
            'email' => $email,
            'mdp' => $mdp,
            'telephone' => $phone,
            'adresse' => $address,
            'ville' => $city,
            'code_postal' => $zip,
            'pays' => $country,
            'newsletter' => $newsletter
      ];

      // Echapper les données et les traiter contre les failles JS

      // $data['lastName'] = htmlspecialchars($lastName)
      // $data['firstName'] = htmlspecialchars($lastName)
      // on va pas continuer comme ça en le faisant "en dur", on va plutôt utiliser une boucle

      foreach ($data as $key => $value) {

            $data[$key] = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
            /* 
              htmlspecialchars est une fonction qui convertit les caractères spéciaux en entités HTML, cela est utilisé afin d'empêcher l'exécution de code HTML ou JavaScript : les attaques XSS (Cross-Site Scripting) injecté par un utilisateur malveillant en échappant les caractères HTML /////////////potentiellement dangereux . Par défaut, htmlspecialchars échappe les caractères suivants :
  
              & (ampersand) devient &amp;
              < (inférieur) devient &lt;
              > (supérieur) devient &gt;
              " (guillemet double) devient &quot;
      */

            //////////////////////////////////// htmlspecialchars n'échappe pas les simples quotes de base, du coup on met en paramètre ENT_QUOTES aussi ! //////////////////////////////

            // ENT_QUOTES : est une constante en PHP  qui convertit les guillemets simples et doubles. 
            // => ' (guillemet simple) devient &#039; 
            // 'UTF-8' : Spécifie que l'encodage utilisé est UTF-8.

            // htmlentities() prend en compte les simples quotes de base, alors que htmlspecialchars ne le fait pas. Bon à savoir.

      }


      $cnx = connexionBdd();
      $sql = "INSERT INTO utilisateurs (nom, prenom, email, mdp, telephone, adresse, code_postal, ville, pays, newsletter) VALUES (:nom, :prenom, :email, :mdp, :telephone, :adresse, :code_postal, :ville, :pays, :newsletter) ";
      // (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ----> Des fois, sur internet, on peut trouver cette notation pour les VALUES

      $request = $cnx->prepare($sql);

      //prepare() est une méthode qui permet de préparer la requête sans l'exécuter. Elle contient un marqueur :firstName qui est vide et attend une valeur.


      /* Les requêtes préparer sont préconisées si vous exécutez plusieurs fois la même requête. Ainsi vous évitez au SGBD de répéter toutes les phases analyse/ interpretation / exécution de la requête (gain de performance). Les requêtes préparées sont aussi utilisées pour nettoyer les données et se prémunir des injections de type SQL.
  
                      1- On prépare la requête
                      2- On lie le marqueur à la requête
                      3- On exécute la requête 
  
  */

      // $request->execute(array(
      //     // on prend les valeurs qui sont protégées, bien sûr !
      //     ':lastName' => $data['lastName'], 
      //     ':firstName' => $data['firstName'], 
      //     ':pseudo' => $data['pseudo'], 
      //     ':email' => $data['email'], 
      //     ':phone' => $data['phone'], 
      //     ':mdp' => $data['mdp'], 
      //     ':civility' => $data['civility'], 
      //     ':birthday' => $data['birthday'], 
      //     ':address' => $data['address'], 
      //     ':zip' => $data['zip'], 
      //     ':city' => $data['city'], 
      //     ':country' => $data['country']
      // ));

      // ce tableau ci-dessus, c'est la même chose que ci-dessous

      $request->execute($data);
}

function checkEmailUser(string $email): mixed
{ // soit on récupère un tableau avec un seul champ (mais c'est bien un tableau), soit on récupère un booléen qui donne false

      $cnx = connexionBdd();
      $sql = "SELECT email FROM utilisateurs WHERE email = :email";
      $request = $cnx->prepare($sql);
      $request->execute(array(

            ':email' => $email
      ));

      $result = $request->fetch(); // transforme l'objet qu'on récupère en tableau !

      return $result; // car on veut le tableau

}

function checkNomEtEmailUser(string $name, string $email): mixed
{ // soit on récupère un tableau avec un seul champ (mais c'est bien un tableau), soit on récupère un booléen qui donne false

      $cnx = connexionBdd();
      $sql = "SELECT * FROM utilisateurs WHERE (nom = :name AND email = :email)"; // on peut aussi mettre SELECT pseudo, email
      $request = $cnx->prepare($sql);
      $request->execute(array(

            ':name' => $name,
            ':email' => $email
      ));

      $result = $request->fetch(); // transforme l'objet qu'on récupère en tableau !
      return $result; // car on veut le tableau

}
