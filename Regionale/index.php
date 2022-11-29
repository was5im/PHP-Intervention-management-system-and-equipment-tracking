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
              <div class="col-xl-4 col-sm-12 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-building fa-3x text-danger"></i>
                      <div class="text-right text-secondary">
                        <h5>Agences</h5>
                        
                        <?php
                          $id= $_SESSION['COR_id'];
                          $query = "SELECT DR_id FROM user WHERE DR_id='$id' ORDER BY DR_id";  
                          $query_run = mysqli_query($connection, $query);
        
                          $row = mysqli_num_rows($query_run);
        
                          echo '<h3 class="counter">'.$row.'</h3>';
                         
                        ?>

                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <a href="index.php" style="text-decoration: none;"><i class="fa fa-sync mr-3 text-primary"></i></a>
                    <span>Mise a jour </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-12 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-users fa-3x text-info"></i>
                      <div class="text-right text-secondary">
                        <h5>Utilisateurs</h5>
                        
                        <?php
                          $id= $_SESSION['COR_id'];
                          $query = " SELECT DR_id,id FROM user WHERE DR_id ='$id' OR id='$id' ";  
                          $query_run = mysqli_query($connection, $query);
        
                          $row = mysqli_num_rows($query_run);
        
                          echo '<h3 class="counter">'.$row.'</h3>';
                         
                        ?>

                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <a href="index.php" style="text-decoration: none;"><i class="fa fa-sync mr-3 text-primary"></i></a>
                    <span>Mise a jour </span>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-12 p-2">
                <div class="card card-common">
                  <div class="card-body">
                    <div class="d-flex justify-content-between">
                      <i class="fas fa-desktop fa-3x text-secondary"></i>
                      <div class="text-right text-secondary">
                        <h5>Machines</h5>
                        
                        <?php
                          $id= $_SESSION['COR_id'];
                          $query = "SELECT id FROM materiel ORDER BY id"; 
                             
                          $query_run = mysqli_query($connection, $query);
        
                          $row = mysqli_num_rows($query_run);
        
                          echo '<h3 class="counter">'.$row.'</h3>';
                         
                        ?>

                      </div>
                    </div>
                  </div>
                  <div class="card-footer text-secondary">
                    <a href="index.php" style="text-decoration: none;"><i class="fa fa-sync mr-3 text-primary"></i></a>
                    <span>Mise a jour </span>
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
       $id= $_SESSION['COR_id'];
       $query = "SELECT U_id,id,DR_id,Dname,Uname FROM user WHERE DR_id='$id' ORDER BY id  ";
       $query_run = mysqli_query($connection, $query);


?>

    <!-- fin selectionement -->
     

    <section>
      <div class="container-fluid">
        <div class="row mb-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-12 col-12 mb-4 mb-xl-0">
                <h2 class="text-muted text-center mb-3">Agences</h2>
                <table class="table table-dark table-hover  text-center" id="employee_table">
                  <thead>
                    <tr class="text-muted">
                      <th>#</th>
                      <th>ID utilisateur <th>
                      <th>Nom du direction</th>
                      <th>Nom d'utilisateur</th>
                      
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
                      
                    </tr>
                    
                  <!-- fin récupération -->
                  <?php
                         }
                      } 
                      
                      else{
                      echo '<div class="alert alert-danger col" role="alert"> Acune information trouvé </div>';
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





