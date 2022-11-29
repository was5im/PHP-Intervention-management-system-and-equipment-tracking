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
          
           <form action="code.php" method="POST" id="form_msg" enctype="multipart/form-data">
            <div class="form-group">
              <label >Objet<sup>*</sup></label>
              <input type="text" class="form-control" name="objet" id="objet" placeholder="Entrez un objet">
            </div>
            <div class="form-group">
              <label >Descreption<sup>*</sup></label>
              <textarea  class="form-control" name="desc" id="desc" placeholder="Entrez une descreption" rows="5" cols="50"></textarea>
            </div>
            <div class="form-group">
              <label >Ajouter un document pdf <img src="../images/pdf.png" > <sup>*</sup></label><input type="file" name="pdf" id="pdf" class="form-control " style="line-height:0.8rem;font-color:red;background-color:#DDDEDD;">
            </div>

            <div id="err"></div>


            <button type="submit" class="btn btn-success" name="ajouter_int">Ajouter</button>
            <button type="reset" class="btn btn-danger"><a href="intervention.php">Annuler</a></button>

           </form>
          </div>
       </div>
     </div>
   </div>
  </div>


<!-- error messages -->


<script type="text/javascript">
    document.getElementById("form_msg").onsubmit = function(e)
    {
        if(document.getElementById("objet").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs Objet </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("desc").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs descreption </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("pdf").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs du fichier PDF </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
    }    

</script>          


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>