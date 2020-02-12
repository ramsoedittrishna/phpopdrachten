<?php
/**
 * User: Trishna Ramsoedit
 * Date: 10-02-2020
 * Time: 15:00 PM
 * File: opdracht2.2.php
 */
?>

<?php
$text1 = "Hallo"; //string
$text2 = "een makkelijke taal "; //string
$text3 = "toch zo'n makkelijke taal "; //string
$text4 = " wat is "; //string
$text5 = "PHP "; //string
$text6 = "Nooit gedacht dat "; //string
$text7 = "De installatie is best ingewikkeld "; //string
$text8 = "Fijn "; //string
$text9 = "? "; //string
$text10 = ". "; //string
$text11 = ", "; //string
$text12 = "<br>"; //string
$text13 = "is "; //string
$text14 = "Vind je niet"; //string
?>

<!DOCTYPE html>

<header>
    <h1><?php echo "Opdracht 2.2"; ?></h1>
    <link rel="stylesheet" type="text/css" href="">
</header>
<aside>
        // variabelen opgeroepen via echo.
        <?php echo '<p>' . $text1, $text4, $text5, $text3, $text12,
        $text7, $text8, "toch", $text9, $text12,
        $text6, $text5, $text3 . '</p>' ;?>

        <?php echo '<p>' . $text1, $text11,$text12,
        $text8, "toch dat ", $text5, "zo'n ", $text2, $text10, $text12,
        $text7, $text14, $text9  . '</p>' ;?>
</aside>


