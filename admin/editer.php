 <?php
 include('db/Connexiondb.php');
 
 
 
 include('include/header.php');
 
 include('include/navbar.php') ;

 ?>

 <div class="container-fluid px-4">
    
     <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <div class=" card-header">
                     <h4> Editer le candidat</h4>
                 </div>
                 <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $user_id=$_GET['id'];                       
                        $req=$DB->prepare("SELECT * FROM candidat WHERE id=$user_id "  );
                        $req->execute();
                        if ($req->rowCount()>0) {
                            foreach ($req as $row) {
                                // code...
                          

                            ?>

                    <form action="code.php" method="post">
                        <input type="hidden" name="user_id" value="<?= $row['id'];?>">


                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Prenom</label>
                                <input type="text" class="form-control" name="prenom" value="<?= $row['prenom'];?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Nom</label>
                                <input type="text" class="form-control" name="nom" value="<?= $row['nom'];?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Adresse mail</label>
                                <input type="text" class="form-control" name="mail" value="<?= $row['mail'];?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Mot de passe</label>
                                <input type="text" class="form-control" name="mdp" value="<?= $row['mdp'];?>">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Role</label>
                                <select name="role" required class="form-control">
                                    <option value="">Selectionner un role</option>
                                    <option value="1" <?= $row['role']=='1'? 'selected':'';?>>Administrateur</option>
                                    <option value="0" <?= $row['role']=='0'? 'selected':'';?>>candidat</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="image" >
                            </div>
                             <div class="col-md-12 mb-3">
                               <button class="btn btn-primary" type="submit" name="modifier">Modifier le candidat</button>
                            </div>

                        </div>
                    </form>
                    <?php
                              }
                        }
                        else{
                            ?>fas fa-users
                            <h4>Aucun candidat n'a été trouvé</h4>
                            <?php
                        }
                    }
                     
                    ?>



                 </div>

             </div>
         </div>
     </div>
 </div>
  <?php
    include('include/script.php');
    include('include/footer.php');
?>