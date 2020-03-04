<?php
include "include/script.php";
include "include/header.php";
include "include/footer.php";
?>
<!DOCTYPE html>
<header>
    <h1><?php echo "opdracht 4.2"; ?></h1>
<link rel="stylesheet" type="text/css" href="opdracht42.css">
</header>
<aside>
<?php
    // Database SQL - Van de Wetering,
    // Javascript - Van de Wetering,
    // Rekenen - Van Meer,
    // Nederlands - Rijswijk,
    // L&B - Lambregts,
    // PHP - Evers,
    // ASP - Gijsbrechts,
    // Modelleren - Gijsbrechts,
    // Digtale vaardigheden - Pielage
    // Computertekenen - Van den Berg
    // Engels - Mitrovic

    $courseName = "Database";
    $teacherName = ""; // je kan dit leeg laten, omdat je de techername al declareert in de case

    switch ($courseName)
    {
        case "PHP":
            $teacherName = "Evers";
            break;
        case "Javascript":
        case "Database":
            $teacherName = "Van de Wetering";
            break;
        case "Rekenen":
            $teacherName = "Van Meer";
            break;
        case "Nederlands":
            $teacherName = "Rijswijk";
            break;
        case "L&B":
            $teacherName = "Lambregts";
            break;
        case "ASP":
        case "Modelleren":
            $teacherName = "Gijsbrechts";
            break;
        case "Digitale Vaardigheden":
            $teacherName = "Pielage";
            break;
        case "Computertekenen":
            $teacherName = "Van den Berg";
            break;
        case "Engels":
            $teacherName = "Mitrovic";
            break;
        default:
            echo "Dit vak bestaat niet";
            break;
    }

    echo "Je hebt het vak " . '<span class= "weight">' . $courseName . '</span>' . " en je docent is " . '<span class="weight">' . $teacherName . '</span>';

    ?>
</aside>
