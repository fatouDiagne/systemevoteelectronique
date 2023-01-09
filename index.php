<html>
 <head>
 <meta charset="utf-8">
 
 <link rel="stylesheet" href="style.css" media="screen" type="text/css" />
 </head>
 <body>
 <div id="container">
 <?php 
                if(isset($_GET['login_err']))
                {
                    $err = htmlspecialchars($_GET['login_err']);

                    switch($err)
                    {
                        case 'password':
                        ?>
                            <div >
                                <strong>Erreur</strong> mot de passe incorrect
                            </div>
                        <?php
                        break;



                        case 'not existe':
                        ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> compte non existant
                            </div>
                        <?php
                        break;
                    }
                }
                ?> 
 
 <form action="connexion.php" method="POST">
 <h1>Connexion</h1>
 
 <label><b>Utilisateur</b></label>
 <input type="text" placeholder="Entrer votre NNI" name="nni" required></br></br>

 <label><b>Mot de passe</b></label>
 <input type="password" placeholder="Entrer votre mot de passe" name="password" required>

 <input type="submit" id='submit' value='Confirmer' >

 
 </form>
 <p ><a href="inscription.php">Creer un ompte</a></p>
 </div>
 </body>
</html>