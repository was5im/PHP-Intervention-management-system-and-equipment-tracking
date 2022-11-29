<?php
include('security.php');
require '../vendor/autoload.php';
use \PhpOffice\PhpSpreadsheet\Writer\Csv;
use \PhpOffice\PhpSpreadsheet\Reader\Xlsx;



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
    $id = $_SESSION['COR_id'] ;
    $N_serie = $_POST['N_serie'];
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
               
            }
       
    

}


// fin ajout materiels stock


//ajouter ensemble materiel parc agences

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

//end ajout ensemble materiel par agences

//ajouter ensemble materiel stock direction regional

if(isset($_POST['ajouter_grp_mat_stock']))
{
    
    $id =  $_SESSION['COR_id']; 
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

//end ajout ensemble materiel stock Direction regional



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



// Ajouter intervention

if(isset($_POST['ajouter_int']))
{
    
    $D_id =  $_SESSION['COR_id']; 
    $objet = $_POST['objet'];
    $desc = htmlentities($_POST['desc'],ENT_QUOTES);
    $date = date("Y-m-d H:i:s");
    $dateR = "1111-11-11 11:11:11";
    
   
    if(empty($D_id) || empty($objet) || empty($desc))
    {
        echo "<div class='alert alert-danger col'>veuiller remplir tout les champs</div>";
    }elseif(!isset($_FILES['pdf']))
      {
        echo "<div class='alert alert-danger col'>Veuillez ajouter le document pdf de votre intervention</div>";
        }else
        {
            $pdf = $_FILES['pdf'];
            $pdf_name=$pdf['name'];
            $pdf_tmp=$pdf['tmp_name'];
            $pdf_type=$pdf['type'];
            $pdf_size=$pdf['size'];

            $pdf_ext= explode('.',$pdf_name); //tableau de chaine de caractére
            $pdf_ext=strtolower(end($pdf_ext)); //rendre le tout en miniscule
            $allowd=array('pdf');

            if(in_array($pdf_ext,$allowd))
            {
                if($pdf_size<=2000000)
                {
                    $new_name= uniqid('description',false) . '.' .  $pdf_ext;
                    $pdf_dir= '../document/interventions/' . $new_name;          
                    $pdf_db= 'document/interventions/' . $new_name;

                    if(move_uploaded_file($pdf_tmp,$pdf_dir))
                    {
                            $query = "INSERT INTO intervention 
                            (

                            D_id,
                            id_inter,
                            objet,
                            descreption,
                            date,
                            pdf,
                            dateR,
                            Solution
                            
                                
                            ) VALUES (
                                '$D_id',
                                '0',
                                '$objet',
                                '$desc',
                                '$date',
                                '$pdf_db',
                                '$dateR',
                                '//'

                                
                                
                                
                                
                            )";
                            $query_run = mysqli_query($connection, $query);
                            
                            if($query_run)
                            {
                                // echo "Saved";
                                $_SESSION['seccess'] = "ajout avec success";
                                header('Location: intervention.php');
                            }
                            else 
                            {
                                $_SESSION['status'] = "erreur lors de l'ajout";
                                $_SESSION['status_code'] = "error";
                               
                                header('Location: intervention.php');  
                            }
                    }else
                    {
                        echo "<div class='alert alert-danger col'>errreur lors de l'importation du document </div>";
                    }        
                }else
                {
                    echo "<div class='alert alert-danger col'>la taille de fichier est trés grande</div>";
                }    
            }else
            {
                echo "<div class='alert alert-danger col'>type de fichier incorrect veuillez selectionner un fichier PDF ! </div>";
            }
        }
}

// end add intervention


// mutation Regionale

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
    
    $id = $_SESSION['COR_id'];
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





