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
    
    //create a table in the db
    $sql = "CREATE TABLE `jaymindb`.`newuser` (`user_id` INT NOT NULL AUTO_INCREMENT ,
             `name` VARCHAR(11) NOT NULL , `age` INT(11) NOT NULL , `type` VARCHAR(11) NOT NULL ,
              PRIMARY KEY (`user_id`))";
    
    $resultant = mysqli_query($conn,$sql);
    
    if($resultant){
        echo "the table created successfully";
    }
    else{
        echo "the table not created =>". mysqli_error($conn);
    }


?>