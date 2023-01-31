<?php
        session_start();
        require_once 'config.php'; 
?>        
<!Doctype html>
<html>
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="NoS1gnal" />
        <link rel="stylesheet" href="./styles/index.css">
</head>
<body>
        <?php
        if (isset($_SESSION['user'])) {
                $check = $bdd->prepare("SELECT * FROM candidats inner join users where candidats.userid=users.userid ");
                $check->execute();
                $result = $check->fetchAll();
                //print_r($result);

                if (!empty($result)) {
                        foreach ($result as $row) {
                          ?>
                          <div>
	 <ul>
		<li><?php echo $row["prenom"];?></li>
		<li><?php echo $row["nom"]; ?></li>
		<li><?php echo $row["partie"];?></li>
                <form  action="vote_traitement.php"  method="POST">
           
                        <input  type="radio" name="vote" value="<?php echo $row["idcand"];?>">
                     
        </ul>
                        </div>
        <?php    
                        }?>
                        <input type="submit" value="confirmer">
                </form>
               <?php } 
               
       
        ?>
                <!--form action="vote_traitement.php">
                        <div class="cand">
                                <img class="mon_im" src="./images/femme1.jpg" alt="">
                                <input type="checkbox" name="" id="">
                        </div-->


                        <!--input type="radio" name="choix" value="can1" id="can1" />
                        <label for="can1">Ould ABDEL AZIZE</label><br>
                        <input type="radio" name="choix" value="can2" id="can2" />
                        <label for="non">Birame DAH ABEIDE</label><br>
                        <input type="radio" name="choix" value="can3" id="can3" />
                        <label for="can3">Ould GHAZOUANI</label><br>
                        <input type="submit" value="Voter" />
                </form-->
        </body>

        </html>
<?php } else {
                header('Location: index.php');
                die();
        } ?>