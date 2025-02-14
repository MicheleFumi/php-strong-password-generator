<?php
session_start();




function password_generator()
{
    $passwordLength = $_SESSION["length"];

    $randomUpper = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $randomLower = "abcdefghijklmnopqrstuvwxyz";
    $randomSymbol = "!@#$%^&*()-_=+[]{}|;:',.<>?/";
    $randomNumb = "0123456789";

    $password = "";
    $all_char = "";

    if (isset($_GET["uppercase"])) {
        $all_char .= $randomUpper;
    }
    if (isset($_GET["lowercase"])) {
        $all_char .= $randomLower;
    }
    if (isset($_GET["numbers"])) {
        $all_char .= $randomNumb;
    }
    if (isset($_GET["symbols"])) {
        $all_char .= $randomSymbol;
    }

    for ($i = 0; $i < $passwordLength; $i++) {
        $password .= $all_char[rand(0, strlen($all_char) - 1)];
    }

    return $password;
}

function validator()
{

    if ($_SESSION["length"] == 0 || !isset($_SESSION["length"]) || !is_numeric($_SESSION["length"])) {
        return "Inserisci un numero valido!";
    } else {
        return true;
    }
}

function param_validator()
{
    if (!isset($_GET["uppercase"]) && !isset($_GET["lowercase"]) && !isset($_GET["numbers"]) && !isset($_GET["symbols"])) {
        return "devi scegliere almeno un parametro!";
    }
    return true;
}
