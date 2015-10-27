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
</style>

<?php
$dirname = "images_fotoviewer/";
$images = glob($dirname."*.jpg");
echo "<div class=center>";
# Show each image with a hyperlink on the screen
foreach($images as $image){
    echo "<a href='?foto=" . urldecode($image) . "'><img src='" . $image . "'></a>";
}

# If there is a querystring, show the selected image twice as big 
# beneath the other images. 
if ($_GET["foto"]){
    $image = $_GET["foto"];
    echo "<img class='center' src='" . $image . "' width='400' height='400' >";
}
echo "</div>";

# Template data
$the_title = "Week 7: Fotoviewer";
$the_content = ob_get_clean();
$show_source = array("24_fotoviewer.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <p>Maak met behulp van PHP een fotoviewer. </p>
    <ol type='a'>
	<li>Laat alle foto's uit de map met foto's als thumbnail zien. Laat de 
	map . en niet zien.</li>
	<li>Als er op een thumbnail wordt geklikt, dan wordt de foto in het 
	groot vertoond naast of onder de thumbnail. Tip: stuur de naam 
	van de foto mee in de URL bijvoorbeeld</li>
	<li>Zorg met CSS voor een mooie opmaak van de fotoviewer.</li>
    </ol>";
?>

<?php include("../single.php"); ?>