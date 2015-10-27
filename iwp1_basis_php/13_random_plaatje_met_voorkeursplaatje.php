<?php
$images = array(
    array("HTG_2014_Kindertoneel_16-03_002.jpg", "Doortje aan het zingen",
        "002", 50),
    array("HTG_2014_Kindertoneel_16-03_006.jpg", "De heks is verslagen",
        "006", 40),
    array("HTG_2014_Kindertoneel_16-03_027.jpg", "Doortje moet haar hondje "
        . "afgeven", "027", 20),
    array("HTG_2014_Kindertoneel_16-03_044.jpg", "Doortje is teleurgesteld in "
        . "haar vrienden", "044", 10),
    array("HTG_2014_Kindertoneel_16-03_046.jpg", "Professor Wonder spreekt de "
        . "kinderen toe", "046", 80),
    array("HTG_2014_Kindertoneel_16-03_048.jpg", "Doortje en Professor Wonder "
        . "kijken in de kristallen bol", "048", 60),
    array("HTG_2014_Kindertoneel_16-03_112.jpg", "Voor de poort van "
        . "Smaragdstad", "112", 10),
);

randomImage($images);

/**
 * Shows the images in a random order based on the weight of the value. 
 * @param array $images Array of arrays. array("image_name", 
 * "alt_description", "page_url", random_weight),
 */
function randomImage(array $images) {
    # Get the sum of all the weights in the array. 
    $total_weight = 0;
    foreach ($images as $key => $value) {
        $total_weight += $value[3];
    }
    # Get the random value based on the total weights
    $random_value = mt_rand(0, $total_weight);
    # Sort the items by the weight value
    usort($images, "custom_sort");

    foreach ($images as $key => $value) {
        $random_value -= $value[3];
        if ($random_value < 0) {
            echo "<a href=\"images/$value[0]\"> <img src=\"images/$value[0]\" "
            . "alt=\"$value[1]\" width=\"600\"></a>";
            break;
        }
    }
}

# Template data
$the_title = "Week 5: Willekeurige afbeelding met voorkeur";
$the_content = ob_get_clean();
$show_source = array("13_random_plaatje_met_voorkeursplaatje.php" =>
    __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <p>Pas de functie in opdracht 12 aan zodat je het ene plaatje vaker ziet dan 
het andere plaatje. Laat bijvoorbeeld een plaatje 50% van de keren zien, 
een andere plaatje 20 % van de keren en de overige plaatjes in 10% van 
de keren. </p>";
?>

<?php include("../single.php"); ?>
