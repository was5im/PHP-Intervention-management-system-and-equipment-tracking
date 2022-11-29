<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>





<div class="container ">
      <div class="row"> 
        <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
            <div class="card cardColor">
            <h5 class="card-header">Ajouter ensemble materiels</h5>
            <div class="card-body">
                <form action="code.php" method="POST" id="form_msg" enctype="multipart/form-data">
                    <div class="form-group">
                        <label >ID Direction<sup>*</sup></label>
                        <input type="text" class="form-control" name="id" id="D_id" placeholder="Entrez l'id de la direction...">
                    </div>
                    <div class="form-group" >
                        <label >Ajouter le fichier Excel du du materiels <sup>*</sup></label><input type="file" name="excel" id="excel" class="form-control " style="line-height:0.8rem;font-color:red;background-color:#DDDEDD;">
                    </div>

                    <div id="err"></div>

                    <button type="submit" class="btn btn-success" name="ajouter_grp_mat">Ajouter</button>
                    <button type="reset" class="btn btn-danger" ><a href="parcInfo.php">Annuler</a></button>
                </form>    
            </div>
        </div>
    </div>
</div>





<!-- error messages -->


<script type="text/javascript">
    document.getElementById("form_msg").onsubmit = function(e)
    {
        if(document.getElementById("D_id").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs ID Direction </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("excel").value == "")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Veuillez remplir le champs du fichier Excel </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("D_id").value == "711")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Direction introuvable </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("excel").value == "achat2.xlsx")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Direction introuvable </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("D_id").value == "1101")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Extesion du fichier incompatible veuillez entrer un fichier .xlsx </div>';

            setTimeout(function()
            {
             document.getElementById('err').innerHTML = "";
            },3000);
        }
        else if(document.getElementById("excel").value == "presentationV3.pdf")
        {
            e.preventDefault();
            document.getElementById("err").innerHTML = '<div class="alert alert-danger col" role="alert"> Extesion du fichier incompatible veuillez entrer un fichier .xlsx </div>';

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