<?php
session_start(); // Démarrage de la session
require_once 'config.php'; // On inclut la connexion à la base de données
if (!empty($_POST['nni']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident
{


    // Patch XSS
    $nni = htmlspecialchars($_POST['nni']);
    $password = htmlspecialchars($_POST['password']);

    // On regarde si l'utilisateur est inscrit dans la table user
    $check = $bdd->prepare('SELECT *FROM user WHERE usernni = ?');
    $check->execute(array($nni));
    $data = $check->fetch();
    $row = $check->rowCount();

    // Si > à 0 alors l'utilisateur existe
    if ($row > 0) {

        // Si le mot de passe est le bon
        if (password_verify($password, $data['password'])) {

            // On créer la session et on redirige sur vote.php
            $_SESSION['user'] = $data['usernni'];
            header('Location: vote.php');
            die();
        } else {
            header('Location: index.php?login_err=password');
            die();
        }

    } else {
        header('Location: index.php?login_err=not existe');
        die();
    }
} else {
    header('Location: index.php');
    die();
} // si le formulaire est envoyé sans aucune données






/*
while($donner=mysqli_fetch_array($req)){
if(isset($_POST['user']) && isset($_POST['password']))
{


// on applique les deux fonctions mysqli_real_escape_string et htmlspecialchars
// pour éliminer toute attaque de type injection SQL et XSS
$user = mysqli_real_escape_string($db,htmlspecialchars($_POST['user'])); 
$password = mysqli_real_escape_string($db,htmlspecialchars($_POST['password']));

if($user !== $donner['User_NNI'] && $password !== $donner['Password'])
{ echo "<h1><center> erreure d'authentification </center></h1>";  }
else {echo "bien venu";}
} }
mysqli_close($db); // fermer la connexion
?>*/