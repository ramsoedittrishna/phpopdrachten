<?php

/**
 * User: Trishna Ramsoedit
 * Date: 04-05-2020
 * Time: 15:00 PM
 * File: checklogin.php
 */


if ($_POST['username'] == 'Abu' && $_POST['password'] == 'bekend') {
    session_start();
    $_SESSION['username'] = $_POST['username'];
    header('location: welkom.php');
} else {
// $message = "Ongeldige username/wachtwoord
// {$_POST['username']}, probeer het nog eens.";
    include "opdracht61.php";

}

$authUsers = Array(
    "Abu" => "bekend",
    "Nordin" => "onbekend",
    "BasZ" => "654321",
    "Rosalie" => "bloemblaadjes"
);

include "../Include/footer.php";
