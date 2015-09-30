<?php

$afbeeldingen = array(
    array("HTG_2014_Kindertoneel_16-03_002.jpg", "Doortje aan het zingen", "002"),
    array("HTG_2014_Kindertoneel_16-03_006.jpg", "De heks is verslagen", "006"),
    array("HTG_2014_Kindertoneel_16-03_027.jpg", "Doortje moet haar hondje afgeven", "027"),
    array("HTG_2014_Kindertoneel_16-03_044.jpg", "Doortje is teleurgesteld in haar vrienden", "044"),
    array("HTG_2014_Kindertoneel_16-03_046.jpg", "Professor Wonder spreekt de kinderen toe", "046"),
    array("HTG_2014_Kindertoneel_16-03_048.jpg", "Doortje en Professor Wonder kijken in de kristallen bol", "048"),
    array("HTG_2014_Kindertoneel_16-03_112.jpg", "Voor de poort van Smaragdstad", "112"),
);

randomImage($afbeeldingen);

/**
 * 
 * @param array $afbeeldingen_array Array of arrays that contain images, the alt-text and a hyperlink. 
 */
function randomImage($afbeeldingen_array){
    $array_length = count($afbeeldingen_array);
    $random_value = mt_rand(0, $array_length-1);
    $current_image = $afbeeldingen_array[$random_value];
    
    echo "<a href=\"../$current_image[2]\"> <img src=\"images/$current_image[0]\" alt=$current_image[1]></a>";
}

?>

