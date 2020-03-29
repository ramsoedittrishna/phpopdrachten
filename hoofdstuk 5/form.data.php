<?php
/**
 * User: Trishna Ramsoedit
 * Date: 29-03-2020
 * Time: 20:00 PM
 * File: opdracht5.1.php
 */

include "../include/header.php";

include "../include/menu.php";

?>
<!-- table met echo get-->
<table id="table">
    <tr>
        <td>
            Bedrijfsnaam:
        </td>
        <td>
            <?php
            echo $_GET['companyName'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Voornaam:
        </td>
        <td>
            <?php
            echo $_GET['firstName'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Achternaam:
        </td>
        <td>
            <?php
            echo $_GET['lastName'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Telefoon:
        </td>
        <td>
            <?php
            echo $_GET['phoneNumber'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            E-mail:
        </td>
        <td>
            <?php
            echo $_GET['email'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            Bericht:
        </td>
        <td>
            <?php
            echo $_GET['message'];
            ?>
        </td>
    </tr>
</table>
<?php include "../Include/footer.php"; ?>