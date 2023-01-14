 <?php
 include('db/Connexiondb.php');
 
 
 
 include('include/header.php');
 
 include('include/navbar.php') ;

 ?>

 <div class="container-fluid px-4">
     <div class="row mt-4">
         <div class="col-md-12">
             <div class="card">
                 <div class=" card-header">
                     <h4> Gestion Candidats
                        <a href="Afficher_candidat.php" class="btn btn-danger float-end">Retour</a>
                     </h4>
                 </div>
                 <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Prenom</th>
                                    <th>Nom</th>
                                    <th>Adresse mail</th>
                                   <th>Role</th>
                                    <th>Image</th>
                                    
                                    <th>Modifier</th>
                                    <th>Supprimer</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                               $req=$DB->prepare('SELECT * FROM candidat ');
                               $req->execute();
                               if ($req->rowCount()>0) {
                                    foreach ($req as $row) {
                                        ?>
                                           <tr>
                                 <td><?= $row['id'];?></td>
                                 <td><?= $row['prenom'];?></td>
                                 <td><?= $row['nom'];?></td>
                                 <td><?= $row['mail'];?></td>
                                 <td>
                                     <?php
                                     if ($row['role']=='1') {
                                         echo "Administrateur";
                                     }elseif ($row['role']=='0') {
                                         echo "candidat";
                                     

                                     }
                                     ?>
                                 </td>
                                 <td><img src=" <?= $row['image'];?>" height="60px" width="60px"/></td>
                                 
                                    <td><a href="editer.php?id= <?=$row['id'];?>" class="btn btn-success"> Modifier</a></td>
                                 <form method="post" action="code.php">
                                    <td><button type="submit" class="btn btn-danger" name="supp" value="<?= $row['id'];?>">Supprimer</button></td>
                                 </form>
                                 
                             </tr>
                                        <?php

                                   }
                               }

                                   else{
                                    ?>
                                
                                <tr>
                                    <td colspan="5">Aucun candidat
                                        
                                    </td>
                                </tr>

                                
                                <tr>
                                    <td>
                                        
                                    </td>
                                </tr>
                                <?php 
                                    }

                                       ?>
                                 

                            </tbody>
                        </table>
                    </div>

                 </div>

             </div>
         </div>
     </div>
 </div>
  <?php
    include('include/script.php');
    include('include/footer.php');
?>