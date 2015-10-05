<?php

$generatedLetters = [];

/**
 * 
 * @return string Random letter that is generated from an array.
 */
function randomLetter() {
    $letters = ["A", "B", "C"];
    $rnd_letter =  $letters[mt_rand(0, count($letters)-1)];
    return $rnd_letter;
}

/**
 * Check if the letters from the fruitmachine are equal. 
 * If the letters are equal --> Output Jackpot!
 * @param type $letters the letters from the fruitmachine
 */
function areValuesEqual($letters){
    if (count(array_unique($letters)) == 1) {
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
                $randomLetter = randomLetter();
                echo "<div class='letter'>". $randomLetter ."</div>";
                array_push($generatedLetters, $randomLetter);
                }
            areValuesEqual($generatedLetters);                
            ?>
        </div>       
    </body>
</html>

