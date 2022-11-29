<?php
session_start();
include('dataBase/dbconfig.php');

if($connection)
{
    // echo "Database Connected";
}
else
{
    header("Location: dataBase/dbconfig.php");
}









 






?>