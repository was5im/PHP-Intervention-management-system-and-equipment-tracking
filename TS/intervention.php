<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

 <!-- selection des données from database -->
 <?php

   $query = "SELECT id,D_id,id_inter,objet,descreption,date,pdf,dateR FROM intervention WHERE id_inter='0' ";
   $query_run = mysqli_query($connection, $query);

 ?> 

<!-- fin selectionement -->



<section>
      <div class="container-fluid">
        <div class="row mb-5 mt-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-12 col-12 mb-4 mb-xl-0">
                <h2 class="text-muted text-center mb-3 mt-3">Interventions a resoudre</h2>
                <?php
                        if(mysqli_num_rows($query_run) > 0)        
                         {
                ?>
                <table class="table table-dark table-hover text-center">
                  <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>Objet</th>
                      <th>Date Probleme</th>
                      <th>Date accomplicement</th>
                      <th>Description</th>
                      <th>Document</th>
                      <th>Répendre</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                     
                  <?php
                           while($row = mysqli_fetch_assoc($query_run))
                            {  
                               
                          
                     ?>   
                     <!-- récupération des données ajouté in the database --> 
                      <tr>
                         <td><?php echo $row['D_id']; ?></td>
                         <td><?php echo $row['objet']; ?></td>
                         <td><?php echo $row['date']; ?></td>
                         <td style="color:red;">
                            <?php 
                            if ($row['dateR'] == "1111-11-11 11:11:11" ) 
                                    echo ' / / ' ;
                                    ?> 
                         </td>
                         <td>
                         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row['id']; ?>">Descreption</button>
                         <div class="modal fade" id="exampleModalCenter<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content" style="background-color:#343A40;">
                                    <div class="modal-header" >
                                      <h5 class="modal-title" id="exampleModalLongTitle">Description du probleme</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div style=" word-wrap:break-word;" class="modal-body">
                                        <?php echo $row['descreption']; ?>
                                    </div>
                                  </div>
                                </div>
                          </div>
                         </td>
                         <td>
                         <a href="../<?php echo $row['pdf']; ?>" download><img src="../images/pdf2.png"> </a>
                         <td>
                         
                          <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalCenter3<?php echo $row['id']; ?>">Rependre</button>
                          <div class="modal fade " id="exampleModalCenter3<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered " role="document">
                                  <div class="modal-content" >
                                    <div class="modal-header"  >
                                      <h5 class="modal-title modalBox" id="exampleModalLongTitle" style="color:#000000;">Ajouter la Solution</h5>
                                        <span aria-hidden="true">&times;</span>
                                    </div>
                                    <div style=" word-wrap:break-word;background: aliceblue;" class="modal-body">
                                      <form action="code.php" method="POST">
                                      <textarea id="ok" name="Solution" rows="4" cols="30" ></textarea><br><br>
                                        <div class="modal-footer" >
                                          <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                          <button type="submit" name="rep_btn" class="btn btn-success">confirmer</button>
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                                        </div>
                                      </form> 
                                    </div>
                                  </div>
                                </div>
                          </div>
                        
                         </td>
                      </tr>
                    
                     <!-- fin récupération -->
                     <?php
                            }
                         }     
                         else{
                         echo '<div class="alert alert-danger col text-center" role="alert"> Aucune intervention trouvé </div>';
                         }
                     ?>   
                      
                      
                     </tbody>
                   </table>
                    
                    <!--modal for descreption -->
                    
                    

                    <!-- selection des données from database pour le 2eme tableau -->
                     <?php

                      $query = "SELECT id,D_id,id_inter,objet,descreption,date,pdf,dateR,Solution FROM intervention WHERE id_inter<>'0' ";
                      $query_run = mysqli_query($connection, $query);

                      ?> 
                      <!-- fin selectionement -->



                      <h2 class="text-muted text-center mb-3 mt-3">Interventions resolut</h2>
                     <table class="table table-dark table-hover text-center">
                      <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>Objet</th>
                      <th>Date probleme</th>
                      <th>Date accomplicement</th>
                      <th>Description</th>
                      <th>Document</th>
                      <th>Solution</th>
                      
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
                         <td><?php echo $row['D_id']; ?></td>
                         <td><?php echo $row['objet']; ?></td>
                         <td><?php echo $row['date']; ?></td>
                         <td><?php echo $row['dateR']; ?></td>
                         <td>
                         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter<?php echo $row['id']; ?>">Description</button>
                         <div class="modal fade" id="exampleModalCenter<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content" style="background-color:#343A40;">
                                    <div class="modal-header" >
                                      <h5 class="modal-title" id="exampleModalLongTitle">Description du probleme</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div style=" word-wrap:break-word;" class="modal-body">
                                        <?php echo $row['descreption']; ?>
                                    </div>
                                  </div>
                                </div>
                          </div>
                         </td>
                         <td>
                         <a href="../<?php echo $row['pdf']; ?>" download><img src="../images/pdf2.png"> </a>
                         <td>
                         <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter2<?php echo $row['id']; ?>">Solution</button>
                         <div class="modal fade" id="exampleModalCenter2<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content" style="background-color:#343A40;">
                                    <div class="modal-header" >
                                      <h5 class="modal-title" id="exampleModalLongTitle">Solution du probleme</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>
                                    <div style=" word-wrap:break-word;" class="modal-body">
                                        <?php echo $row['Solution']; ?>
                                    </div>
                                  </div>
                                </div>
                          </div>
                         </td>     
                      </tr>
                    
                     <!-- fin récupération -->
                     <?php
                            }
                         }     
                         else{
                         echo '<div class="alert alert-danger col" role="alert"> Aucune intervention trouvé </div>';
                         }
                     ?>   
                      
                      
                     </tbody>
                   </table>
                    
                    <!--modal for descreption -->
                    
                     <!-- end model -->
                
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
              </div>
            </div>
          </div>
        </div>
      </div>    
    </section>

<?php
include('includes/scripts.php');
include('includes/footer.php');
?>