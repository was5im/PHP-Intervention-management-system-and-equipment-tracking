<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>





<div class="container ">
      <div class="row"> 
       <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
         <div class="card cardColor">
           <h5 class="card-header">Fiche d'intervention</h5>
           <div class="card-body">
          
           <form action="code.php" method="POST">
           <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
            <div class="form-group">
              <label >ID direction<sup>*</sup></label>
              <input type="text" class="form-control" name="edit_Did" placeholder="Entrez l'ID de la direction...">
            </div>
            <div class="form-group">
              <label >Objet<sup>*</sup></label>
              <input type="text" class="form-control" name="edit_objet" placeholder="Entrez un objet">
            </div>
            <div class="form-group">
              <label >Descreption<sup>*</sup></label>
              <textarea  class="form-control" name="edit_desc" placeholder="Entrez une descreption" rows="5" cols="50"></textarea>
            </div>
            <div class="form-group">
              <label >Date<sup>*</sup></label>
              <input type="date"  class="form-control" name="edit_date" >
            </div>
           
            <button type="submit" class="btn btn-success" name="update_int">mettre a jour</button>
            <button type="reset" class="btn btn-danger"><a href="intervention.php">Annuler</a></button>

           </form>
          </div>
       </div>
     </div>
   </div>
  </div>


 


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>