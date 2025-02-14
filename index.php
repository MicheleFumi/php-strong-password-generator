<?php
session_start();
include_once './functions.php';


if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
    $_SESSION["length"] = $_GET["length"] ?? 0;


    $lengthValidation = validator();
    $paramValidation = param_validator();

    if ($lengthValidation !== true || $paramValidation !== true) {
        $message = "";
    } else {
        $_SESSION["generated_password"] = password_generator();
        header("Location: ./landing_page.php");
        exit;
    }
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

    <h2>
        <?php
        if (!isset($lengthValidation) && !isset($paramValidation)) {
            echo $message = "Inserisci la lunghezza della password e che tipologia di caratteri deve includere";
        } elseif ($lengthValidation !== true) {
            echo $message = "devi inserire il numero di caratteri";
        } elseif ($paramValidation !== true) {
            echo $message = "devi scegliere il tipo di caratteri";
        }


        ?>
    </h2>
    <h2>

    </h2>

</body>

</html>