<?php
/**
 * User: Trishna Ramsoedit
 * Date: 29-03-2020
 * Time: 20:00 PM
 * File: opdracht4.4.php
 */

include "../include/header.php";

include "../include/menu.php";


//    $date = date("d-m-Y");
//    $numberOfDay =   date("w");

//    for
//    echo "Dag" . $numberOfDay . $date;

?>
<h1>Opdracht 4.4</h1><br>
<?php
//Hier wordt een for loop aangemaakt
for ($i = 0; $i <= 7; $i++) {
    $adder = strtotime("+" . $i . "days");
    $dayNumber = date('w', $adder);
    $fullDate = date('l d-n-Y', $adder);
    echo "Dag " . $dayNumber . " is " . $fullDate . "<br>";
}


?>
<?php include "../Include/footer.php"; ?>



