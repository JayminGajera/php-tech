<?php

    //connecting db
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "jaymindb";

    //create connection
    $conn = mysqli_connect($servername,$username,$password,$database);

    if(!$conn){
        die('sorry failed to connect...'.mysqli_connect_error());
    }
    else{
        echo 'connection successful';
        echo "<br>";
    }

    $sql = "SELECT * FROM `user` WHERE `type`='successful'";
    $result = mysqli_query($conn, $sql);

    $num =  mysqli_num_rows($result);
    echo $num;
    echo "<br>";

    //uses of WHERE clause to update data
    $sql = "UPDATE `user` SET `name`='jemish' WHERE `user_id`=1";
    $result = mysqli_query($conn, $sql);

    $aff = mysqli_affected_rows($conn);
    echo "number of affected rows are : $aff";
    echo "<br>";

    if($result){
        echo "we updated record successfully";
    }else{
        echo "update failed";
    }


?>