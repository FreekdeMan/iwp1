<?php ob_start(); ?>

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
    ?>
    <a href="?foto=<?php echo array_search($images[$i], $images); ?>">
        <img src="<?php echo $images[$i] ?>">
    </a>
<?php 
}
?>

<?php
$foto = $_GET["foto"];
if ($foto != NULL){
    echo "<img src='" . $images[$foto] . "' width='400' height='400' >";
    
    if ($foto == 0){
        $first = "first";
        $prev = "prev";
    }
    else {
        $first = "<a href='?foto=0'>first</a>";
        $prev = "<a href='?foto=" . ($foto - 1) . "'>prev</a>";
    }
    
    if ($foto == count($images) - 1){
        $next = "next";
        $last = "last";
    }
    else {
        $next = "<a href='?foto=" . ($foto + 1) . "'>next</a>";
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
$the_title = "Week 7: Fotoviewer met Navigatie";
$the_content = ob_get_clean();
$show_source = array("25_fotoviewer_navigatie.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>