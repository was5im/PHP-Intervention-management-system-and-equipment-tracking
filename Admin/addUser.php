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
          
           <form action="code.php" method="POST" id="form_msg">
           <div class="form-group">
              <label >ID Direction<sup>*</sup></label>
              <input type="text" class="form-control" name="id" id="D_id" placeholder="Entrez l'ID du direction" value="<?php echo $_SESSION['DR_id'] ?>" readonly="true">
            </div>
            <div class="form-group">
              <label >ID utilisateur<sup>*</sup></label>
              <input type="text" class="form-control" name="U_id" id="U_id" placeholder="Entrez id direction...">
            </div>
            <div class="form-group">
              <label >Nom d'utilisateur<sup>*</sup></label>
              <input type="text" class="form-control" name="Uname" id="Uname" placeholder="Entrez le nom d'utilisateur...">
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
              <input type="password" class="form-control" name="code" id="code" placeholder="Entrez le nom d'utilisateur...">
            </div>
            <div class="form-group">
              <label >Confirmation du code<sup>*</sup></label>
              <input type="password" class="form-control" name="Ccode" id="Ccode" placeholder="Entrez le nom d'utilisateur...">
            </div>

           <div id="err"></div>

            <button type="submit" class="btn btn-success" name="valider4">Valider</button>
            <button type="reset" class="btn btn-danger"><a href="index.php">Annuler</a></button>
            

           </form>
          </div>
       </div>
     </div>
   </div>
  </div> 

  
<!-- affichage des messages success/error -->



<script type="text/javascript">
    document.getElementById("form_msg").onsubmit = function(e)
    {
         if(document.getElementById("U_id").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs ID Utilisateur </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("Uname").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs Nom Utilisateur </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("code").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs Code </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("Ccode").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs Confirmation du code </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("Ccode").value != document.getElementById("code").value)
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez vérifier votre code </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
      
    }
</script>


<!-- end -->  

  


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>