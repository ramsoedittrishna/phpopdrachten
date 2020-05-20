<?php
/**
 * User: Trishna Ramsoedit
 * Date: 20-05-2020
 * Time: 15:00 PM
 * File: opdracht7.2.php
 */

// Open de database connectie en ODBC driver
try
{
    $pdo = new PDO("odbc:odbc2sqlserver");
}
catch (PDOException $e)
{
    echo "<h1>Database error:</h1>";
    echo $e->getMessage();
    die();
}
echo "database connectie gelukt" . "<br>" . "<br>";

// Uitvoeren van een SQl query
try
{
    // Query schrijven
    $sql = 'SELECT * FROM joke';
    // Query uitvoeren
    $result = $pdo->query($sql);
}
catch (PDOException $e)
{
    echo 'Er is een probleem met ophalen van jokes: ' . $e->getMessage();
    exit();
}
// Lege Array aanmaken voor de results
//$aJokes = array();
//// Door de results heen loopen via een while
//while ($row = $result->fetch(PDO::FETCH_ASSOC))
//{
//    // Result wegschrijven in de $aJokes array
//    $aJokes[] = $row;
//}
//// Tonen van de inhoud van aJokes  * Taak 3.1
//echo "<pre>";
//var_dump($aJokes);
//echo "</pre>";


// Lege Array aanmaken voor de results
$aJokes = array("Er staan 2 domme blondjes bij het stoplicht. Zegt de een: Het is groen. " =>
                "Zegt de ander na even nadenken: uhm een kikker ", "Noem een goede grap " => "Jouw bankrekening",
                "Weet je waarom een politie agent altijd gelijk denkt te hebben? " => "De aanhouder wint",
                "Het is groen en het hangt aan de muur " => "Kermit de sticker",
                "Wat moet je doen als uw schoonmoeder op het raam tikt " => "De oven wat harder zetten");
// Door de results heen loopen via een foreach
foreach($aJokes as $joketext => $jokeclou)
{
    echo "<table>" . "<tr>" . "<td>" . $joketext . $jokeclou . "</td>" . "</tr>" . "</table>" . "<br>";
}


//foreach ($aJokes as $value) ?>
<!--<table>-->
<!--    <tr>-->
<!--        <td>--><?//['id']?><!--</td>-->
<!--        <td>--><?//['joketext']?><!--</td>-->
<!--        <td>--><?//['jokeclou']?><!--</td>-->
<!--    </tr>-->
<!--</table>-->



