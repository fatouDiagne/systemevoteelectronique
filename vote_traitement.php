<?php 
    session_start();
    require_once 'config.php'; // On inclu la connexion à la bdd
    if(!empty($_POST['vote'])){
        $req = $bdd->prepare("SELECT * FROM electeurs inner join users where electeurs.userid=users.userid and usernni=".$_SESSION['user']);
        //$req = $bdd->prepare("SELECT * FROM electeur");
        $req->execute();
        $resultall = $req->fetchAll();
        print_r($resultall);
}

    //si statusVote =0 il n'a pas voté => on insère dans la table candidat

?>