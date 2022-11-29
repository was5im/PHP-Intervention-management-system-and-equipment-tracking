<?php
include('security.php');
include('includes/header.php');
include('includes/navbar.php');
?>


<?php

if(isset($_POST['edit_bt']))
{
    $id = $_POST['edit_id'];
    
    $query = "SELECT * FROM materiel WHERE M_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    foreach($query_run as $row)
    {
        ?>


<div class="container ">
      <div class="row"> 
       <div class="col-xl-10 col-lg-9 col-md-8 ml-auto">
         <div class="card cardColor">
           <h5 class="card-header">Modification materiel</h5>
           <div class="card-body">
          
           <form action="code.php" method="POST">
           <input type="hidden" name="edit_id" value="<?php echo $row['M_id']; ?>">   
           <div class="form-group">
              <label >ID Direction/Agence<sup>*</sup></label>
              <input type="text" class="form-control" name="edit_ID" value="<?php echo $row['id']; ?>" placeholder="Entrez le numéo de série...">
            </div>
            <div class="form-group">
              <label >N° Série<sup>*</sup></label>
              <input type="text" class="form-control" name="edit_Nserie" value="<?php echo $row['M_id']; ?>" placeholder="Entrez le numéo de série...">
            </div>
            
            <div class="form-group">
              <label >Marque<sup>*</sup></label>
              <input type="text" class="form-control" name="edit_marque" value="<?php echo $row['marque']; ?>" placeholder="Entrez la marque du materiel...">
            </div>
            <div class="form-group">
                <label >Nom du materiel<sup>*</sup></label>
                <input type="text" class="form-control" name="edit_Mname" value="<?php echo $row['Mname']; ?>" placeholder="Entrez le nom du materiel...">
            </div>
            <div class="form-groupe radiobtn">
                <label>Processeur<sup>*</sup></label><br>
                <input type="radio" id="edit_Cpu" name="edit_Cpu" value="Intel i3 " <?php if($row['cpu']=="Intel i3"){ echo "checked";}?>>
                
                <label >Intel i3</label>
                <input type="radio"  id="edit_Cpu" name="edit_Cpu" value="Intel i5" <?php if($row['cpu']=="Intel i5"){ echo "checked";}?>>
                
                <label >Intel i5</label>
                <input type="radio"  id="edit_Cpu" name="edit_Cpu" value="Intel i7" <?php if($row['cpu']=="Intel i7"){ echo "checked";}?>>
                
                <label >Intel i7</label>
                <input type="radio"  id="edit_Cpu" name="edit_Cpu" value="Intel i9" <?php if($row['cpu']=="Intel i9"){ echo "checked";}?>>
                
                <label >Intel i9</label>
                
              
                
                
                
                
            </div><hr>
              <div class="form-groupe radiobtn">
                <label>Mémoire vive (RAM)<sup>*</sup></label><br>

               <input type="radio" id="edit_Ram" name="edit_Ram" value="4GB" <?php if($row['ram']=="4GB"){ echo "checked";}?>>
               <label >4GB</label>
               <input type="radio" id="edit_Ram" name="edit_Ram" value="8GB" <?php if($row['ram']=="8GB"){ echo "checked";}?>>
               <label >8GB</label>
               <input type="radio" id="edit_Ram" name="edit_Ram" value="16GB" <?php if($row['ram']=="16GB"){ echo "checked";}?>>
               <label >16GB</label>
            </div><hr>
            <div class="form-groupe radiobtn">
                <label>Type de Mémoire vive<sup>*</sup></label><br>

               <input type="radio" id="edit_Tram" name="edit_Tram" value="DDR3L-SDRAM" <?php if($row['Tram']=="DDR3L-SDRAM"){ echo "checked";}?>>
               <label >DDR3L-SDRAM</label>
               <input type="radio" id="edit_Tram" name="edit_Tram" value="DDR4L-SDRAM" <?php if($row['Tram']=="DDR4L-SDRAM"){ echo "checked";}?>>
               <label >DDR4L-SDRAM</label>
               
            </div><hr>
            <div class="form-groupe radiobtn">
                <label>Capacité de stockage principale<sup>*</sup></label><br>

               <input type="radio" id="edit_Disk" name="edit_Disk" value="256GB" <?php if($row['disk']=="256GB"){ echo "checked";}?>>
               <label >256GB</label>
               <input type="radio" id="edit_Disk" name="edit_Disk" value="500GB" <?php if($row['disk']=="500GB"){ echo "checked";}?>>
               <label >500GB</label>
               <input type="radio" id="edit_Disk" name="edit_Disk" value="1TB"  <?php if($row['disk']=="1TB"){ echo "checked";}?>>
               <label >1TB</label>
            </div><hr>
            <div class="form-groupe radiobtn">
                <label>Type de stockage principale<sup>*</sup></label><br>

               <input type="checkbox" id="edit_Tdisk" name="edit_Tdisk" value="SSD" <?php if($row['Tdisk']=="SSD"){ echo "checked";}?>>
               <label >SSD</label>
               <input type="checkbox" id="edit_Tdisk" name="edit_Tdisk" value="HDD" <?php if($row['Tdisk']=="HDD"){ echo "checked";}?>>
               <label >HDD</label>
               
            </div><hr>
            <div class="form-groupe radiobtn">
                <label>Seconde baie disque<sup>*</sup></label><br>

               <input type="radio" id="edit_Dplus" name="edit_Dplus" value="OUI" <?php if($row['Dplus']=="OUI"){ echo "checked";}?>>
               <label >OUI</label>
               <input type="radio" id="edit_Dplus" name="edit_Dplus" value="NON" <?php if($row['Dplus']=="NON"){ echo "checked";}?>>
               <label >NON</label>
               
            </div><hr>
            
            <button type="submit" class="btn btn-primary" name="update_btn01">mettre a jour</button>
            <button type="reset" class="btn btn-danger"><a href="parcinfo.php">Annuler</a></button>

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