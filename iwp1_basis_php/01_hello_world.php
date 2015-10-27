<?php
echo "Hello World";

# Template data
$the_title = "Week 4: Hello World";
$the_content = ob_get_clean();
$show_source = array("01_hello_world.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "<p>Het eerste programma, dat je schrijft als je een nieuwe 
programmeertaal leert, is 'Hello World!'. Met dit programma wordt de 
tekst 'Hello World' op het scherm getoond. In PHP kun je hiervoor de 
twee volgende functies gebruiken print() en echo(). Zoek op wat het 
verschil in werking is tussen de twee functies op www.php.net of 
www.w3schools.com/php. Maak een Hello World pagina die 'Hello 
World!' toont op het scherm met deze functies.</p> ";
?>

<?php include("../single.php"); ?>