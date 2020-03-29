<?php

/**
 * User: Trishna Ramsoedit
 * Date: 29-03-2020
 * Time: 21:00 PM
 * File: opdracht5.2.php
 */

include "../include/header.php";
include "../include/menu.php";
?>
<h1>
    Uitschrijfformulier KW1C
</h1>
<hr>
<!-- Table met een form en verschillende labels en input in verwerkt-->
<table>
    <!-- Verbinding tussen dit php bestand en uitschrijving.php doormiddel met method get-->
    <form action="uitschrijving.php" method="get">
        <tr>
            <td>
                <label for="name">Voor en achternaam</label>
            </td>
            <td>
                <input type="text" name="name" id="name">
            </td>
        </tr>
        <tr>
            <td>
                <label for="studentNumber">Studentnummer</label>
            </td>
            <td>
                <input type="number" name="studentNumber" id="studentNumber">
            </td>
        </tr>
        <tr>
            <td>
                <label for="dateOfDeRegistration">Datum van uitschrijving</label>
            </td>
            <td>
                <input type="date" name="dateOfDeRegistration" id="dateOfDeRegistration">
            </td>
        </tr>
        <tr>
            <td>
                <label for="ReasonOfDeRegistration">Reden van uitschrijving</label>
            </td>
            <td>
                <select>
                    <option value="WrongChoice" selected="selected" name="WrongChoice">Verkeerde keuze</option>
                    <option value="BadGrades" name="BadGrades">Slechte voortgang</option>
                    <option value="NoMotivation" name="NoMotivation">Geen motivatie</option>
                    <option value="Different" name="Different">Andere reden</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="year">Leerjaar</label>
            </td>
            <td>
                <input type="radio" name="year1" value="1e leerjaar"/>1e leerjaar<br>
                <input type="radio" name="year2" value="2e leerjaar"/> 2e leerjaar<br>
                <input type="radio" name="year3" value="3e leerjaar"/> 3e leerjaar
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="checkbox1" value="checkbox1"/>Ik wil me aanmelden bij de succesklas
            </td>
        </tr>
        <tr>
            <td>
                <input type="checkbox" name="checkbox2" value="checkbox2"/>Verwijder mijn gegevens uit het systeem
            </td>
        </tr>
        <tr>
            <label for="Reason">Geef hieronder de reden van uitschrijving op</label>
        </tr>
        <tr>
            <input type="text" name="textbox" id="textbox"/>
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