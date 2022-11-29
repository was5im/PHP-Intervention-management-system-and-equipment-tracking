<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<?php

if(isset($_POST['edit_btn']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM user WHERE id='$id'";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>

        


<div class="container ">
      <div class="row"> 
       <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
         <div class="card cardColor">
           <h5 class="card-header">Modification d'inscreption</h5>
           <div class="card-body">
           
           <form action="code.php" method="POST">
            <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
              <label >ID direction<sup>*</sup></label>
              <input type="text" class="form-control" name="edit_Did" value="<?php echo $row['id']; ?>" placeholder="Entrez id direction...">
            </div>
            <div class="form-group">
              <label >ID utilisateur<sup>*</sup></label>
              <input type="text" class="form-control" name="edit_Uid" value="<?php echo $row['U_id']; ?>" placeholder="Entrez le nom de la direction...">
            </div>
            <div class="form-group">
              <label >Nom de direction<sup>*</sup></label>
              <input type="text" class="form-control" name="edit_Dname" value="<?php echo $row['Dname']; ?>" placeholder="Entrez le nom de la direction...">
            </div>
            <div class="form-group">
              <label >Nom d'utilisateur<sup>*</sup></label>
              <input type="text" class="form-control" name="edit_Uname" value="<?php echo $row['Uname']; ?>" placeholder="Entrez le nom d'utilisateur...">
            </div>
            <div class="form-group">
                <label >Code<sup>*</sup></label>
                <input type="text" class="form-control" name="edit_code" value="<?php echo $row['U_code']; ?>" placeholder="Entrez votre code...">
            </div>
           
            
            
            <button type="submit" class="btn btn-primary" name="update1">mettre a jour</button>
            <button type="reset" class="btn btn-danger"><a href="index.php">Annuler</a></button>
            

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