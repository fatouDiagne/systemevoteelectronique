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
                     <h4> Ajouter un administrateur ou un candidat
                        <a href="Afficher_candidat.php" class="btn btn-danger float-end">Retour</a>
                     </h4>
                 </div>
                 <div class="card-body">
                    <form action="code.php" method="post">
                

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="">Prenom</label>
                                <input type="text" class="form-control" name="prenom ">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Nom</label>
                                <input type="text" class="form-control" name="nom" >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Adresse mail</label>
                                <input type="text" class="form-control" name="mail">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Mot de passe</label>
                                <input type="text" class="form-control" name="mdp" >
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Role</label>
                                <select name="role" required class="form-control">
                                    <option value="">Selectionner un role</option>
                                    <option value="1">Administrateur</option>
                                    <option value="0" >candidat</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="">Image</label>
                                <input type="file" class="form-control" name="image" >
                            </div>
                             <div class="col-md-12 mb-3">
                               <button class="btn btn-primary" type="submit" name="ajouter_candidat">Ajouter administrateur/candidat</button>
                            </div>

                        </div>
                    </form>

                 </div>

             </div>
         </div>
     </div>
 </div>
  <?php
    include('include/script.php');
    include('include/footer.php');
?>