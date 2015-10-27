<?php

$table_columns = 3;
$table_rows = 3;
$cell_width = floor(680 / $table_columns);
$table_cells = $table_columns * $table_rows;

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
?>

<style>
    img {
        width: <?php echo $cell_width;?>px;
    }
</style>

<?php
echo "<table>";
for($i=1; $i<=$table_rows; $i++) {
    echo "<tr>";
    for ($j=1; $j<=$table_columns; $j++) {        
        echo "<td>";
        # Show a random image in each table cell
        randomImage($images);
        echo "</td>";
    }
    echo "</tr>";
}
echo "</table>";

/**
 * @param array $afbeeldingen_array Array of arrays that contain images, 
 * the alt-text and a hyperlink. 
 */
function randomImage($images){
    $array_length = count($images);
    $random_value = mt_rand(0, $array_length-1);
    $current_image = $images[$random_value];
    
    echo "<a href=\"images/$current_image[0]\"> <img src=\"images/$current_image[0]"
            . "\" alt=\"$current_image[1]\"></a>";
}

# Template data
$the_title = "Week 5: Willekeurige afbeeldingen in tabel";
$the_content = ob_get_clean();
$show_source = array("14_random_images_in_table.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <p>Zorg dat je meerdere random plaatjes tegelijkertijd toont in een tabel. 
Het aantal rijen en kolommen in de tabel moet gemakkelijk aan te 
passen zijn. Tip: maak gebruik van variabelen voor het aantal rijen en 
kolommen.</p>";
?>

<?php include("../single.php"); ?>