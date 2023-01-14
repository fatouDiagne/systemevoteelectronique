<?php
include('../Services.php');
include('db/Connexiondb.php');

	if (isset($_POST['ajouter_candidat'])) {
	$prenom=$_POST['prenom'];
	$nom=$_POST['nom'];
	$mail=$_POST['mail'];
	$mdp=$_POST['mdp'];
	$role=$_POST['role'];
	$image=$_POST['image'];
	$req=$DB->prepare("	INSERT INTO candidat (prenom,nom,mail,mdp,role,image) VALUES ('$prenom','$nom','$mail','$mdp','$role','$image')  " );
	$req->execute();
	if ($req) {
		$_SESSION['mess']='administrateur ou candidat ajouter avec succés';
		header('location:\vote\admin\Afficher_candidat.php');
		exit();
	}
	else{
		$_SESSION['mess']='Erreur';
		header('location:\vote\admin\Afficher_candidat.php');
		exit();
	}

	}



if (isset($_POST['supp'])) {
	$user_id=$_POST['supp'];
	$req=$DB->prepare("DELETE FROM  candidat  WHERE id='$user_id' " );
	$req->execute();
	if ($req) {
		$_SESSION['flash']['success']='le candidat est supprimer avec succés' ;
		header('location:\vote\admin\Afficher_candidat.php');
		exit();
	}else{
		$_SESSION['mess']='Erreur';
		header('location:\vote\admin\Afficher_candidat.php');
		exit();
	}
	
}

	
if (isset($_POST['modifier'])) {
	$user_id=$_POST['user_id'];
	$prenom=$_POST['prenom'];
	$nom=$_POST['nom'];
	$mail=$_POST['mail'];
	$mdp=$_POST['mdp'];
	$role=$_POST['role'];
	$image=$_POST['image'];
	$req=$DB->prepare("UPDATE candidat SET prenom='$prenom',nom='$nom',mail='$mail',mdp='$mdp',role='$role',image='$image' WHERE id='$user_id' " );
	$req->execute();
	if ($req) {
		$_SESSION['flash']['success']='le candidat est modifié';
		header('location:\vote\admin\Afficher_candidat.php');
		exit();
	}
}
