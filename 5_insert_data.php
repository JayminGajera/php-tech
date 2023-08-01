<?php

    //connecting to the database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "jaymindb";//specify db
    
    //create a connection
    $conn = mysqli_connect($servername,$username,$password,$database);
    
    //die if connection not successful
    if(!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    echo "connection is successful";
    
    $name = 'pujan';
    $age = 18;
    $type = 'cool';
    $sql = "INSERT INTO `user` ( `name`, `age`, `type`) VALUES ( '$name', '$age', '$type')";
    
    
    $resultant = mysqli_query($conn,$sql);
    
    if($resultant){
        echo "record has been inserted successfully";
    }
    else{
        echo "record was not inserted =>". mysqli_error($conn);
    }


?>