<style>
    .letters {
        text-align: center;        
    }    
    .letter {
        display: inline;
        font-size: 80px;
        color: red;
    }
    .jackpot {
        font-size: 100px;
        color: #B16205;
        margin: 10px;
    }
</style>

<?php
# Array for the generated letters
$generatedLetters = [];

/**
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

echo "<div class=letters>";
# Generate and show 3 letters to the screen
for ($i = 1; $i <= 3; $i++){
    $randomLetter = randomLetter();
    echo "<div class='letter'>" . $randomLetter . "</div>";
    array_push($generatedLetters, $randomLetter);
    }
# After the letters have been generated, check if they are all equal
areValuesEqual($generatedLetters); 
echo "</div>";

# Template data
$the_title = "Week 6: Fruitmachine";
$the_content = ob_get_clean();
$show_source = array("15_fruitmachine.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <p>Schrijf een functie die willekeurige reeksen van 3 letters (A,B,C) 
teruggeeft. Bijvoorbeeld A C B, B B A, C A C. Gebruik hiervoor de PHP 
functie <em>mt_rand()</em>. Als de letters driemaal hetzelfde zijn, dan wordt de 
boodschap 'Jackpot' getoond. 
Toon de letter reeksen in aparte div elementen en geef ze vorm met CSS. </p>";
?>

<?php include("../single.php"); ?>

