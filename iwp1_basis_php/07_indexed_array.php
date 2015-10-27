<?php
$dagen = array(
    "Zondag",
    "Maandag",
    "Dinsdag",
    "Woensdag",
    "Donderdag",
    "Vrijdag",
    "Zaterdag"
);

$dagnummer = 2;

echo "Het is vandaag {$dagen[$dagnummer]}";

#Template data
$the_title = "Week 4: Indexed array";
$the_content = ob_get_clean();
$show_source = array("07_indexed_array.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "<p>Maak een geïndexeerde array dagen aan en vul deze 
    met alle <strong>dagen</strong> van de week. Bijvoorbeeld bij index 0 staat 
    zondag, bij index 1 maandag, etc. Maak een variabele <strong>dagnummer</strong> 
    aan en schrijf het array-element met de index dagnummer naar het scherm. 
    Het resultaat ziet er dan als volgt uit: Het is vandaag dinsdag.</p>";
?>

<?php include("../single.php"); ?>
