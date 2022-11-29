<?php
include('security.php');

if(isset($_POST['user_id'])&&!empty($_POST['user_id'])){
    $user_id = $_POST['user_id'];
    $query = "SELECT * FROM user WHERE U_id = $user_id ";
    $rows = $query->rowCount();

    if($rows==1){

    }else{
        echo "Numéro D\'utilisateur ou Code incorrect";
    }

}

?>