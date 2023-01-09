<!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

         
        </head>

        <body>
    
            <?php 
                if(isset($_GET['reg_err']))
                {
                    $err = htmlspecialchars($_GET['reg_err']);

                    switch($err)
                    {
                        case 'success':
                        ?>
                            <div class="alert alert-success">
                                <strong>Succès</strong> inscription réussie !
                            </div>
                        <?php
                        break;

                        case 'password':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> mot de passe différent
                            </div>
                        <?php
                        break;

                        case 'email':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email non valide
                            </div>
                        <?php
                        break;

                        case 'Longeur_NNI':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> NNI non valide
                            </div>
                        <?php 
                        break;

                       
                        
                        case 'already':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte deja existant
                            </div>
                        <?php 

                    }
                }
                ?>

        <form action="inscription_traitement.php" method="post">
                <h2 class="text-center">Inscription</h2>       
                
                <div class="form-group">
                    <label>   Prenom             </label>
                    <input type="text" name="prenom"  placeholder="prenom" required="required" autocomplete="off">
                </div>
                
                <div class="form-group">
                    <label>      Nom          </label>
                    <input type="text" name="nom"  placeholder="nom" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <label>   Numéro CIN             </label>
                    <input type="text" name="nni"  placeholder="NNI" required="required" autocomplete="off">
                </div>

                <div class="form-group">
                <label>   Mot de pass             </label>
                    <input type="password" name="password"  placeholder="Mot de passe" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                <label>     Confirmer          </label>
                    <input type="password" name="password_retype"  placeholder="confirmer" required="required" autocomplete="off">
                </div>
              
               
                <div class="form-group">
                    <label>    Département          </label>
                    <input type="text" name="departement"  placeholder="departement" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <label>    Commune         </label>
                    <input type="text" name="commune"  placeholder="commune" required="required" autocomplete="off">
                </div>
                <div class="form-group">
                    <button type="submit" >Inscription</button>
                </div>   
            </form>



        </body>

        </html>