<?php


// Inladen functies bestand
include("functions.php");

// Starten van een database connectie
startConnection();

// Executeren van een SQL query
$query = "SELECT * FROM joke WHERE joketext LIKE '<p>' . '%blondje%' . '</p>';
$jokes = executeQuery($query);

echo "<p> $query </p>";

// Resultaten rij voor rij ophalen
while($row = $jokes->fetch(PDO::FETCH_ASSOC) )
{
    echo $row["jokedate"] .  $row["joketext"] . $row["jokeclou"] . "<br>";
}

?>
