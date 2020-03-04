<?php
include "hoofdstuk 3/variabelen.php";
?>
<!DOCTYPE html>
<html>
    <body>
        <div class="footer">

        </div>
    </body>
</html>
<?php

    date_default_timezone_set("Europe/Amsterdam");
    echo date("d-m-y H:i");
    $month = date("n");
    $name;


    date_default_timezone_set("Europe/Amsterdam");
    $uur = date("H");

    if ($uur>= 0 && $uur <= 5)
    {
        echo "Goedennacht";
    }
    elseif ($uur >= 5 && $uur <= 12)
    {
        echo "Goedenochtend";
    }
    elseif ($uur >= 12 && $uur <= 17)
    {
        echo "Goedenmiddag";
    }
    elseif ($uur >= 17 && $uur <= 24)
    {
        echo "Goedenavond";
    }



?>
