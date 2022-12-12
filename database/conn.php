<?php

    $host="localhost";
    $password="";
    $unmae="root";
    $dbname="php_crud_ip";

    $conn = mysqli_connect($host,$unmae,$password,$dbname);
    if(!$conn)
    {
        die("Error : ".mysqli_error());
    }
    else
    {
        //echo "Connection Successfully";
    }

?>