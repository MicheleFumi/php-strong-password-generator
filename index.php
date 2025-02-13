<?php
session_start();
include_once './functions.php';
if (isset($_GET["length"])) {
    $_SESSION["length"] = $_GET["length"];
    validator();
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-strong-password-generator</title>
</head>

<body>
    <h1>inserisci una password</h1>
    <form action="" method="get">
        <label for="length">inserisci la lunghezza di caratteri</label>
        <input type="number" name="length" id="">

        <button type="submit">invia</button>
    </form>
    <hr>

    <h2> <?php echo validator() ?> </h2>


</body>

</html>