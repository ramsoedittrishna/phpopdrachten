<?php

/**
 * User: Trishna Ramsoedit
 * Date: 04-05-2020
 * Time: 15:00 PM
 * File: opdracht6.1.php
 */

include "../include/header.php";
include "../include/menu.php";
?>
<head>
    <link rel="stylesheet" type="text/css" href="6.1.css">
    <meta charset="utf-8"/>
</head>
<h2>
    Login formulier
</h2>
<table>
    <form action="checklogin.php" method="post">
            <tr>
                <td>
                    <label for="username">Username:</label>
                </td>
                <td>
                    <input type="text" name="username" id="username">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">Wachtwoord:</label>
                </td>
                <td>
                    <input type="text" name="password" id="password">
                </td>
            </tr>
            <tr>
                <td>
                    <select>
                        <input type="submit">
                    </select>
                </td>
            </tr>
    </form>
</table>
<?php include "../Include/footer.php"; ?>
