<?php
//Haal de formulier gegevens op
//include hieronder "lesopdracht_function.php" die de naam van de docent terug geeft.

require "lesopdracht5.3_functions.php";
?>

<table>
    <tr>
        <td>
            <i>Voornaam</i>
        </td>
        <td>
            <?php
            echo $_GET['firstname'];
            ?>
        </td>
    </tr>
    <!-- Begin: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>
            <i>Tussenvoegsel</i>
        </td>
        <td>
            <?php
            echo $_GET['tussenvoegsel'];
            ?>
        </td>
    </tr>
    <!-- Einde: Toon dit alleen als er een tussenvoegsel is ingevuld! -->
    <tr>
        <td>
            <i>Achternaam</i>
        </td>
        <td>
            <?php
            echo $_GET['lastname'];
            ?>
        </td>
    </tr>
    <tr>
        <td>
            <i>Meer informatie</i>
        </td>
        <td>
            <?php
            if($_GET['subject'] == 'php')
            {
                $teacherIct = getTeacherName();
                echo $teacherIct;
            }
            ?>
        </td>
    </tr>
</table>
