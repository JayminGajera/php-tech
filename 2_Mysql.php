<?php

    echo "welcome to the stage where we are redy to connected to a database <br>";
    
    /*
    ways to connect to a Mysql database
    1. MySQLi extension
    2. PDO
    */ 
    
    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    
    //create a connection
    $conn = mysqli_connect($servername,$username,$password);
    
    //die if connection not successful
    if(!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    echo "connection is successful";


?>