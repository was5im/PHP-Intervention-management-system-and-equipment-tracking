<?php
include('security.php');
require '../vendor/autoload.php';
use \PhpOffice\PhpSpreadsheet\Writer\Csv;
use \PhpOffice\PhpSpreadsheet\Reader\Xlsx;

// registration direction

if(isset($_POST['valider1']))
{
    $D_id = $_POST['D_id'];
    $U_id = $_POST['U_id'];
    $Dname = $_POST['Dname'];
    $Uname = $_POST['Uname'];
    $code = $_POST['code'];
    $Ccode = $_POST['Ccode'];
    $dateDir = date("Y-m-d"); 

       

    
    
    
     if($code === $Ccode)
        {
            $query = "INSERT INTO directions
             (
                 D_id,
                 U_id,
                 Dname,
                 Uname,
                 D_code,
                 date
                 
             ) VALUES (
                 '$D_id',
                 '$U_id',
                 '$Dname',
                 '$Uname',
                 '$code',
                 '$dateDir'
                 
                
             )";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['seccess'] = "ajout avec success";
                header('Location: indexTS.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: indexTS.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = '<div class="alert alert-danger col" role="alert"> Vérifier votre mot de passe </div>';
            $_SESSION['status_code'] = "warning";
            header('Location: indexTS.php');  
        }
    

}


if(isset($_POST['valider1']))
{
    
    $U_id = $_POST['U_id'];
    $id = $_POST['D_id'];
    $Dname = $_POST['Dname'];
    $Uname = $_POST['Uname'];
    $code = $_POST['code'];
    $Ccode = $_POST['Ccode'];
    $dateDir = date("Y-m-d"); 
    
    


     if($code === $Ccode)
        {
            $query = "INSERT INTO user
             (
                 
                 U_id,
                 id,
                 DR_id,
                 Uname,
                 Dname,
                 type,
                 U_code,
                 date
                 
             ) VALUES (
                 
                 '$U_id',
                 '$D_id',
                 '0',
                 '$Uname',
                 '$Dname',
                 'EMP',
                 '$code',
                 '$dateDir'
                 
                 
                
             )";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['seccess'] = "ajout avec success";
                header('Location: indexTS.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: indexTS.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = '<div class="alert alert-danger col" role="alert"> Vérifier votre mot de passe </div>';
            $_SESSION['status_code'] = "warning";
            header('Location: indexTS.php');  
        }
    

}



// end of registration


// registration directions regionale

if(isset($_POST['valider2']))
{
    $D_id = $_POST['D_id'];
    $U_id = $_POST['U_id'];
    $Dname = $_POST['Dname'];
    $Uname = $_POST['Uname'];
    $code = $_POST['code'];
    $Ccode = $_POST['Ccode'];
    $dateDir = date("Y-m-d"); 

       

    
    
    
     if($code === $Ccode)
        {
            $query = "INSERT INTO direction_r
             (
                 DR_id,
                 U_id,
                 Dname,
                 Uname,
                 DR_code,
                 'date'
                 
             ) VALUES (
                 '$D_id',
                 '$U_id',
                 '$Dname',
                 '$Uname',
                 '$code',
                 '$dateDir'
                 
                
             )";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['seccess'] = "ajout avec success";
                header('Location: indexTS.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: indexTS.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = '<div class="alert alert-danger col" role="alert"> Vérifier votre mot de passe </div>';
            $_SESSION['status_code'] = "warning";
            header('Location: indexTS.php');  
        }
    

}


if(isset($_POST['valider2']))
{
    
    $U_id = $_POST['U_id'];
    $id = $_POST['D_id'];
    $Dname = $_POST['Dname'];
    $Uname = $_POST['Uname'];
    $code = $_POST['code'];
    $Ccode = $_POST['Ccode'];
    $dateDir = date("Y-m-d"); 
    
    


     if($code === $Ccode)
        {
            $query = "INSERT INTO user
             (
                 
                 U_id,
                 id,
                 DR_id,
                 Uname,
                 Dname,
                 type,
                 U_code,
                 date
                 
             ) VALUES (
                 
                 '$U_id',
                 '$D_id',
                 '0',
                 '$Uname',
                 '$Dname',
                 'COR',
                 '$code',
                 '$dateDir'
                 
                 
                
             )";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['seccess'] = "ajout avec success";
                header('Location: indexTS.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: indexTS.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = '<div class="alert alert-danger col" role="alert"> Vérifier votre mot de passe </div>';
            $_SESSION['status_code'] = "warning";
            header('Location: indexTS.php');  
        }
    

}




// end of registration


// registration agences

if(isset($_POST['valider3']))
{
    $D_id = $_POST['D_id'];
    $DR_id = $_POST['DR_id'];
    $U_id = $_POST['U_id'];
    $Dname = $_POST['Dname'];
    $Uname = $_POST['Uname'];
    $code = $_POST['code'];
    $Ccode = $_POST['Ccode'];
    $dateDir = date("Y-m-d"); 
       

    
    
    
     if($code === $Ccode)
        {
            $query = "INSERT INTO agences
             (
                 A_id,
                 U_id,
                 DR_id,
                 Aname,
                 Uname,
                 A_code,
                 date
                 
             ) VALUES (
                 '$D_id',
                 '$U_id',
                 '$DR_id',
                 '$Dname',
                 '$Uname',
                 '$code',
                 '$dateDir'
                 
                
             )";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['seccess'] = "ajout avec success";
                header('Location: indexTS.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: indexTS.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = '<div class="alert alert-danger col" role="alert"> Vérifier votre mot de passe </div>';
            $_SESSION['status_code'] = "warning";
            header('Location: indexTS.php');  
        }
    

}



if(isset($_POST['valider3']))
{
    
    $U_id = $_POST['U_id'];
    $id = $_POST['D_id'];
    $DR_id = $_POST['DR_id'];
    $Dname = $_POST['Dname'];
    $Uname = $_POST['Uname'];
    $code = $_POST['code'];
    $Ccode = $_POST['Ccode'];
    $dateDir = date("Y-m-d"); 
    
    


     if($code === $Ccode)
        {
            $query = "INSERT INTO user
             (
                 
                 U_id,
                 id,
                 DR_id,
                 Uname,
                 Dname,
                 type,
                 U_code,
                 date
                 
             ) VALUES (
                 
                 '$U_id',
                 '$D_id',
                 '$DR_id',
                 '$Uname',
                 '$Dname',
                 'EMP',
                 '$code',
                 '$dateDir'
                 
                 
                
             )";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['seccess'] = "ajout avec success";
                header('Location: indexTS.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: indexTS.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = '<div class="alert alert-danger col" role="alert"> Vérifier votre mot de passe </div>';
            $_SESSION['status_code'] = "warning";
            header('Location: indexTS.php');  
        }
    

}





// end of registration


// user add


if(isset($_POST['valider4']))
{
    $D_id = $_POST['D_id'];
    $U_id = $_POST['U_id'];
    $username = $_POST['Uname'];
    $type = $_POST['Utype'];
    $code = $_POST['code'];
    $Ccode = $_POST['Ccode'];
    $dateUser = date("Y-m-d");

       
    if($code === $Ccode)
    {
    
            
            $query = "INSERT INTO user
             (
                 U_id,
                 id,
                 DR_id,
                 Uname,
                 Dname,
                 type,
                 U_code,
                 date
                 
             ) VALUES (
                 '$U_id',
                 '$D_id',
                 '0',
                 '$username',
                 'Direction des systemes d\'information',
                 '$type',
                 '$code',
                 '$dateUser'
                 
                
             )";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
               
                $_SESSION['seccess'] = "ajout avec success";
                header('Location: indexTS.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: addUser.php');  
      
            }
        }
    else 
        {
             $_SESSION['status'] = '<div class="alert alert-danger col" role="alert"> Vérifier votre mot de passe </div>';
             $_SESSION['status_code'] = "warning";
             header('Location: indexTS.php');  
        }        

}


// end of user add






// ajout materiels

if(isset($_POST['ajouter']))
{
    $Nserie = $_POST['Nserie'];
    $id_D = $_POST['id_D'];
    $marque = $_POST['marque'];
    $Mname = $_POST['Mname'];
    $Cpu = $_POST['Cpu'];
    $Ram = $_POST['Ram'];
    $Tram = $_POST['Tram'];
    $Disk = $_POST['Disk'];
    $Tdisk = $_POST['Tdisk'];
    $Dplus = $_POST['Dplus'];
    $dateM = date("Y-m-d");
    

       

    
    
    

            $query = "INSERT INTO materiel 
            (

                M_id,
                id,
                marque,
                Mname,
                cpu,
                ram,
                Tram,
                disk,
                Tdisk,
                Dplus,
                date
                
            ) VALUES (
                '$Nserie',
                '$id_D',
                '$marque',
                '$Mname',
                '$Cpu',
                '$Ram',
                '$Tram',
                '$Disk',
                '$Tdisk',
                '$Dplus',
                '$dateM'
                
            )";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['seccess'] = "ajout avec success";
                header('Location: parcinfo.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: parcinfo.php');  
            }
       
    

}


// fin ajout materiels



// ajout materiels stock

if(isset($_POST['ajouterStock']))
{
    $N_serie = $_POST['N_serie'];
    $id = '1101';
    $Smarque = $_POST['Smarque'];
    $Sname = $_POST['Sname'];
    $Scpu = $_POST['Scpu'];
    $Sram = $_POST['Sram'];
    $Stram = $_POST['Stram'];
    $Sdisk = $_POST['Sdisk'];
    $Stdisk = $_POST['Stdisk'];
    $Sdplus = $_POST['Sdplus'];
    $dateM = date("Y-m-d");
       

    
    
    

            $query = "INSERT INTO stock 
            (
                S_id,
                id,
                Smarque,
                Sname,
                Scpu,
                Sram,
                Stram,
                Sdisk,
                Stdisk,
                Sdplus,
                date
                
            ) VALUES (
                '$N_serie',
                '$id',
                '$Smarque',
                '$Sname',
                '$Scpu',
                '$Sram',
                '$Stram',
                '$Sdisk',
                '$Stdisk',
                '$Sdplus',
                '$dateM'
                
            )";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
                $_SESSION['seccess'] = "ajout avec success";
                header('Location: stock.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: stock.php');  
            }
       
    

}


// fin ajout materiels stock

//ajouter ensemble materiel parc direction

if(isset($_POST['ajouter_grp_mat']))
{
    
    $id =  $_POST['id']; 
    $date = date("Y-m-d");
    $file =$_FILES['excel'] ;
    $name = $file['name'];
    $tmp = $file['tmp_name'];
    echo $file['name'] ;
    
    if(empty($id) )
    {
        echo "<div class='alert alert-danger col'>veuiller ajouter l'id de la direction </div>";
    }
    else
    {
        if(!isset($_FILES['excel']))
        {
        echo "<div class='alert alert-danger col'>Veuillez ajouter le fichier Excel de l'ensemble du materiel</div>";
        }else
        {
            $file_ext= explode('.',$name);
		    $file_ext=strtolower(end($file_ext));
            if ($file_ext != "xlsx")
            {
                echo "<div class='alert alert-danger col'>votre extesion du fichier est incompatible veuillez enter un fichier .xlsx</div>";
            }
            else 
            {
                if($file['size'] > 1000000)
                {
                    echo "<div class='alert alert-danger col'>Votre fichier est tres volumineu !</div>"; 
                }
                else
                {
                    
                    $reader = new Xlsx();
                    $spreadsheet = $reader->load("$tmp");


                    $loadedSheetNames = $spreadsheet->getSheetNames();

                    $writer = new Csv($spreadsheet);

                    foreach($loadedSheetNames as $sheetIndex => $loadedSheetName)
                    {
                        $writer->setSheetIndex($sheetIndex);
                        $writer->save($loadedSheetName.'.csv');
                    }

                    $handle = fopen("$loadedSheetName.csv" , 'r');
                    while ( ($mydata = fgetcsv($handle , '1000' , ',')) !== FALSE ) 
                    {
                    $M_id = $mydata[0];
                    $marque= $mydata[1];
                    $Mname= $mydata[2];
                    $cpu= $mydata[3];
                    $ram= $mydata[4];
                    $Tram= $mydata[5];
                    $disk= $mydata[6];
                    $Tdisk= $mydata[7];
                    $Dplus= $mydata[8];
                    
                    //echo $mydata[0]. ' // '. $mydata[1]. ' // '. $mydata[2]. ' // '. $mydata[3]. ' // '. $mydata[4]. ' // '. $mydata[5]. ' // '. $mydata[6]. ' // '. $mydata[7]. ' // '. $mydata[8]. '</br>';
                    $query = "INSERT INTO materiel (M_id, id, marque, Mname, cpu, ram, Tram, disk, Tdisk, Dplus, date)  VALUES ('$M_id', '$id', '$marque', '$Mname', '$cpu', '$ram', '$Tram', '$disk', '$Tdisk', '$Dplus' , '$date')";
                    mysqli_query($connection, $query);
                    }
                    header('Location: parcInfo.php'); 
                    
                }
            }        
        }    
    }
}

//end ajout ensemble materiel pac directions

//ajouter ensemble materiel stock DSI

if(isset($_POST['ajouter_grp_mat_stock']))
{
    
    $id =  $_SESSION['TS_id']; 
    $date = date("Y-m-d");
    $file =$_FILES['excel'] ;
    $name = $file['name'];
    $tmp = $file['tmp_name'];
    echo $file['name'] ;
    
    if(empty($id) )
    {
        echo "<div class='alert alert-danger col'>veuiller ajouter l'id de la direction </div>";
    }
    else
    {
        if(!isset($_FILES['excel']))
        {
        echo "<div class='alert alert-danger col'>Veuillez ajouter le fichier Excel de l'ensemble du materiel</div>";
        }else
        {
            $file_ext= explode('.',$name);
		    $file_ext=strtolower(end($file_ext));
            if ($file_ext != "xlsx")
            {
                echo "<div class='alert alert-danger col'>votre extesion du fichier est incompatible veuillez enter un fichier .xlsx</div>";
            }
            else 
            {
                if($file['size'] > 1000000)
                {
                    echo "<div class='alert alert-danger col'>Votre fichier est tres volumineu !</div>"; 
                }
                else
                {
                    
                    $reader = new Xlsx();
                    $spreadsheet = $reader->load("$tmp");


                    $loadedSheetNames = $spreadsheet->getSheetNames();

                    $writer = new Csv($spreadsheet);

                    foreach($loadedSheetNames as $sheetIndex => $loadedSheetName)
                    {
                        $writer->setSheetIndex($sheetIndex);
                        $writer->save($loadedSheetName.'.csv');
                    }

                    $handle = fopen("$loadedSheetName.csv" , 'r');
                    while ( ($mydata = fgetcsv($handle , '1000' , ',')) !== FALSE ) 
                    {
                    $S_id = $mydata[0];
                    $Smarque= $mydata[1];
                    $Sname= $mydata[2];
                    $Scpu= $mydata[3];
                    $Sram= $mydata[4];
                    $Stram= $mydata[5];
                    $Sdisk= $mydata[6];
                    $Stdisk= $mydata[7];
                    $Sdplus= $mydata[8];
                    
                    //echo $mydata[0]. ' // '. $mydata[1]. ' // '. $mydata[2]. ' // '. $mydata[3]. ' // '. $mydata[4]. ' // '. $mydata[5]. ' // '. $mydata[6]. ' // '. $mydata[7]. ' // '. $mydata[8]. '</br>';
                    $query = "INSERT INTO stock (S_id, id, Smarque, Sname, Scpu, Sram, Stram, Sdisk, Stdisk, Sdplus, date)  VALUES ('$S_id', '$id', '$Smarque', '$Sname', '$Scpu', '$Sram', '$Stram', '$Sdisk', '$Stdisk', '$Sdplus' , '$date')";
                    mysqli_query($connection, $query);
                    }
                    header('Location: stock.php'); 
                    
                }
            }        
        }    
    }
}

//end ajout ensemble materiel stock DSI


// mise a jour materiel

if(isset($_POST['update_btn']))
{
    $id = $_POST['edit_id'];

    $ID = $_POST['edit_ID'];
    $Nserie = $_POST['edit_Nserie'];
    $marque = $_POST['edit_marque'];
    $Mname = $_POST['edit_Mname'];
    $Cpu = $_POST['edit_Cpu'];
    $Ram = $_POST['edit_Ram'];
    $Tram = $_POST['edit_Tram'];
    $Disk = $_POST['edit_Disk'];
    $Tdisk = $_POST['edit_Tdisk'];
    $Dplus = $_POST['edit_Dplus'];

    $query = "UPDATE materiel SET 


    M_id='$Nserie',
    id='$ID',
    marque='$marque',
    Mname='$Mname',
    cpu='$Cpu',
    ram='$Ram',
    Tram='$Tram',
    disk='$Disk',
    Tdisk='$Tdisk',
    Dplus='$Dplus'

    WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "mise a jour avec Succès";
        $_SESSION['status_code'] = "success";
        header('Location: parcInfo.php'); 
    }
    else
    {
        $_SESSION['status'] = "echec de mise a jour";
        $_SESSION['status_code'] = "error";
        header('Location: edit_materiel.php'); 
    }
}  




// end of materiel update 



// stock update


if(isset($_POST['update']))
{
    $id = $_POST['edit_id'];

    $Nserie = $_POST['edit_Nserie'];
    $marque = $_POST['edit_marque'];
    $Mname = $_POST['edit_Mname'];
    $Cpu = $_POST['edit_Cpu'];
    $Ram = $_POST['edit_Ram'];
    $Tram = $_POST['edit_Tram'];
    $Disk = $_POST['edit_Disk'];
    $Tdisk = $_POST['edit_Tdisk'];
    $Dplus = $_POST['edit_Dplus'];

    $query = "UPDATE stock SET 


    S_id='$Nserie',
    Smarque='$marque',
    Sname='$Mname',
    Scpu='$Cpu',
    Sram='$Ram',
    Stram='$Tram',
    Sdisk='$Disk',
    Stdisk='$Tdisk',
    Sdplus='$Dplus'

    WHERE S_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "mise a jour avec Succès";
        $_SESSION['status_code'] = "success";
        header('Location: stock.php'); 
    }
    else
    {
        $_SESSION['status'] = "echec de mise a jour";
        $_SESSION['status_code'] = "error";
        header('Location: stock.php'); 
    }
}  


// end stock update






// suppression materiel 



if(isset($_POST['delete']))
{
    $id = $_POST['delete_id'];

    $query = "INSERT INTO cimetiere 
    (
        C_id,
        id,
        Cmarque,
        Cname,
        Ccpu,
        Cram,
        Ctram,
        Cdisk,
        Ctdisk,
        Cdplus,
        CdateA
        
    ) SELECT 
        M_id,
        id,
        marque,
        Mname,
        cpu,
        ram,
        Tram,
        disk,
        Tdisk,
        Dplus,
        date

     FROM materiel WHERE M_id='$id'";

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: parcInfo.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: parcInfo.php'); 
    }    
}

if(isset($_POST['delete']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM materiel WHERE M_id='$id' ";
        
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: parcInfo.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: parcInfo.php'); 
    }    
}


// fin de suppression 


// suppression stock 

// suppression stock 

if(isset($_POST['delete_st']))
{
    $id = $_POST['delete_id'];
    

    $query = "INSERT INTO cimetiere 
    (
        C_id,
        id,
        Cmarque,
        Cname,
        Ccpu,
        Cram,
        Ctram,
        Cdisk,
        Ctdisk,
        Cdplus,
        CdateA
        
        
    ) SELECT 
        S_id,
        id,
        Smarque,
        Sname,
        Scpu,
        Sram,
        Stram,
        Sdisk,
        Stdisk,
        Sdplus,
        date
        

     FROM stock WHERE S_id='$id'";

    

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: parcInfo.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: parcInfo.php'); 
    }    
}

if(isset($_POST['delete_st']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM stock WHERE S_id='$id' ";
        
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: stock.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: stock.php'); 
    }    
}


// fin de suppression 


/* rependre inter

if(isset($_POST['rep_btn']))
{

    $id = $_POST['id'];
    $ID = $_SESSION['TS_U_id'];
    

    $query = "UPDATE intervention SET 


    id_inter='$ID' WHERE id='$id' ";

    

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "mise a jour avec Succès";
        $_SESSION['status_code'] = "success";
        header('Location: intervention.php'); 
    }
    else
    {
        $_SESSION['status'] = "echec de mise a jour";
        $_SESSION['status_code'] = "error";
        header('Location: intervention.php'); 
    }
    
}    


// end */


// rependre inter

if(isset($_POST['rep_btn']))
{

    $id = $_POST['id'];
    $ID = $_SESSION['TS_U_id'];
    $Solution = $_POST['Solution'];
    $dateR = date("Y-m-d H:i:s") ; 
    

    $query = "UPDATE intervention SET 
    id_inter='$ID',Solution='$Solution',dateR='$dateR' WHERE id='$id' ";

  

    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "mise a jour avec Succès";
        $_SESSION['status_code'] = "success";
        header('Location: intervention.php'); 
    }
    else
    {
        $_SESSION['status'] = "echec de mise a jour";
        $_SESSION['status_code'] = "error";
        header('Location: intervention.php'); 
    }
    
}    


// end 







?>


