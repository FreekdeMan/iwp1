<?php
ob_start();

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
    
    $the_title = "Week 4: Indexed array";
    $the_content = ob_get_clean();
    $show_source = array("07_indexed_array.php" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>
