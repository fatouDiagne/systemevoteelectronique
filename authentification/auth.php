<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../styles/index.css" media="screen" type="text/css" />

</head>
<body>
    <?php
        require_once("navbar.php")
    ?>
    <div class="contai login">
    <input type="checkbox" id="check">
        <?php
        if (isset($_GET['login_err'])) {
            $err = htmlspecialchars($_GET['login_err']);
            switch ($err) {
                case 'password':
                    ?>
                    <div>
                        <strong class="erreur">Erreur mot de passe incorrect</strong>
                    </div>
                    <?php
                    break;
                case 'not existe':
                    ?>
                    <div class="erreur">
                        <strong>Erreur compte non existant</strong>
                    </div>
                    <?php
                    break;
            }
        }
        ?>
        <div class="content login">
            <h2>Authentification</h2>
            <form action="/systemevoteelectronique/authentification/connexion.php" method="POST">
                <input type="text" placeholder="Entrer votre NNI" name="nni" required>
                <input type="password" placeholder="Entrer votre mot de passe" name="password" required><br>
                <a href="#">Mot de passe oublié</a> 
                <input type="submit" class='button' value='Confirmer'>
            </form>
            <p><a href="/systemevoteelectronique/authentification/inscription.php">Créer un compte</a></p>
        </div>
    </div>
    
</body>

</html>