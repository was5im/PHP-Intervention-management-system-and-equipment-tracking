<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>

<div class="container ">
      <div class="row"> 
       <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
         <div class="card cardColor">
           <h5 class="card-header">Ajouter materiel (Stock)</h5>
           <div class="card-body">
          
           <form action="code.php" method="POST" id="form_msg">
        
           <div class="form-group">
              <label >ID Direction<sup>*</sup></label>
              <input type="text" class="form-control" name="id" id="id_D" placeholder="Entrez l'ID du direction" value="<?php echo $_SESSION['TS_id'] ?>" readonly="true">
            </div>
            <div class="form-group">
              <label >N° Série<sup>*</sup></label>
              <input type="text" class="form-control" name="N_serie" id="N_serie" placeholder="Entrez le numéo de série...">
            </div>

            <div class="form-group">
              <label >Marque<sup>*</sup></label>
              <input type="text" class="form-control" name="Smarque" id="Smarque" placeholder="Entrez la marque du materiel...">
            </div>
            <div class="form-group">
                <label >Nom du materiel<sup>*</sup></label>
                <input type="text" class="form-control" name="Sname" id="Sname" placeholder="Entrez le nom du materiel...">
            </div>
            <div class="form-groupe radiobtn">
                <label>Processeur<sup>*</sup></label><br>

                <input type="radio" id="Scpu" name="Scpu" value="Intel i3">
                <label >Intel i3</label>
                <input type="radio" id="Scpu" name="Scpu" value="Intel i5">
                <label >Intel i5</label>
                <input type="radio" id="Scpu" name="Scpu" value="Intel i7">
                <label >Intel i7</label>
                <input type="radio" id="Scpu" name="Scpu" value="Intel i9">
                <label >Intel i9</label>
            </div><hr>
              <div class="form-groupe radiobtn">
                <label>Mémoire vive (RAM)<sup>*</sup></label><br>

               <input type="radio" id="Sram" name="Sram" value="4GB">
               <label >4GB</label>
               <input type="radio" id="Sram" name="Sram" value="8GB">
               <label >8GB</label>
               <input type="radio" id="Sram" name="Sram" value="16GB">
               <label >16GB</label>
            </div><hr>
            <div class="form-groupe radiobtn">
                <label>Type de Mémoire vive<sup>*</sup></label><br>

               <input type="radio" id="Stram" name="Stram" value="DDR3L-SDRAM">
               <label >DDR3L-SDRAM</label>
               <input type="radio" id="Stram" name="Stram" value="DDR4L-SDRAM">
               <label >DDR4L-SDRAM</label>
               
            </div><hr>
            <div class="form-groupe radiobtn">
                <label>Capacité de stockage principale<sup>*</sup></label><br>

               <input type="radio" id="Sdisk" name="Sdisk" value="256GB">
               <label >256GB</label>
               <input type="radio" id="Sdisk" name="Sdisk" value="500GB">
               <label >500GB</label>
               <input type="radio" id="Sdisk" name="Sdisk" value="1TB">
               <label >1TB</label>
            </div><hr>
            <div class="form-groupe radiobtn">
                <label>Type de stockage principale<sup>*</sup></label><br>

               <input type="checkbox" id="Stdisk" name="Stdisk" value="SSD">
               <label >SSD</label>
               <input type="checkbox" id="Stdisk" name="Stdisk" value="HDD">
               <label >HDD</label>
               
            </div><hr>
            <div class="form-groupe radiobtn">
                <label>Seconde baie disque<sup>*</sup></label><br>

               <input type="radio" id="Sdplus" name="Sdplus" value="OUI">
               <label >OUI</label>
               <input type="radio" id="Sdplus" name="Sdplus" value="NON">
               <label >NON</label>
               
            </div><hr>

            <p id="err"></p>
            
            
            <button type="submit" class="btn btn-success" name="ajouterStock">Ajouter</button>
            <button type="reset" class="btn btn-danger"><a href="stock.php">Annuler</a></button>

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
        if(document.getElementById("N_serie").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs N° Série  </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("Smarque").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs marque </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("Sname").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs nom du materiel </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("Scpu").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs Processeur </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("Sram").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs Mémoire vive (RAM) </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("Stram").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs Type de Mémoire vive </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("Sdisk").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs Capacité de stockage principale </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("Stdisk").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs Type de stockage principale </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("Sdplus").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs Seconde baie disque </div>';

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