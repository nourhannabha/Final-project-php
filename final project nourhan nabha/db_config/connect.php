<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $db_name = "finalproject";
    $conn = mysqli_connect($servername , $username , $password , $db_name, 3306);
    if(!empty($conn))
    {
       echo( "");
    }
    else
    {
        echo( "Connection Error ");
    }
?>