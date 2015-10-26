<?php
ob_start();

$temperatuur = -273.20;
if ($temperatuur < -273.15)
    echo "Dat kan niet!";
elseif ($temperatuur < 0)
    echo "Het vriest!";
elseif ($temperatuur < 15)
    echo("Beetje koud!");
elseif ($temperatuur < 30)
    echo "Prima weer!";
else
    echo 'Heet!';

 $the_title = "Week 4: Temperatuur";
    $the_content = ob_get_clean();
    $show_source = array("01_temperatuur.php" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>