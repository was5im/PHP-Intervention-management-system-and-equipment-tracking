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
            <div class="row pt-md-5 mt-md-3 mb-5">
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-building fa-3x text-secondary"></i>
                      <div class="text-right text-secondary">
                        <h5>Diréctions</h5>
                        
                        <?php
                          $query = "SELECT D_id FROM directions  ORDER BY D_id";  
                          $query_run = mysqli_query($connection, $query);
        
                          $row = mysqli_num_rows($query_run);
        
                          echo '<h3 class="counter">'.$row.'</h3>';
                         
                        ?>
                        
                      </div>
                    </div>
                  </div>
                  
                  <div class="card-footer text-secondary">
                    <a href="addDirection.php" style="text-decoration: none;"><i class="fa fa-plus-circle mr-3 text-primary"></i></a>
                    <span>Ajouter </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-building fa-3x text-success"></i>
                      <div class="text-right text-secondary">
                        <h5>Diréctions Reg</h5>
                        
                        <?php
                          $query = "SELECT DR_id FROM direction_r  ORDER BY DR_id";  
                          $query_run = mysqli_query($connection, $query);
        
                          $row = mysqli_num_rows($query_run);
                        
                          echo '<h3 class="counter">'.$row.'</h3>';
                         
                        ?>

                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <a href="addDirectionR.php" style="text-decoration: none;"><i class="fa fa-plus-circle mr-3 text-primary"></i></a>
                    <span>Ajouter </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-building fa-3x text-danger"></i>
                      <div class="text-right text-secondary">
                        <h5>Agences</h5>
                        
                        <?php
                          $query = "SELECT A_id FROM agences  ORDER BY A_id";  
                          $query_run = mysqli_query($connection, $query);
        
                          $row = mysqli_num_rows($query_run);
        
                          echo '<h3 class="counter">'.$row.'</h3>';
                         
                        ?>

                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <a href="addAgence.php" style="text-decoration: none;"><i class="fa fa-plus-circle mr-3 text-primary"></i></a>
                    <span>Ajouter </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-3 col-sm-6 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-users fa-3x text-info"></i>
                      <div class="text-right text-secondary">
                        <h5>Utilisateurs</h5>
                        
                        <?php
                          $query = "SELECT U_id FROM user  ORDER BY U_id";  
                          $query_run = mysqli_query($connection, $query);
        
                          $row = mysqli_num_rows($query_run);
        
                          echo '<h3 class="counter">'.$row.'</h3>';
                         
                        ?>

                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <a href="addUser.php" style="text-decoration: none;"><i class="fa fa-plus-circle mr-3 text-primary"></i></a>
                    <span>Ajouter </span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end of cards -->

   

    <!-- tables -->


     <!-- selection des données from database -->

     <?php

        $query = "SELECT U_id,id,Dname,Uname,date,type,U_code FROM user WHERE type!='DR' AND type!='CDD' AND type!='TS' ORDER BY id  ";
        $query_run = mysqli_query($connection, $query);


     ?>

    <!-- fin selectionement -->
     

    <section>
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-12 col-12 mb-4 mb-xl-0">
                <h2 class="text-muted text-center mb-3">Listes des agences et directions</h2>
                <table class="table table-dark table-hover  text-center" id="employee_table">
                  <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>ID utilisateur <th>
                      <th>Nom du direction</th>
                      <th>Nom d'utilisateur</th>
                      <th>Date</th>
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
                      <td><?php echo $row['U_id']; ?></td>
                      <td></td>
                      <td><?php echo $row['Dname']; ?></td> 
                      <td><?php echo $row['Uname']; ?></td>                     
                      <td><?php echo $row['date']; ?></td> 
                      <td>
                      
                       <form action="editDirection.php" method="POST">  
                         <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                         <button type="submit" class="btn btn-success btn-sm" name="edit_btn">Modifier</button>
                       </form>
                      </td>
                      <td>
                        <form action="code.php" method="POST">
                          <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                          <button type="submit" class="btn btn-danger btn-sm" name="delete_data">Supprimer</button>
                        </form>  
                      </td>
                    </tr>
                    
                  <!-- fin récupération -->
                  <?php
                         }
                      } 
                      
                      else{
                      echo '<div class="alert alert-danger col" role="alert"> Aucune information trouvé </div>';
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
    <!-- end of tables -->







 
    


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>





