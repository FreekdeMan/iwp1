<?php
greeting();

/**
 * Function that generates a greeting based on the time of the day. 
 */
function greeting(){
    $midnight = "00:00:00";
    $noon = "12:00:00";
    $evening = "19:00:00";
    if (time() >= strtotime($midnight) && time() < strtotime($noon)){
        echo "Goedemorgen";
    }
    elseif (time() >= strtotime ($noon) && time() < strtotime ($evening)){
        echo "Goedemiddag";
    }
    else{
        echo "Goedenavond";
    }
}

# Template data
$the_title = "Week 4: Groet";
$the_content = ob_get_clean();
$show_source = array("11_groet.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <p>Schrijf een functie die afhankelijk van de huidige tijd een van de 
    volgende groeten teruggeeft: goede morgen, goede middag of goede avond. </p>";
?>

<?php include("../single.php"); ?>