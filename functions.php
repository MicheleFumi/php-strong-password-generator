<?php
session_start();




function password_generator()
{
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890!@#$%^&*()_+';
    /* global $_SESSION["length"]; */

    $password = '';
    $alphaLength = strlen($alphabet) - 1;



    for ($i = 0; $i < $_SESSION["length"]; $i++) {
        $n = rand(0, $alphaLength);
        $password .= $alphabet[$n];
    };


    return $password;
}

function validator()
{

    if ($_SESSION["length"] == 0 || !isset($_SESSION["length"]) || !is_numeric($_SESSION["length"])) {
        return "Inserisci un numero valido!";
    } else {
        $_SESSION["generated_password"] = password_generator();
        header("Location: ./landing_page.php");
        exit;
    }
}
