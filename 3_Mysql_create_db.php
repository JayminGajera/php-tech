<?php

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
    
    //create a db
    $sql = "CREATE DATABASE jayminDb";
    $result = mysqli_query($conn,$sql);
    
    //check for db creation success
    
    if($result){
        echo "the db created successfully";
    }
    else{
        echo "the db not created =>". mysqli_error($conn);
    }
    echo "the result is " . var_dump($result);




?>