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

?>