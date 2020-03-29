<?php


/**
 * User: Trishna Ramsoedit
 * Date: 29-03-2020
 * Time: 21:00 PM
 * File: uitschrijving.php
 */

include "../include/header.php";
include "../include/menu.php";
?>
    <h1><u>Uitschrijfformulier KW1C</u></h1>
<hr>
    <!-- table met echo get-->
<table id="table">
    <tr>
        <td>
            <i>Voor en achternaam: </i>
        </td>
        <td>
            <?php
            echo $_GET['name'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <i>Studentnummer:</i>
        </td>
        <td>
            <?php
            echo $_GET['studentNumber'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <i>Datum van uitschrijving:</i>
        </td>
        <td>
            <?php
            echo $_GET['dateOfDeRegistration'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <i>Reden van uitschrijving:</i>
        </td>
        <td>
            <?php
            echo $_GET['WrongChoice'];
            echo $_GET['BadGrades'];
            echo $_GET['NoMotivation'];
            echo $_GET['Different'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <i>Leerjaar:</i>
        </td>
        <td>
            <?php
            echo $_GET['year1'];
            echo $_GET['year2'];
            echo $_GET['year3'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <i>Aanmelden bij de succesklas:</i>
        </td>
        <td>
            <?php
            echo $_GET['checkbox1'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <i>Verwijderen gegevens:</i>
        </td>
        <td>
            <?php
            echo $_GET['checkbox2'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <i>Geef hieronder de reden van uitschrijving:</i>
        </td>
        <td>
            <?php
            echo $_GET['textbox'];
            ?>
        </td>
    </tr>
</table>
<?php include "../Include/footer.php"; ?>