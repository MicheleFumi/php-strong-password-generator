<?php
session_start();
include_once './functions.php';



var_dump($_SESSION["generated_password"])
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Password</title>
</head>

<body>

    <h2>La tua password è: <?php echo $_SESSION["generated_password"] ?> </h2>
</body>

</html>