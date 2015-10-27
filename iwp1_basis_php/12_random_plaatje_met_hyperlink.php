<?php
$images = array(
    array("HTG_2014_Kindertoneel_16-03_002.jpg", "Doortje aan het zingen", 
        "002"),
    array("HTG_2014_Kindertoneel_16-03_006.jpg", "De heks is verslagen", 
        "006"),
    array("HTG_2014_Kindertoneel_16-03_027.jpg", "Doortje moet haar hondje "
        . "afgeven", "027"),
    array("HTG_2014_Kindertoneel_16-03_044.jpg", "Doortje is teleurgesteld in "
        . "haar vrienden", "044"),
    array("HTG_2014_Kindertoneel_16-03_046.jpg", "Professor Wonder spreekt de "
        . "kinderen toe", "046"),
    array("HTG_2014_Kindertoneel_16-03_048.jpg", "Doortje en Professor Wonder "
        . "kijken in de kristallen bol", "048"),
    array("HTG_2014_Kindertoneel_16-03_112.jpg", "Voor de poort van "
        . "Smaragdstad", "112"),
);

randomImage($images);

/**
 * @param array $images_array Array of arrays that contain images, 
 * the alt-text and a hyperlink. 
 */
function randomImage($images_array){
    $array_length = count($images_array);
    $random_value = mt_rand(0, $array_length-1);
    $current_image = $images_array[$random_value];
    
    echo "<a href=\"images/$current_image[0]\"> <img src=\"images/$current_image[0]"
            . "\" alt=\"$current_image[1]\" width=\"600\"></a>";
}

# Template data
$the_title = "Week 5: Random afbeelding met hyperlink";
$the_content = ob_get_clean();
$show_source = array("12_random_plaatje_met_hyperlink.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <p>Schrijf een functie die gegevens van een random plaatje teruggeeft. 
Deze functie retourneert een array met de naam van het plaatje (src- 
attribuut), de alt-attribuut en de naam van de bijbehorende link. De 
functie maakt gebruik van de PHP functie <em>mt_rand()</em>. 
Maak een pagina die gebruik maakt van jouw eigengemaakte functie en 
iedere keer als deze wordt geladen, een ander plaatje toont. Als je op 
een plaatje klikt, dan wordt de bijbehorende link geopend (voor meer 
informatie over het plaatje). </p>";
?>

<?php include("../single.php"); ?>

