<?php
/**
 * User: Trishna Ramsoedit
 * Date: 19-04-2020
 * Time: 20:00 PM
 * File: login.php
 */
include "../include/header.php";
include "../include/menu.php";
?>
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <meta charset="utf-8"/>
</head>
<?php

    $username = $_POST['username'];
    $Password = $_POST['password'];
    $Submit = $_POST['submit'];

    $loginIn = array("Losing it" => "Fisher", "Lose Control" => "Meduza", "Yummy" => "Justin Bieber", "Krantenwijk" => "Lil Kleine",
                      "Aquarius" => "Oliver Heldens", "Godzilla" => "Eminem", "San Frandisco" => "Dom Dolla", "Lean on" => "Major Lazor",
                       "Hooked" => "Martin Ikin", "Survivor" => "Jack Back");

    // foreach

    foreach($loginIn as $key => $value)
    {
        echo "het nummer ". $key . " is van de artiest " . $value . "<br>";
    }

?>
<!--  Titel -->
<h1>
    Bergheen
</h1>
<h2>
    Welkom!
</h2>
<table>
    <tr>
        <td>
            <fieldset id="opening">
                <legend>
                    Openingstijden:
                </legend>
                <label>
                    Do: 22:00<br>
                    Vr: All day<br>
                    Za: All day<br>
                    Zo: 12:00
                </label>
            </fieldset>
        </td>
        <td>
            <fieldset id="adres">
                <legend>
                    Adresgegevens:
                </legend>
                <label>
                    Am Wriezener Bahnhof<br>
                    10243 Berlin<br>
                    Duitsland
                </label>
            </fieldset>
        </td>
    </tr>
</table>
<p>
    Deze gegevens dien je ten alle tijden geheim te houden!
</p>


