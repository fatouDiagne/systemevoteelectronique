<?php
        session_start();?>


<?php
    require_once 'config.php'; // On inclu la connexion à la bdd
    if(!empty($_POST['vote'])){
        $req = $bdd->prepare("SELECT statusVote FROM electeurs,users where electeurs.userid=users.userid AND electeurs.usernni=".$_SESSION['user']);
        //$req = $bdd->prepare("SELECT * FROM electeur");
        $req->execute();
        $resultall = $req->fetch();
        
        if($resultall['statusVote']==0){
        

                    
                         $insert = $bdd->prepare("UPDATE candidats SET nbVote=nbVote+1 where  idcand=".$_POST['vote']);
                     $insert->execute();

                       
            echo "votre a bien etais accepte";

            
            $insertt = $bdd->prepare("UPDATE electeurs, users SET electeurs.userid=users.userid, statusVote= 1 WHERE electeurs.usernni=".$_SESSION['user']);
            $insertt->execute();

          exit;
         
        }else{?>
            echo "<span>Votre avis a deja ete donne, merci.</span></b>";
            <?php exit;
        }
}else{
    echo"Erreur dans l'envoi du formulaire";

}

    //si statusVote =0 il n'a pas voté => on insère dans la table candidat

?>