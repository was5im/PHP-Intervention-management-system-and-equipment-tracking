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
                header('Location: index.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: index.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = '<div class="alert alert-danger col" role="alert"> Vérifier votre mot de passe </div>';
            $_SESSION['status_code'] = "warning";
            header('Location: index.php');  
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
                header('Location: index.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: index.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = '<div class="alert alert-danger col" role="alert"> Vérifier votre mot de passe </div>';
            $_SESSION['status_code'] = "warning";
            header('Location: index.php');  
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
                header('Location: index.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: index.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = '<div class="alert alert-danger col" role="alert"> Vérifier votre mot de passe </div>';
            $_SESSION['status_code'] = "warning";
            header('Location: index.php');  
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
                header('Location: index.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: index.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = '<div class="alert alert-danger col" role="alert"> Vérifier votre mot de passe </div>';
            $_SESSION['status_code'] = "warning";
            header('Location: index.php');  
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
                header('Location: index.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: index.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = '<div class="alert alert-danger col" role="alert"> Vérifier votre mot de passe </div>';
            $_SESSION['status_code'] = "warning";
            header('Location: index.php');  
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
                header('Location: index.php');
            }
            else 
            {
                $_SESSION['status'] = "erreur lors de l'ajout";
                $_SESSION['status_code'] = "error";
                header('Location: index.php');  
            }
        }
        else 
        {
            $_SESSION['status'] = '<div class="alert alert-danger col" role="alert"> Vérifier votre mot de passe </div>';
            $_SESSION['status_code'] = "warning";
            header('Location: index.php');  
        }
    

}





// end of registration


// user add


if(isset($_POST['valider4']))
{

    $id = $_SESSION['DR_id'];

    $U_id = $_POST['U_id'];
    $username = $_POST['Uname'];
    $type = $_POST['Utype'];
    $code = $_POST['code'];
    $Ccode = $_POST['Ccode'];
    $dateU = date("Y-m-d");

       
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
                 '$id',
                 '0',
                 '$username',
                 'Direction des systemes d\'information',
                 '$type',
                 '$code',
                 '$dateU'
                 
                
             )";
            $query_run = mysqli_query($connection, $query);
            
            if($query_run)
            {
                // echo "Saved";
               
                $_SESSION['seccess'] = "ajout avec success";
                header('Location: index.php');
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
             header('Location: index.php');  
        }        

}


// end of user add


// edit direction


if(isset($_POST['update1']))
{
    $id = $_POST['edit_id'];

    $D_id = $_POST['edit_Did'];
    $U_id = $_POST['edit_Uid'];
    $Dname = $_POST['edit_Dname'];
    $Uname = $_POST['edit_Uname'];
    $code = $_POST['edit_code'];
   

    $query = "UPDATE directions,user SET 
    directions.D_id= '$D_id',
    directions.U_id= '$U_id',
    directions.Dname='$Dname',
    directions.Uname='$Uname',
    directions.D_code='$code',
    user.id= '$D_id',
    user.U_id= '$U_id',
    user.Uname='$Uname',
    user.Dname= '$Dname',
    user.U_code='$code'

    
    
    WHERE directions.D_id='$id' AND user.id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "mise a jour avec Succès";
        $_SESSION['status_code'] = "success";
        header('Location: index.php'); 
    }
    else
    {
        $_SESSION['status'] = "echec de mise a jour";
        $_SESSION['status_code'] = "error";
        header('Location: editDirection.php'); 
    }
}  


if(isset($_POST['update1']))
{
    $id = $_POST['edit_id'];

    $D_id = $_POST['edit_Did'];
    $U_id = $_POST['edit_Uid'];
    $Dname = $_POST['edit_Dname'];
    $Uname = $_POST['edit_Uname'];
    $code = $_POST['edit_code'];
   

    $query = "UPDATE direction_r,user SET 
    direction_r.DR_id= '$D_id',
    direction_r.U_id= '$U_id',
    direction_r.Dname='$Dname',
    direction_r.Uname='$Uname',
    direction_r.DR_code='$code',
    user.id= '$D_id',
    user.U_id= '$U_id',
    user.Uname='$Uname',
    user.Dname= '$Dname',
    user.U_code='$code'
    
    
    WHERE direction_r.DR_id='$id'  AND user.id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "mise a jour avec Succès";
        $_SESSION['status_code'] = "success";
        header('Location: index.php'); 
    }
    else
    {
        $_SESSION['status'] = "echec de mise a jour";
        $_SESSION['status_code'] = "error";
        header('Location: editDirection.php'); 
    }
}  



if(isset($_POST['update1']))
{
    $id = $_POST['edit_id'];

    $D_id = $_POST['edit_Did'];
    $U_id = $_POST['edit_Uid'];
    $Dname = $_POST['edit_Dname'];
    $Uname = $_POST['edit_Uname'];
    $code = $_POST['edit_code'];
   

    $query = "UPDATE agences,user SET 
    agences.A_id= '$D_id',
    agences.U_id= '$U_id',
    agences.Aname='$Dname',
    agences.Uname='$Uname',
    agences.A_code='$code',
    user.id= '$D_id',
    user.U_id= '$U_id',
    user.Uname='$Uname',
    user.Dname= '$Dname',
    user.U_code='$code'
    
    
    WHERE agences.A_id='$id' AND user.id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "mise a jour avec Succès";
        $_SESSION['status_code'] = "success";
        header('Location: index.php'); 
    }
    else
    {
        $_SESSION['status'] = "echec de mise a jour";
        $_SESSION['status_code'] = "error";
        header('Location: editDirection.php'); 
    }
}  



// end 




// edit user 


if(isset($_POST['update_btn']))
{
    $id = $_POST['edit_user'];

    $U_id = $_POST['edit_U_id'];
    $Uname = $_POST['edit_Uname'];
    $code = $_POST['edit_U_code'];
   

    $query = "UPDATE user SET 
    
    
    U_id= '$U_id',
    Uname='$Uname',
    U_code='$code'
    
    
    WHERE U_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "mise a jour avec Succès";
        $_SESSION['status_code'] = "success";
        header('Location: techniciens.php'); 
    }
    else
    {
        $_SESSION['status'] = "echec de mise a jour";
        $_SESSION['status_code'] = "error";
        header('Location: edit_user.php'); 
    }
}  








// end 



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
    
    $id = $_SESSION['DR_id'];


    $N_serie = $_POST['N_serie'];
    $Smarque = $_POST['Smarque'];
    $Sname = $_POST['Sname'];
    $Scpu = $_POST['Scpu'];
    $Sram = $_POST['Sram'];
    $Stram = $_POST['Stram'];
    $Sdisk = $_POST['Sdisk'];
    $Stdisk = $_POST['Stdisk'];
    $Sdplus = $_POST['Sdplus'];
    $date = date("Y-m-d");

       

    
    
    

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
                '$date'
                
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
                header('Location: index.php');  
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

//end ajout ensemble materiel

//ajouter ensemble materiel stock DSI

if(isset($_POST['ajouter_grp_mat_stock']))
{
    
    $id =  $_SESSION['DR_id']; 
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


// suppression données 

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    $query1 = "SELECT * FROM materiel WHERE id='$id' " ;
    $query_run = mysqli_query($connection, $query1);
    $nbr = mysqli_num_rows($query_run);
    while($nbr > 0 && $row = mysqli_fetch_assoc($query_run))
    {
        $M_id = $row['M_id'] ; 
        $marque = $row['marque'];
        $Mname = $row['Mname'];
        $cpu = $row['cpu'];
        $ram = $row['ram'];
        $Tram = $row['Tram'];
        $disk = $row['disk'];
        $Tdisk = $row['Tdisk'];
        $Dplus = $row['Dplus'] ;
        $date = $row['date'];

        $query2 = " INSERT into stock ( S_id,id,Smarque,Sname,Scpu,Sram,Stram,Sdisk,Stdisk,Sdplus,date) 
        VALUES ( '$M_id','1101','$marque','$Mname','$cpu','$ram','$Tram','$disk','$Tdisk','$Dplus','$date' )";
        mysqli_query($connection, $query2);
        
    }
    $query3 = " DELETE * FROM materiel WHERE id='$id' " ;
    mysqli_query($connection, $query3);

}


if(isset($_POST['delete_data']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM directions WHERE D_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: index.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: index.php'); 
    }    
}

if(isset($_POST['delete_data']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM direction_r WHERE DR_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: index.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: index.php'); 
    }    
}

if(isset($_POST['delete_data']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM agences WHERE A_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: index.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: index.php'); 
    }    
}

if(isset($_POST['delete_data']))
{
    $id = $_POST['delete_id'];

    $query = "DELETE FROM user WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: index.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: index.php'); 
    }    
}


// fin de suppression  



// user delete 

if(isset($_POST['delete_TS']))
{
    $id = $_POST['delete_user'];

    $query = "DELETE FROM user WHERE U_id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: techniciens.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: techniciens.php'); 
    }    
}

if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_user'];

    $query = "DELETE FROM intervention WHERE id_inter='$id' ";
    $query_run = mysqli_query($connection, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: techniciens.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: techniciens.php'); 
    }    
}



// end of user delete




// mise a jour materiel

if(isset($_POST['update_btn01']))
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

    WHERE M_id='$id' ";
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

    $query = "UPDATE stock SET 


    S_id='$Nserie',
    id='$ID',
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




//login

if(isset($_POST['login_btn']))
{
    
    $user_id = $_POST['user_id']; 
    $password_login = $_POST['password']; 
    if(empty($user_id) or empty($password_login))
    {
        echo '<div class="alert alert-danger" role="warning">Veuillez remplir tout les champs<div>'; 
    
    }else 
    {
        $query = "SELECT * FROM user WHERE U_id='$user_id' AND U_code='$password_login' LIMIT 1";
        $query_run = mysqli_query($connection, $query);
        if(mysqli_num_rows($query_run) != 1)
        {
        }else
        {      
            $usertypes = mysqli_fetch_array($query_run);
            
            if($usertypes['type'] == 'EMP')
            {    
                $user = mysqli_fetch_assoc($query);
                $_SESSION['EMP_U_id'] = $usertypes['U_id'];
                $_SESSION['EMP_id'] = $usertypes['id'];
                $_SESSION['EMP_Uname'] = $usertypes['Uname'];
                $_SESSION['EMP_Dname'] = $usertypes['Dname'];
                $_SESSION['EMP_type'] = $usertypes['type'];
                $_SESSION['EMP_U_code'] = $usertypes['U_code'];
                
                header('Location: ../Direction/index.php');
            } 
            else if($usertypes['type'] == 'COR')
            {
                $user = mysqli_fetch_assoc($query);
                $_SESSION['COR_U_id'] = $usertypes['U_id'];
                $_SESSION['COR_id'] = $usertypes['id'];
                $_SESSION['COR_Uname'] = $usertypes['Uname'];
                $_SESSION['COR_Dname'] = $usertypes['Dname'];
                $_SESSION['COR_type'] = $usertypes['type'];
                $_SESSION['COR_U_code'] = $usertypes['U_code'];
                header('Location: ../Regionale/index.php');
            }
            else if($usertypes['type'] == 'CDD' OR $usertypes['type'] == 'DR')
            {
                $user = mysqli_fetch_assoc($query);
                $_SESSION['DR_U_id'] = $usertypes['U_id'];
                $_SESSION['DR_id'] = $usertypes['id'];
                $_SESSION['DR_Uname'] = $usertypes['Uname'];
                $_SESSION['DR_Dname'] = $usertypes['Dname'];
                $_SESSION['DR_type'] = $usertypes['type'];
                $_SESSION['DR_U_code'] = $usertypes['U_code'];
                
               header('Location: index.php');
                         

                
            }
            else if($usertypes['type'] == 'TS')
            {
                $user = mysqli_fetch_assoc($query);
                $_SESSION['TS_U_id'] = $usertypes['U_id'];
                $_SESSION['TS_id'] = $usertypes['id'];
                $_SESSION['TS_Uname'] = $usertypes['Uname'];
                $_SESSION['TS_Dname'] = $usertypes['Dname'];
                $_SESSION['TS_type'] = $usertypes['type'];
                $_SESSION['TS_U_code'] = $usertypes['U_code'];
                header('Location: ../TS/indexTS.php');
            }
            else
            {
                $_SESSION['status'] = "ID/password is invalid";
                header('Location: ../Login/login.php');
            }
        }    
    }
}

// end login



// mutation DSI

if(isset($_POST['mutation_btn']))
{

    $id = $_POST['select_id'];
    $mutation_id = $_POST['mutation_id'];

    $query = "UPDATE stock SET 


    id='$mutation_id' WHERE S_id='$id' ";

    

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


if(isset($_POST['mutation_btn']))
{

    $id = $_POST['select_id'];


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

     FROM stock WHERE S_id='$id' ";

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


if(isset($_POST['mutation_btn']))
{
    
    $id = $_SESSION['DR_id'];
    $query = "DELETE FROM stock WHERE id!='$id' ";
        
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




// end mutation


?>


