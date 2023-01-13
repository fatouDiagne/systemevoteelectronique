<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="./styles/index.css" media="screen" type="text/css" />
</head>

<body>
    <div class="container">
        <?php
        if (isset($_GET['login_err'])) {
            $err = htmlspecialchars($_GET['login_err']);
            switch ($err) {
                case 'password':
                    ?>
                    <div>
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
        <div class="content">
            <form class="form-content" action="connexion.php" method="POST">
                <>Connexion</h1> 
                <label><b>Utilisateur</b></label><br><br>
                <input type="text" placeholder="Entrer votre NNI" name="nni" required><br>
                <label><b>Mot de passe</b></label><br><br>
                <input type="password" placeholder="Entrer votre mot de passe" name="password" required><br> 
                <input   type="submit" id='submit' value='Confirmer'><br>
            </form>
            <p><a href="inscription.php">Creer un compte</a></p>
        </div>
    </div>
</body>

</html>