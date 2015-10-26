<?php ob_start(); ?>

<style>
    p {
        display: inline;
    }
</style>

<?php
    $hello_world = "HelloWorld";
    
    for ($i = 10; $i <= 100; $i+=10){
        $letter = $hello_world[($i / 10)-1];
        echo "<p style=\"font-size:{$i}px\">$letter</font>";
    }
        echo "</br>";
        
        for ($i = 1; $i <= 10; $i+=1){
        $size = 500 - (50*($i-1));
        $letter = $hello_world[$i-1];
        echo "<p style=\"font-size:{$size}%\">$letter</font>";
    }
    
    $the_title = "Week 4: For Loop";
    $the_content = ob_get_clean();
    $show_source = array("05_for_loop.php" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>
