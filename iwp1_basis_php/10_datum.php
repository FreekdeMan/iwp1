<?php
$current_date = new DateTime("07/01/1982");
        
formatDate($current_date);

/**
 * @param DateTime $date The date that needs to be formatted
 */
function formatDate($date){
    echo date_format($date, 'd-m-Y');
}

# Template data
$the_title = "Week 5: Datum";
$the_content = ob_get_clean();
$show_source = array("10_datum.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <p>Schrijf een functie die de huidige datum teruggeeft in het volgende 
    formaat: dd-mm-yyyy. </p>";
?>

<?php include("../single.php"); ?>