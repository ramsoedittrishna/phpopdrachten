<?php
/**
 * User: Trishna Ramsoedit
 * Date: 17-02-2020
 * Time: 15:00 PM
 * File: opdracht3.2.php
 */
?>
<?php
include "include/header.php";
include "include/menu.php";
?>
<!DOCTYPE html>
<header>
    <h1><?php echo "ICT Academie AO"; ?></h1>
    <link rel="stylesheet" type="text/css" href="opdracht32.css">
</header>
<aside>
    <?php
        // intialiseren en declareren van variabelen
        $trafficLightColor = "groen"; // string
        $ambulanceComing = false; // boolean
        $driveOn = true; // boolean

          // if else statement stoplicht en ambulance
          if($trafficLightColor == "groen" && $ambulanceComing == false)
          {
                $driveOn = true;
          }

          else if($trafficLightColor == "oranje" && $ambulanceComing == false)
          {
                $driveOn = false;
          }

          else if($trafficLightColor == "rood" && $ambulanceComing == false)
          {
              $driveOn = false;
          }

          else if($trafficLightColor == "groen" && $ambulanceComing == true)
          {
                $driveOn = false;
          }

          // if else statement voor driveon
          if( $driveOn == true)
              {
                  echo "<p id='green'>" . "U mag doorrijden" . "</p>";
              }

          else if ( $driveOn == false)
              {
                  echo "<p id='red'>" . "U moet stoppen" . "</p>";
              }


            // initialiseren en declareren van variabelen
            $countryName = "Nederland"; // string
            $currentAge = 16; // integer


        // if/ else if/ else statement van countryname en currentage
        if($countryName == "Bulgarije" && $countryName == "Nederland" && $countryName == "Zweden" && $currentAge < 18)

            {
                echo "niet";
            }

        else if($countryName == "België" && $currentAge <= 16)

            {
                echo "niet";
            }

        else if($countryName == "Cyprus" && $currentAge <= 17)

            {
                echo "niet";
            }

        else if($countryName == "Bulgarije" && $countryName == "België" && $countryName == "Nederland" && $currentAge >= 18)

            {
                echo "alle drank";
            }

        else if($countryName == "Cyprus" && $currentAge > 17)

            {
                echo "alle drank";
            }

        else if($countryName == "Zweden" && $currentAge >= 20)

            {
                echo "alle drank";
            }

        else
            {
                echo "alleen zwakke";
            }
   ?>
</aside>



