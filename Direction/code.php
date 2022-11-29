<?php
include('security.php');
 

// Ajouter intervention

if(isset($_POST['ajouter_inter']))
{
    
    $D_id =  $_SESSION['EMP_id']; 
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



?>




