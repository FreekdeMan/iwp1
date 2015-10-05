<style>
    img {
        width: 400px
    }
</style>

<?php

$table_columns = 3;
$table_rows = 3;
$table_cells = $table_columns * $table_rows;

$images = array(
    array("HTG_2014_Kindertoneel_16-03_002.jpg", "Doortje aan het zingen", "002"),
    array("HTG_2014_Kindertoneel_16-03_006.jpg", "De heks is verslagen", "006"),
    array("HTG_2014_Kindertoneel_16-03_027.jpg", "Doortje moet haar hondje afgeven", "027"),
    array("HTG_2014_Kindertoneel_16-03_044.jpg", "Doortje is teleurgesteld in haar vrienden", "044"),
    array("HTG_2014_Kindertoneel_16-03_046.jpg", "Professor Wonder spreekt de kinderen toe", "046"),
    array("HTG_2014_Kindertoneel_16-03_048.jpg", "Doortje en Professor Wonder kijken in de kristallen bol", "048"),
    array("HTG_2014_Kindertoneel_16-03_112.jpg", "Voor de poort van Smaragdstad", "112"),
);

echo "<table>";
for($i=1; $i<=$table_rows; $i++) {
    echo "<tr>";
    for ($j=1; $j<=$table_columns; $j++) {
        
        echo "<td>";
        randomImage($images);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

/**
 * 
 * @param array $afbeeldingen_array Array of arrays that contain images, the alt-text and a hyperlink. 
 */
function randomImage($images){
    $array_length = count($images);
    $random_value = mt_rand(0, $array_length-1);
    $current_image = $images[$random_value];
    
    echo "<a href=\"../$current_image[2]\"> <img src=\"images/$current_image[0]\" alt=\"$current_image[1]\"></a>";
}

include_once 'show_code.php'; 
showSource(__FILE__);
?>