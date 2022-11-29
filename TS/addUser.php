<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


      
<div class="container ">
      <div class="row"> 
       <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
         <div class="card cardColor">
           <h5 class="card-header">Ajout Utilisateur</h5>
           <div class="card-body">
          
           <form action="code.php" method="POST">
           <div class="form-group">
              <label >ID Direction<sup>*</sup></label>
              <input type="text" class="form-control" name="D_id" placeholder="Entrez id direction...">
            </div>
            <div class="form-group">
              <label >ID utilisateur<sup>*</sup></label>
              <input type="text" class="form-control" name="U_id" placeholder="Entrez id direction...">
            </div>
            <div class="form-group">
              <label >Nom d'utilisateur<sup>*</sup></label>
              <input type="text" class="form-control" name="Uname" placeholder="Entrez le nom d'utilisateur...">
            </div>
            
            <div class="form-groupe">
                <label>Type d'utilisateur<sup>*</sup></label><br>
                <select name="Utype" id="Utype" class="form-control">
                  <option value="DR">Directeur</option>
                  <option value="CDD">Chef de departement</option>
                  <option value="TS">Technicien</option>
                </select>
            </div>
            <div class="form-group">
              <label >Code<sup>*</sup></label>
              <input type="password" class="form-control" name="code" placeholder="Entrez le nom d'utilisateur...">
            </div>
            <div class="form-group">
              <label >Confirmation du code<sup>*</sup></label>
              <input type="password" class="form-control" name="Ccode" placeholder="Entrez le nom d'utilisateur...">
            </div>
            <button type="submit" class="btn btn-success" name="valider4">Valider</button>
            <button type="reset" class="btn btn-danger"><a href="index.php">Annuler</a></button>
            

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