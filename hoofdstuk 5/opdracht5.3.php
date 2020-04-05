<?php

/**
 * User: Trishna Ramsoedit
 * Date: 05-04-2020
 * Time: 21:00 PM
 * File: opdracht5.3.php
 */

include "../include/header.php";
include "../include/menu.php";
?>
<h1>
    Opdracht 5.3 PHP
</h1>
<h2>
    Taak 1
</h2>
    <form action="form_data53.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="name">Wat is je naam:</label>
                </td>
                <td>
                    <input type="text" name="name" id="name">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="age">Wat is je leeftijd:</label>
                </td>
                <td>
                    <input type="number" name="age" id="age">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="town">Gemeente:</label>
                </td>
                <td>
                    <select>
                        <option value="Den Bosch" selected="selected" name="DenBosch">Den Bosch</option>
                        <option value="Eindhoven" name="Eindhoven">Eindhoven</option>
                        <option value="Tilburg" name="Tilburg">Tilburg</option>
                        <option value="Rosmalen" name="Rosmalen">Rosmalen</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="citizens">Aantal inwoners gemeente:</label>
                </td>
                <td>
                    <input name="citizens" type="text">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="choice">Ken je mensen die besmet zijn in je woonplaats?</label>
                </td>
                <td>
                    <input type="radio" name="yes" value="true"/>ja
                    <input type="radio" name="no" value="false"/>nee
                </td>
            </tr>
            <tr>
                <td>
                    <label for="infected">Aantal mensen besmet in je gemeente:</label>
                </td>
                <td>
                    <input type="text" name="infected">
                </td>
            </tr>
            <tr>
                <td>
                    <select>
                        <input type="verzenden">
                    </select>
                </td>
            </tr>
        </table>

    </form>
<?php include "../Include/footer.php"; ?>