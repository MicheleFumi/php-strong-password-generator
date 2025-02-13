<?php
session_start();




function password_generator()
{
    $passwordLength = $_SESSION["length"];

    $randomUpper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomLower = "abcdefghijklmnopqrstuvwxyz";
    $randomSymbol = "!@#$%^&*()-_=+[]{}|;:',.<>?/";
    $randomNumb = "0123456789";

    $password = [];

    for ($i = 0; $i <= $passwordLength; $i++) {
        $password .= $randomUpper[rand(0, strlen($randomUpper) - 1)];
        $password .= $randomLower[rand(0, strlen($randomLower) - 1)];
        $password .= $randomSymbol[rand(0, strlen($randomSymbol) - 1)];
        $password .= $randomNumb[rand(0, strlen($randomNumb) - 1)];
    }

    return str_shuffle($password);
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
