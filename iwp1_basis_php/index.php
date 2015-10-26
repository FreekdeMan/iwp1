<?php
    $the_title = "Home";
    $the_content = "<p>Dit is de homepage voor de opdrachten van Inleiding "
                        . "Web Programmeren van Johan Vergeer</p>"
                        . "<p>Hier staat de broncode voor de algemene files die "
                        . "gebruikt zijn voor de php opdrachten van Inleiding "
                        . "Web Programmeren.</p>";
    $show_source = array(   "index.php" => __FILE__, 
                            "head.php" => "head.php", 
                            "header.php" => "header.php",
                            "footer.php" => "footer.php",
                            "sidebar.php" => "sidebar.php",
                            "single.php" => "single.php",
                            "functions.php" => "functions.php",
                            "style.css" => "static/css/style.css");
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>
