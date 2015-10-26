<?php
    ob_start();
        echo "Hello World";

    $the_title = "Week 4: Hello World";
    $the_content = ob_get_clean();
    $show_source = array("01_hello_world.php" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>