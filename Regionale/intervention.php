<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

 <!-- selection des données from database -->
 <?php
   $id= $_SESSION['COR_id'];
   $query = "SELECT id,D_id,objet,descreption,date,pdf FROM intervention WHERE D_id='$id' ";
   $query_run = mysqli_query($connection, $query);

 ?> 

<!-- fin selectionement -->



<section>
      <div class="container-fluid">
        <div class="row mb-5 mt-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-12 col-12 mb-4 mb-xl-0">
                <h2 class="text-muted text-center mb-3 mt-3">Interventions</h2>
                <table class="table table-dark table-hover text-center">
                  <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>Objet</th>
                      <th>Description</th>
                      <th>Document</th>
                      <th>Date</th>
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
                         <td><?php echo $row['objet']; ?></td>
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
                         </td>
                         <td><?php echo $row['date']; ?></td>
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
               <div style="text-align:center";> <button type="submit" class="btn btn-secondary btn-block" style="padding-left:39px; padding-right:39px; text-align:center;"><a href="ajouter_intervention.php"><span class="fa fa-plus-circle mr-3 "></span>Ajouter une intervention</a></button></div>             
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