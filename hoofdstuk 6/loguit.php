<?php

/**
 * User: Trishna Ramsoedit
 * Date: 04-05-2020
 * Time: 15:00 PM
 * File: loguit.php
 */

include "../include/header.php";
include "../include/menu.php";

session_start();
session_destroy();
header('location: opdracht61.php');
?>


<?php include "../Include/footer.php"; ?>