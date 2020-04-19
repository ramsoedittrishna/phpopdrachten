<?php
/**
 * User: Trishna Ramsoedit
 * Date: 19-04-2020
 * Time: 20:00 PM
 * File: login.php
 */
include "../include/header.php";
include "../include/menu.php";
//include "script.php";
?>
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <meta charset="utf-8"/>
</head>
<?php
$message = "";

echo $message;
?>
<!--  Titel -->
<h1>
    Bergheen
</h1>
<br>
<h2>
    Login om onze adresgegevens + openingstijden te zien
</h2>
<br>
<form action="script.php" method="post">
    <table>
        <tr>
            <td>
                <label for="username">username:</label>
            </td>
            <td>
                <input type="text" name="name" id="username">
            </td>
        </tr>
        <tr>
            <td>
                <label for="password">password:</label>
            </td>
            <td>
                <input type="password" name="password" id="username">
            </td>
        </tr>
        <tr>
            <td></td><br>
            <td>
                <input type="submit">
            </td>
        </tr>
    </table>
</form>

<?php include "../Include/footer.php"; ?>


