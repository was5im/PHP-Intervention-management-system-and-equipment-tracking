<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

 
 <!-- cards -->
 <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row pt-md-5 mt-md-3 mb-3">
              <div class="col-xl-4 col-sm-5 p-4">
                <div class="card card-common" style="height:250px;">
                  <div class="card-body"  >
                    <div class="d-flex justify-content-between ">
                     
                      
                        <div class="chart1 ch" data-percent="100"  >
                        <?php
                          $query = "SELECT id FROM intervention  ORDER BY id";  
                          $query_run = mysqli_query($connection, $query);
        
                          $rep1 = mysqli_num_rows($query_run);
        
                          echo '<h3 class="counter" style="margin-top : 70px;color:"#3497F5";>'.$rep1.'</h3>';
                         
                        ?>
                        
                        </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary" style="text-align:center;">
                    
                    <span style="color:#3497F5;">Interventions totale </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-5 p-4">
                <div class="card card-common" style="height:250px;">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                          <?php
                          $query = "SELECT id FROM intervention  WHERE id_inter <> 0 ORDER BY id";  
                          $query_run = mysqli_query($connection, $query);
                          if($query_run == false)
                          {
                            $rep2 = 0 ; 
                          }
                          else
                          {
                              $rep2 = mysqli_num_rows($query_run);
                          }
                          
                          ?>

                          <div class="chart2 ch" data-percent="<?php echo $rep2*100/$rep1 ; ?>">
                              <h3 class="counter" style="margin-top : 70px;color:green;"><?php echo $rep2 ;?></h3>
                          </div>
                     </div>
                  </div>
                  
                  <div class="card-footer text-secondary" style="text-align:center;">
                      <span style="color:#00b300;">Interventions traitées </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-5 p-4">
                <div class="card card-common" style="height:250px;">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                          <?php
                              $query = "SELECT id FROM intervention  WHERE id_inter = 0 ORDER BY id";  
                              $query_run = mysqli_query($connection, $query);
                              if($query_run == false)
                              {
                                $rep3 = 0 ; 
                              }
                              else
                              {
                                  $rep3 = mysqli_num_rows($query_run);
                              }
                              
                          ?>
                          <div class="chart3 ch" data-percent="<?php echo $rep3*100/$rep1 ; ?>">
                              <h3 class="counter" style="margin-top : 70px; color:red;"><?php echo $rep3 ;?></h3>
                          </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary" style="text-align:center;color:red;">
                    
                    <span style="color:red;">interventions non traitées </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of cards -->
 
 
 <!-- selection des données from database -->
 <?php

   $query = "SELECT id,D_id,id_inter,objet,descreption,date,pdf,dateR,Solution FROM intervention ";
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
                      <th>ID Intervenant</th>
                      <th>Objet</th>
                      <th>Description</th>
                      <th>Document</th>
                      <th>Date d'ajout</th>
                      <th>Date accomplissement</th>

                      
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
                         <td><?php if ($row['id_inter']== 0) echo "<span style=\"color:red;\">Non traité !</span>"; 
                                  else echo "<span style=\"color:#79d279;\"> " .$row['id_inter']. "</span>" ; ?></td>
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
                         <td>
                            <?php 
                            if ($row['dateR'] == "1111-11-11 11:11:11" )
                                  echo ' <span style="color:red;">/ /</span> ' ;
                            else 
                                  echo $row['dateR'] ;
                                    ?> 
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