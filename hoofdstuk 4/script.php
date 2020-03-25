<?php
/**
 * User: Trishna Ramsoedit
 * Date: 11-03-2020
 * Time: 15:00 PM
 * File: script.php
 */
?>
<?php

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
    $counter = 0;

    while($counter <= 6 )
    {
        $task4 =  "Dit is de" . $task4 . "iteratie" .  $counter ;
        ++ $counter;
    }

    $task5 = "";
    $counter = 0;
    for($counter = 0; $counter < 11; ++$counter)
    {
        $task5 = "Dit is" . $counter . $task5 . '<br>';
    }

    $task6 =
