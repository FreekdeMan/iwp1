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
</style>

<?php
$dirname = "images_fotoviewer/";
$images = glob($dirname."*.jpg");
echo "<div class=center>";
foreach($images as $image){
?>
<a href="?foto=<?php echo urlencode($image); ?>">
    <img src="<?php echo $image ?>">
</a>
<?php } ?>

<?php
if ($_GET["foto"]){
    $foto = $_GET["foto"];
    echo "<img class='center' src='" . $foto . "' width='400' height='400' >";
}
echo "</div>"
?>



<?php
$the_title = "Week 7: Fotoviewer";
$the_content = ob_get_clean();
$show_source = array("24_fotoviewer.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>