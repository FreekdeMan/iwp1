<style>
    img {
       border: #014664 solid thick;
       border-radius: 10px;
       margin: 10px;
    }
    a {
        text-decoration: none;
    }
    .center {
        text-align: center;
    }
    #image-navigation {
        color: green;
        text-align: center;
        font-weight: bold;
    }
    #image-navigation li {
        display: inline;
        border: green solid medium;
        border-radius: 5px;
        padding: 5px;
        margin: 10px;
    }
</style>

<?php
$dirname = "images_fotoviewer/";
$images = glob($dirname."*.jpg");
echo "<div class=center>";
for($i = 0; $i<count($images); $i++){
    echo "<a href='?foto=" . array_search($images[$i], $images) . "'><img src='" 
            . $images[$i] . "'></a>";
}

# Control the display and hyperlink for the navigation buttons.
$image = $_GET["foto"];
if ($image != NULL){
    # If there is a querystring,show the navigation buttons and the 
    # selected image twice as big beneath the other images. 
    echo "<img src='" . $images[$image] . "' width='400' height='400' >";
    
    # If the current image is the first one in the range, disable the hyperlink. 
    if ($image == 0){
        $first = "first";
        $prev = "prev";
    }
    else {
        $first = "<a href='?foto=0'>first</a>";
        $prev = "<a href='?foto=" . ($image - 1) . "'>prev</a>";
    }
    
    # If the current selected image is the last in the range, 
    # disable the hyperlink. 
    if ($image == count($images) - 1){
        $next = "next";
        $last = "last";
    }
    else {
        $next = "<a href='?foto=" . ($image + 1) . "'>next</a>";
        $last = "<a href='?foto=" . (count($images) - 1) . "'>last</a>";
    }
?>

<div id="image-navigation">
    <ul>
        <li><?php echo $first ?></li>
        <li><?php echo $prev ?></li>
        <li><?php echo $next ?></li>
        <li><?php echo $last ?></li>
    </ul>
</div>

<?php
}
echo "</div>"
?>

<?php
# Template data
$the_title = "Week 7: Fotoviewer met Navigatie";
$the_content = ob_get_clean();
$show_source = array("25_fotoviewer_navigatie.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <p>Maak een navigator voor de fotoviewer zodat je de volgende foto of de 
    vorige foto kunt tonen. Zorg ook dat je met de navigatie naar de eerste 
    en naar de laatste foto kunt gaan. </p>
    <br/>
    <img src='images/fotoviewer.png' alt='fotoviewer' width='200'/>";
?>

<?php include("../single.php"); ?>