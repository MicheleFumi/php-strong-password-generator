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


        <label><input type="checkbox" name="uppercase" value="1"> Maiuscole</label>
        <label><input type="checkbox" name="lowercase" value="1"> Minuscole</label>
        <label><input type="checkbox" name="numbers" value="1"> Numeri</label>
        <label><input type="checkbox" name="symbols" value="1"> Simboli</label>

        <button type="submit">invia</button>
    </form>
    <hr>

    <h2> <?php echo validator() . " <br>" . param_validator() ?> </h2>


</body>

</html>