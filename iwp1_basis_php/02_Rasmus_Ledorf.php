<?php
ob_start();

$maker_php = "Rasmus Lerdorf is de maker van \"PHP\". "
        . "Hij ontwikkelde deze \"server-side scripttaal\" in 1994.";
echo strtoupper("Deze regel telt " . strlen($maker_php) . 
        " karakters <br/><br/>");
echo strtoupper($maker_php);



$the_title = "Week 4: Rasmus Ledorf";
$the_content = ob_get_clean();
$show_source = array("Rasmus_Ledorf.php" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>