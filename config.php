<?php 
       // connexion à la base de données
 


    try 
    {
       

         $bdd = new PDO("mysql:host=localhost;dbname=information_vote;charset=utf8", "root", "");
    }
    
    
    

 catch(PDOException $e)
    {
        die('Erreur : '.$e->getMessage());
    }
