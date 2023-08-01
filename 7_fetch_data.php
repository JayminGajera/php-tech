<?php

     //connecting db
     $servername = "localhost";
     $username = "root";
     $password = "";
     $database = "jaymindb";//specify db
 
     //create a connection
     $conn = mysqli_connect($servername,$username,$password,$database);
 
     //die if connection not successful
     if(!$conn){
         die("Sorry we failed to connect: ". mysqli_connect_error());
     }else{
        echo "<h3>Connected successfully</h3>";
     } 

     $sql = "SELECT * FROM `user`";
     $result = mysqli_query($conn, $sql);//execute the query and get result set

     //find the numbers of record return 
     $num =  mysqli_num_rows($result);
     echo $num;
     echo "<br>";

     //display the row returned by the sql query
     if($num > 0){
        // $row = mysqli_fetch_assoc($result);
        // echo var_dump($row);
        // echo "<br>";

        while($row = mysqli_fetch_assoc($result)){//jya sudhi result aavya rakhe tya sudhi
            // echo var_dump($row);
            echo $row['user_id'] . " hello " . $row['name'] . "turn into " . $row['age'] . " and you " . $row['type'];
            echo "<br>";
        }

     }


?>