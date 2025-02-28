<?php

session_start();

$_SESSION['lowercase'] = isset($_POST['lowercase']) && $_POST['lowercase'];
$_SESSION['uppercase'] = isset($_POST['uppercase']) && $_POST['uppercase'];
$_SESSION['numbers'] = isset($_POST['numbers']) && $_POST['numbers'];
$_SESSION['symbols'] = isset($_POST['symbols']) && $_POST['symbols'];


function passwordGenerator()
{
    $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = '!@#$%^&*()-_=+[]{}|;:,.<>?/';

    $all = '';



    if (isset($_SESSION['lowercase']) && $_SESSION['lowercase'] == 'on') {
        $all .= $lowercase;
    }
    if (isset($_SESSION['uppercase']) && $_SESSION['uppercase'] == 'on') {
        $all .= $uppercase;
    }
    if (isset($_SESSION['numbers']) && $_SESSION['numbers'] == 'on') {
        $all .= $numbers;
    }
    if (isset($_SESSION['symbols']) && $_SESSION['symbols'] == 'on') {
        $all .= $symbols;
    }


    $passwordContainer = [];
    if (isset($_POST['number'])) {
        $_SESSION['number'] = $_POST['number'];
    }
    if ($_SESSION['number']) {
        for ($i = 0; $i < $_SESSION['number']; $i++) {
            $randomNumber = rand(1, strlen($all) - 1);
            $charPosition = $all[$randomNumber];
            $passwordContainer[] = $charPosition;
        }
    };
    if (implode($passwordContainer) == '') {
        return 'scegli almeno un parametro';
    } else {
        return '<div><strong> tua password è: </strong></div>' . implode($passwordContainer);
    };
}
