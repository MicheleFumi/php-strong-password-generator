<?php
$inputed_length = $_GET["length"];


function validator()
{
    global $inputed_length;
    if ($inputed_length == 0 || !isset($inputed_length) || !is_numeric($inputed_length)) {
        return  "<h2>Inserisci un numero valido</h2>";
    } else {
        $generated_password = password_generator();
        return "<h2> la tua password : $generated_password </h2>";
    }
}

function password_generator()
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+';
    global $inputed_length;

    $password = '';
    $alphaLength = strlen($alphabet) - 1;



    for ($i = 0; $i < $inputed_length; $i++) {
        $n = rand(0, $alphaLength);
        $password .= $alphabet[$n];
    };


    return $password;
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

    </h2> <?php echo validator() ?>


</body>

</html>