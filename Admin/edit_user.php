<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<?php

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_user'];
    
    $query = "SELECT * FROM user WHERE U_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>


<div class="container ">
      <div class="row"> 
       <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
         <div class="card cardColor">
           <h5 class="card-header">Modification Utilisateur</h5>
           <div class="card-body">
          
           <form action="code.php" method="POST">
           <input type="hidden" name="edit_user" value="<?php echo $row['U_id']; ?>">   
           <div class="form-group">
              <label >ID Direction/Agence<sup>*</sup></label>
              <input type="text" class="form-control" name="edit_ID" value="<?php echo $_SESSION['DR_id'] ?>" readonly="true">
            </div>
            <div class="form-group">
              <label >ID Utilisateur<sup>*</sup></label>
              <input type="text" class="form-control" name="edit_U_id" value="<?php echo $row['U_id']; ?>" placeholder="Entrez le numéo de série...">
            </div>
            
            <div class="form-group">
              <label >Nom Utilisateur<sup>*</sup></label>
              <input type="text" class="form-control" name="edit_Uname" value="<?php echo $row['Uname']; ?>" placeholder="Entrez la marque du materiel...">
            </div>

            <div class="form-group">
              <label >Code<sup>*</sup></label>
              <input type="text" class="form-control" name="edit_U_code" value="<?php echo $row['U_code']; ?>" placeholder="Entrez la marque du materiel...">
            </div>
           
               
            
            
            <button type="submit" class="btn btn-primary" name="update_btn">mettre a jour</button>
            <button type="reset" class="btn btn-danger"><a href="techniciens.php">Annuler</a></button>

           </form>
          </div>
       </div>
     </div>
   </div>
  </div>












 <?php
    }

}  

?>






<?php
include('includes/scripts.php');
include('includes/footer.php');
?>