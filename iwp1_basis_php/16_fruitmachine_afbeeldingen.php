<style>
    .images {
        text-align: center;        
    }
    
    .image {
        display: inline;
    }
    .jackpot {
        font-size: 100px;
        color: #B16205;
        margin: 10px;
    }
</style>

<?php

# Array for the generated images
$generatedImages = [];

/**
 * @return string Random letter that is generated from an array.
 */
function randomImage() {
    $images = [ "<img src='images/fruitmachine1.jpg' alt='Star'>", 
                "<img src='images/fruitmachine2.jpg' alt='Seven'>", 
                "<img src='images/fruitmachine3.jpg' alt='Bell'>"];
    $rnd_image =  $images[mt_rand(0, count($images)-1)];
    return $rnd_image;
}

/**
 * Check if the images from the fruitmachine are equal. 
 * If the images are equal --> Output Jackpot!
 * @param type $images the letters from the fruitmachine
 */
function areValuesEqual($images){
    if (count(array_unique($images)) == 1) {
        echo "<p class='jackpot'>Jackpot!!</p>";
    }
}

echo "<div class=images>";
# Generate and show 3 images to the screen.
for ($i = 1; $i <= 3; $i++){
    $randomImage = randomImage();
    echo "<div class='image'>". $randomImage ."</div>";
    array_push($generatedImages, $randomImage);
    }
# After the images have been generated, check if they are all equal
areValuesEqual($generatedImages);
echo "</div>";

# Template data
$the_title = "Week 6: Fruitmachine met afbeeldingen";
$the_content = ob_get_clean();
$show_source = array("16_fruitmachine_afbeeldingen.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <p>Herschrijf de functie uit opdracht 15 zodat je in plaats van 3 letters 3 
laatjes te zien krijgt. Als de 3 plaatje identiek zijn, dan krijgt je de 
boodschap 'Jackpot' getoond. </p>";
?>

<?php include("../single.php"); ?>