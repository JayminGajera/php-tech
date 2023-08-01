<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];//name of field
        $password = $_POST['pass'];

        echo '<strong>Success </strong><p>your email '. $email .'and password '.$password .'has been submitted successfully</p>';
    }

    //submit these to database
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>forms GET/POST</title>
</head>
<body>
    <div class="container">
        <form action="/php tutorial/1_forms.php" method="POST">
            <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                    <label for="pass" class="form-label">Password</label>
                    <input type="password" class="form-control" id="pass" name="pass">
             </div>
                <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
