<?php

$afbeeldingen = array(
    array("HTG_2014_Kindertoneel_16-03_002.jpg", "Doortje aan het zingen", "002", 50),
    array("HTG_2014_Kindertoneel_16-03_006.jpg", "De heks is verslagen", "006", 40),
    array("HTG_2014_Kindertoneel_16-03_027.jpg", "Doortje moet haar hondje afgeven", "027", 20),
    array("HTG_2014_Kindertoneel_16-03_044.jpg", "Doortje is teleurgesteld in haar vrienden", "044", 10),
    array("HTG_2014_Kindertoneel_16-03_046.jpg", "Professor Wonder spreekt de kinderen toe", "046", 80),
    array("HTG_2014_Kindertoneel_16-03_048.jpg", "Doortje en Professor Wonder kijken in de kristallen bol", "048", 60),
    array("HTG_2014_Kindertoneel_16-03_112.jpg", "Voor de poort van Smaragdstad", "112", 10),
);

randomImage($afbeeldingen);

/**
 * Shows the images in a random order based on the weight of the value. 
 * @param array $afbeeldingen Array of arrays. array("image_name", "alt_description", "page_url", random_weight),
 */
function randomImage(array $afbeeldingen){
    // Get the sum of all the weights in the array. 
    $total_weight = 0;
    foreach ($afbeeldingen as $key => $value) {
    $total_weight += $value[3];
    }
    // Get the random value based on the total weights
    $random_value = mt_rand(0, $total_weight);
    // Sort the items by the weight value
    usort($afbeeldingen, "custom_sort");
    
    foreach ($afbeeldingen as $key => $value) {
        $random_value -= $value[3];
        if ($random_value < 0){
            echo "<a href=\"../$value[2]\"> <img src=\"images/$value[0]\" alt=\"$value[1]\"></a>";
            break;
        }
    }
    
    
    
//    
}

/**
 * Custom sort function for usort function
 * @param type $value_a The first value to be compared
 * @param type $value_b The second value to be compared
 * @return type return if value_a is bigger than value_b
 */
function custom_sort ($value_a, $value_b){
    return $value_a[3]>$value_b[3];
}

include_once 'show_code.php'; 
showSource(__FILE__);
?>

