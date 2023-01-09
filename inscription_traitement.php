<?php 
    require_once 'config.php'; // On inclu la connexion à la bdd

    // Si les variables existent et qu'elles ne sont pas vides
    if(!empty($_POST['prenom']) && !empty($_POST['nom']) && !empty($_POST['nni']) && !empty($_POST['password']) && !empty($_POST['password_retype']) && !empty($_POST['commune'])&& !empty($_POST['departement']))
    {
        // Patch XSS
        $prenom = htmlspecialchars($_POST['prenom']);
        $nom = htmlspecialchars($_POST['nom']);
        $nni = htmlspecialchars($_POST['nni']);
        $password = htmlspecialchars($_POST['password']);
        $password_retype = htmlspecialchars($_POST['password_retype']);
        $departement = htmlspecialchars($_POST['departement']);
        $commune = htmlspecialchars($_POST['commune']);

        // On vérifie si l'utilisateur existe
        $check = $bdd->prepare('SELECT *  FROM user WHERE usernni = ?');
        $check-> execute(array( $nni));
        $data = $check->fetch();
        $row = $check->rowCount();

       
        
        // Si la requete renvoie un 0 alors l'utilisateur n'existe pas 
        if($row == 0){ 
            if(strlen( $nni) <= 10){ // On verifie que la longueur du pseudo <= 100
                
                 // if(filter_var( $nni, FILTER_VALIDATE_NNI)){ // Si l'email est de la bonne forme
                        if($password === $password_retype){ // si les deux mdp saisis sont bon

                            // On hash le mot de passe avec Bcrypt, via un coût de 12
                            $cost = ['cost' => 12];
                            $password = password_hash($password, PASSWORD_BCRYPT, $cost);
                            
                         
                             
                            // On insère dans la base de données
                            $insert = $bdd->prepare('INSERT INTO user (prenom, nom, usernni, password, departement, commune) VALUES(:prenom, :nom, :usernni, :password, :departement, :commune)');
                            $insert->execute(array(
                                'prenom' => $prenom,
                                'nom' => $nom,
                                'usernni' => $nni,
                                'password' => $password,
                                'departement' => $departement,
                                'commune' => $commune));
                            // On redirige avec le message de succès
                            header('Location:inscription.php?reg_err=success');
                            die();
                        }else{ header('Location: inscription.php?reg_err=password'); die();}
                   // }
               // else{ header('Location: inscription.php?reg_err=NNI_form'); die();}
            }else{ header('Location: inscription.php?reg_err=Longeur_NNI'); die();}
        }else{ header('Location: inscription.php?reg_err=already'); die();}
         
    }