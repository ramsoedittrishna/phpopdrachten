<?php
/**
 * User: Trishna Ramsoedit
 * Date: 11-03-2020
 * Time: 15:00 PM
 * File: script.php
 */



    $task2 = "Lancering in";
    $counter = 19;

    while($counter >0 )
    {
        $task2 = $task2 . $counter. ",";
        --$counter;
    }

    $task3 = "Lancering in";

    for($counter = 19; $counter >0; --$counter)
    {
        $task3 = $task3 . $counter. ",";
    }

    $task4 = "";
    $counter = 1;


    while($counter <= 6 )
    {
        $task4 =  $task4 . "Dit is de ". $counter . "e iteratie" . '<br>';
        $counter++;
    }

    $task5 = "";
    $counter = 1;

    for($counter = 1; $counter < 11; ++$counter)
    {
        $task5 = $task5 . "Dit is de " . $counter ."e interatie" . '<br>';
    }


    $task6 = "";
    $counter = 2020 ;
    $age = 23;

    while($counter >= 1997)
       {
           $task6 = $task6 . "In" . $counter . " was ik" . $age . " jaar oud" . '<br>';
           $counter--;
           $age--;
       }
?>

