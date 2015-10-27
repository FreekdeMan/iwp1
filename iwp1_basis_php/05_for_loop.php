<style>
    p {
        display: inline;
    }
</style>

<?php
$hello_world = "HelloWorld";

# Increase the font-size of the letters by increasing the pixels.
for ($i = 10; $i <= 100; $i+=10){
    $letter = $hello_world[($i / 10)-1];
    echo "<p style=\"font-size:{$i}px\">$letter</font>";
}

echo "</br>";

# Decrease the font-size of the letters by decreasing the percentage.
for ($i = 1; $i <= 10; $i+=1){
    $size = 500 - (50*($i-1));
    $letter = $hello_world[$i-1];
    echo "<p style=\"font-size:{$size}%\">$letter</font>";
}

#Template data
$the_title = "Week 4: For Loop";
$the_content = ob_get_clean();
$show_source = array("05_for_loop.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "<ol type='a'>
	<li>Schrijf een for-lus waarbij de lettergrootte van de zin 
        \"Hello World!\" oploopt van 10px naar 100px;</li>
	<li>Schrijf een for-lus waarbij de lettergrootte afloopt van 500 % naar 
        100%. </li>
</ol>";
?>

<?php include("../single.php"); ?>
