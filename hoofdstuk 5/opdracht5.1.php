<?php
/**
* User: Trishna Ramsoedit
* Date: 29-03-2020
* Time: 20:00 PM
* File: formdate.php
*/

include "../include/header.php";

include "../include/menu.php";

?>
<!--  Titel -->
<h1>
    Restaria Kees Kroket
</h1>
<h2>
    Visstraat 12<br>
    's-Hertogenbosch, Nederland
</h2>
<!--  Table met form + label + input -->
<table>
    <form action ="form.data.php" method="get">
        <tr>
            <td>
                <label for="companyName">Bedrijfsnaam</label>
            </td>
            <td>
                <input type="text" name="companyName" id="companyName">
            </td>
        </tr>
        <tr>
            <td>
                <label for="firstName">Voornaam</label>
            </td>
            <td>
                <input type="text" name="firstName" id="firstName">
            </td>
        </tr>
        <tr>
            <td>
                <label for="lastName">Achternaam</label>
            </td>
            <td>
                <input type="text" name="lastName" id="lastName">
            </td>
        </tr>
        <tr>
            <td>
                <label for="phoneNumber">Telefoonnummer</label>
            </td>
            <td>
                <input type="number" name="phoneNumber" id="phoneNumber">
            </td>
        </tr>
        <tr>
            <td>
                <label for="email">e-mailadres</label>
            </td>
            <td>
                <input type="email" name="email" id="email">
            </td>
        </tr>
        <tr>
            <td>
                <label for="message">Bericht</label>
            </td>
            <td>
                <input type="text" name="message" id="message">
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
