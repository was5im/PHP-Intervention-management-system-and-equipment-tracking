<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<!-- tables -->


     <!-- selection des données from database -->

     <?php

        $query = "SELECT U_id,Uname,type FROM user WHERE type= 'TS' ORDER BY id  ";
        $query_run = mysqli_query($connection, $query);

     ?>

    <!-- fin selectionement -->
     

    <section>
      <div class="container-fluid">
        <div class="row mb-5 mt-5">
          <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="row align-items-center">
              <div class="col-xl-12 col-12 mb-4 mb-xl-0">
                <h2 class="text-muted text-center mb-3 mt-3">Techniciens DSI</h2>
                <table class="table table-dark table-hover  text-center">
                  <thead>
                    <tr class="text-muted">
                      
                      <th>ID utilisateur <th>
                      <th>Nom d'utilisateur</th>
                      <th>interventions accomplit </th>
                      <th>Modifier</th>
                      <th>Supprimer</th>
                    </tr>
                  </thead>


                  <?php
                     if(mysqli_num_rows($query_run) > 0)        
                      {
                        while($row = mysqli_fetch_assoc($query_run))
                         {  
                           
                          $id_user = $row['U_id'] ;
                          $inter =  mysqli_num_rows(mysqli_query($connection,"SELECT id_inter FROM intervention WHERE id_inter = $id_user ORDER BY id  ")) ;
                  ?>   
                  <!-- récupération des données ajouté in the database --> 
                   
                    <tr>
                      <td><?php echo $row['U_id']; ?></td>
                      <td></td>
                      <td><?php echo $row['Uname']; ?></td>
                      
                      <td><?php  echo $inter ; ?>  </td> 
                      
                      <td>
                      
                       <form action="edit_user.php" method="POST">  
                         <input type="hidden" name="edit_user" value="<?php echo $row['U_id']; ?>">
                         <button type="submit" class="btn btn-success btn-sm" name="edit_btn">Modifier</button>
                       </form>
                      </td>
                      <td>
                        <form action="code.php" method="POST">
                          <input type="hidden" name="delete_user" value="<?php echo $row['U_id']; ?>">
                          <button type="submit" class="btn btn-danger btn-sm" name="delete_TS">Supprimer</button>
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
