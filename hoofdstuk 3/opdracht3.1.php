<?php
/**
 * User: Trishna Ramsoedit
 * Date: 14-02-2020
 * Time: 14:00 PM
 * File: opdracht3.1.php
 */
?>

<!DOCTYPE html>

<header>
    <h1>Opdracht 3.1</h1>
</header>
<aside>
    <?php
        // variabelen aangemaakt.
        $events = "Elfstedentocht (Fries: Alvestêdetocht)"; // array
        $distance = 200; // integer
        $event = "schaatstocht"; // string
        $nature = "natuurijs"; //  string
        $description = "Koninklijke Vereniging De Friesche Elf Steden."; // string
        $city = "Leeuwarden,"; // string
        $capitalCity = "Friesland,"; // string
        $times = 15; // integer
        $year = 1909; // integer
        $once = 1; // integer
        $break = "<br>"; //string
        $space = " "; // string

        // variable verhaal aangemaakt.
        $verhaal = " De " . $events . " is een " . $distance . " kilometer lange " . $break .
            $event . " over " . $nature . " die wordt georganiseerd door de " . $description . $space . $city . $space . $break
            . " de hoofdstad van " . $capitalCity . " is start- en aankomstplaats. De " . $break .
            $space . $events . " is inmiddels " . $times . " maal verreden en werd door het eerst in " . $break .
            $space . $year . " gereden en wordt maximaal " . $once . " keer op winter gehouden.";

        // variable verhaal verwerkt in een p element en omgeroepen in de browser via echo.
        echo '<p>' . $verhaal . '</p>' ;
    ?>
</aside>
