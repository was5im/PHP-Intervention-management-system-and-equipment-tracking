<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>



    <!-- tables -->

         <!-- selection des données from database -->
    <?php
      $id = $_SESSION['COR_id'];
      $query = "SELECT M_id,id,marque,Mname,cpu,ram,Tram,disk,Tdisk,Dplus,date FROM materiel WHERE id='$id' ";
      $query_run = mysqli_query($connection, $query);

    ?>

    <!-- fin selectionement -->
   

    <section>
      <div class="container-fluid">
        <div class="row mb-5 mt-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-12 col-12 mb-4 mb-xl-0">
                <h2 class="text-muted text-center mb-3 mt-3">Parc Informatique</h2>

                <table class="table table-dark table-hover text-center" id="machine_table">
                  <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>N° Serie</th>
                      <th>marque</th>
                      <th>Date</th>
                      <th>Performences</th>
                      <th>Modifier</th>
                      <th>Supprimer</th>
                    </tr>
                  </thead>
                  <tbody>
                     
                  <?php
                        if(mysqli_num_rows($query_run) > 0)        
                         {
                           while($row = mysqli_fetch_assoc($query_run))
                            {  
                               
                          
                     ?>   
                     <!-- récupération des données ajouté in the database --> 
                      <tr>
                         <td><?php echo $row['id']; ?></td>
                         <td><?php echo $row['M_id']; ?></td>                     
                         <td><?php echo $row['marque']; ?></td>
                         <td><?php echo $row['date']; ?></td>
                         <td>
                         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row['M_id']; ?>">Performences</button>
                         <div class="modal fade" id="exampleModalCenter<?php echo $row['M_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content" style="background-color: #343A40;">
                                    <div class="modal-header">
                                      <h5  class="modal-title" style=" text-align:center; " id="exampleModalLongTitle">Performences materiel</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div style=" word-wrap:break-word;" class="modal-body">
                                        <h4>Processeur (CPU) :</h4>
                                         <p> <?php echo $row['cpu']; ?></p>
                                         <h4>Mémoire vive (RAM) :</h4>
                                         <p> <?php echo $row['ram']; ?></p>
                                         <h4>Type de mémoire vive  :</h4>
                                         <p> <?php echo $row['Tram']; ?></p>
                                         <h4>Capacité de stockage principal :</h4>
                                         <p> <?php echo $row['disk']; ?></p>
                                         <h4>Type de stockage :</h4>
                                         <p> <?php echo $row['Tdisk']; ?></p>
                                         <h4>Seconde baie :</h4>
                                         <p> <?php echo $row['Dplus']; ?></p>
                                         
                                    </div>
                                  </div>
                                </div>
                          </div>
                         </td>
                         
                         <td>
                           <form action="edit_materiel.php" method="POST">  
                             <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                             <button type="submit" class="btn btn-success btn-sm" name="edit_bt">Modifier</button>
                           </form>
                         </td>
                         <td>
                         <form action="code.php" method="POST">
                          <input type="hidden" name="delete_id" value="<?php echo $row['M_id']; ?>">
                          <button type="submit" class="btn btn-danger btn-sm" name="delete">Supprimer</button>
                        </form>
                         </td>
                      </tr>
                      
                      
                     <!-- fin récupération -->
                     <?php
                            }
                         }     
                         else{
                         echo '<div class="alert alert-danger col" role="alert"> Aucun materiel trouvé </div>';
                         }
                     ?>  


                      
                      
                     </tbody>
                   </table>

                
                <!-- pagination -->
                <nav>
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&laquo;</span>
                      </a>
                    </li>
                    <li class="page-item active">
                      <a href="#" class="page-link py-2 px-3">
                        1
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        2
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        3
                      </a>
                    </li>
                    <li class="page-item">
                      <a href="#" class="page-link py-2 px-3">
                        <span>&raquo;</span>
                      </a>
                    </li>
                  </ul>
                </nav> 
                <!-- end of pagination -->
                <div style="text-align:center;">
                <button type="submit" class="btn btn-secondary " style="padding-left:89px; padding-right:89px;"><a href="ajoutmateriel.php"><span class="fa fa-plus-circle mr-3 "></span>Ajouter materiel</a></button> 
                <button type="submit" class="btn btn-secondary" ><a href="ajout_ensemble_materiel.php "> <span class="fa fa-plus-circle mr-3 "></span>Ajouter ensemble de materiels</a></button>
                </div>                
              </div>
            </div>
          </div>
        </div>
      </div>    
    </section>
    <!-- end of tables -->

    


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>