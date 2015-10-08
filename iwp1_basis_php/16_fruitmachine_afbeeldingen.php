<?php

$generatedImages = [];

/**
 * 
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
?>

<html>
    <style>
        .container {
            margin-left: auto;
            margin-right: auto;
            width: 800px;
            text-align: center;
        }
        
        .letter {
            display: inline;
            font-size: 50;
            color: red;
        }
        .jackpot {
            font-size: 100;
            color: #B16205;
        }

    </style>
    <head>
        <title>Fruitmachine</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="container">
            <h1>Fruitmachine</h1>
            <?php 
            for ($i = 1; $i <= 3; $i++){
                $randomImage = randomImage();
                echo "<div class='letter'>". $randomImage ."</div>";
                array_push($generatedImages, $randomImage);
                }
            areValuesEqual($generatedImages);
            ?>
        </div>       
    </body>
</html> 

<?php
include_once 'show_code.php'; 
showSource(__FILE__);
?>

