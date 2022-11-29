<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<?php

if(isset($_POST['edit_bt']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM materiel WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>


<div class="container ">
      <div class="row"> 
       <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
         <div class="card cardColor">
           <h5 class="card-header">Details materiel</h5>
           <div class="card-body">
          
           <form action="code.php" method="POST">
           <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">   
            <div class="form-group">
              <label >N° Série<sup>*</sup></label><br>
              <?php echo $row['M_id']; ?>
            </div>
            <div class="form-group">
              <label >ID Direction/Agence<sup>*</sup></label><br>
              <?php echo $row['id']; ?>
            </div>
            <div class="form-group">
              <label >Marque<sup>*</sup></label><br>
              <?php echo $row['marque']; ?>
            </div>
            <div class="form-group">
                <label >Nom du materiel<sup>*</sup></label><br>
                <?php echo $row['Mname']; ?>
            </div>
            <div class="form-groupe radiobtn">
                <label>Processeur<sup>*</sup></label><br>

                <?php echo $row['cpu']; ?>
                <label >Intel i3</label>
                <?php echo $row['cpu']; ?>
                <label >Intel i5</label>
                <?php echo $row['cpu']; ?>
                <label >Intel i7</label>
                <?php echo $row['cpu']; ?>
                <label >Intel i9</label>
            </div><hr>
              <div class="form-groupe radiobtn">
                <label>Mémoire vive (RAM)<sup>*</sup></label><br>

               <?php echo $row['ram']; ?>
               <label >4GB</label>
               <?php echo $row['ram']; ?>
               <label >8GB</label>
               <?php echo $row['ram']; ?>
               <label >16GB</label>
            </div><hr>
            <div class="form-groupe radiobtn">
                <label>Type de Mémoire vive<sup>*</sup></label><br>

               <?php echo $row['Tram']; ?>
               <label >DDR3L-SDRAM</label>
               <?php echo $row['Tram']; ?>
               <label >DDR4L-SDRAM</label>
               
            </div><hr>
            <div class="form-groupe radiobtn">
                <label>Capacité de stockage principale<sup>*</sup></label><br>

               <?php echo $row['disk']; ?>
               <label >256GB</label>
               <?php echo $row['disk']; ?>
               <label >500GB</label>
               <?php echo $row['disk']; ?>
               <label >1TB</label>
            </div><hr>
            <div class="form-groupe radiobtn">
                <label>Type de stockage principale<sup>*</sup></label><br>

               <?php echo $row['Tdisk']; ?>
               <label >SSD</label>
               <?php echo $row['Tdisk']; ?>
               <label >HDD</label>
               
            </div><hr>
            <div class="form-groupe radiobtn">
                <label>Seconde baie disque<sup>*</sup></label><br>

               <?php echo $row['Dplus']; ?>
               <label >OUI</label>
               <?php echo $row['Dplus']; ?>
               <label >NON</label>
               
            </div><hr>
            
           
            <button type="reset" class="btn btn-danger"><a href="parcinfo.php">Retour</a></button>

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