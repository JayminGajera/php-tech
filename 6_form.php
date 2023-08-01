<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $name = $_POST['name'];//name of field
        $email = $_POST['email'];
        $message = $_POST['message'];

        echo '<p>form has been submitted successfully</p>';
    }

    //connecting db
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contacts";//specify db

    //create a connection
    $conn = mysqli_connect($servername,$username,$password,$database);

    //die if connection not successful
    if(!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }else{
    
    
    $sql = "INSERT INTO `contectus` (`name`, `email`, `message`, `time`) VALUES
             ( '$name', '$email', '$message', current_timestamp())";

    $resultant = mysqli_query($conn,$sql);

    if($resultant){
        echo "record has been inserted successfully";
    }
    else{
        echo "record was not inserted =>". mysqli_error($conn);
    }

    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contect Us</title>
</head>
<body>
    <div class="container">
        <form action="/php tutorial/6_form.php" method="POST">
            <h1>Contect Us For Your Consern</h1>
            <div class="mb-3">
                    <label for="name" class="form-label">name</label>
                    <input type="text" class="form-control" id="name" name="name" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                    <label for="email" class="form-label">email</label>
                    <input type="email" class="form-control" id="email" name="email">
             </div>
            <div class="mb-3">
                    <label for="message" class="form-label">message</label>
                    <textarea name="message" id="message" cols="30" rows="4 0"></textarea>
             </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
