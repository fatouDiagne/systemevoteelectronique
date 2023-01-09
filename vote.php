<?php 
    session_start();
    require_once 'config.php'; // On inclu la connexion à la bdd
    if(isset($_SESSION['user'])){

    ?>
<!Doctype html>

<html>
	

	<head>
    <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="author" content="NoS1gnal"/>

    </head>

		<body>
                <form action="vote_traitement.php">

<input type="radio" name="choix" value="can1" id="can1"  />   
   <label for="can1">Ould ABDEL AZIZE</label><br>
<input type="radio" name="choix" value="can2" id="can2" /> 
<labelfor="non">Birame DAH ABEIDE</label><br>

<input type="radio" name="choix" value="can3" id="can3" /> 
<label for="can3">Ould GHAZOUANI</label><br>
<input type="submit" value="Voter" />
</form>
        </body>
	
</html>
<?php } 


else { header('Location: index.php'); die();}  ?>


