<?php
// session_start() démare une nouvelle session, 
// il faut l'appeller sur toutes les pages où l'on a besoin des données de session
// Les données de session sont stockées dans les cookies, visibles sur chrome dans l'inspecteur > Application > Cookies (à déplier)
// https://www.php.net/manual/fr/function.session-start.php
session_start();

include './db.php';

$sql_connect = "SELECT * FROM user WHERE user.email='" . $_POST['mail'] . "'";

// Lance la requête sql et rend la réponse sous forme d'objet
$result = $conn->query($sql_connect);

// Test si le resultat comportent des lignes
if ($result->num_rows > 0) {

  // $result->fetch_assoc() rend les valeurs de la ligne sous forme de tableau associatif
  // Ici on attend la première ligne seulement, mais dans d'autre cas on relancera cette méthodes 
  // pour obtenir toutes les lignes disponibles jusqu'à ce que $result renvois la valeur null ( plus de ligne )
  $my_user = $result->fetch_assoc();

  // Comparaison du mot de passe stockée en base au mot de passe reçu via le formulaire de connexion
  if($my_user['password'] == $_POST['password']){

    // Stockage des donnée de la ligne ( de l'utilisateur ) dans une propriété dans $_SESSION
    $_SESSION['user_data'] = $my_user;


    // Redirection vers profile.php
    header('Location: profile.php');
  }

} else {
  echo "0 results";
}

// Fin de la connexion à la base
$conn->close();

