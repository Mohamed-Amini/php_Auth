<?php

session_start();
include("./connection.php");
include("./functions.php");

$user_data = check_login($con);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The website</title>
</head>

<body>

    <a href="logout.php">Log out </a>
    <h1> THIS IS THE INDEX PAGE </h1>
    <p>Hello ,
        <?php echo $user_data['user_name']; ?>
    </p>

    <br>


</body>

</html>