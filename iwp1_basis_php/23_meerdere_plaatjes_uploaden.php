<?php ob_start(); ?>


<?php
if (isset($_POST["upload"])){
    if(!file_exists("upload/")){
        mkdir("upload/", 0777, true);
    }
    $foto = $_FILES["foto"]["name"];
    $path_name = "upload/" . $foto;
    if(file_exists($path_name)){
        echo $foto . "already exists.";
    }
    else{
        move_uploaded_file($_FILES["foto"]["tmp_name"], $path_name);
        echo "Stored in: " . $path_name;
    }
}
?>

<form action="22_plaatje_uploaden.php" method="post" enctype="multipart/form-data">
    <p>Afbeelding <input type="file" name="foto" id="foto" required=""/></p>
    <input type="submit" name="upload" value="Upload"/>
</form>


<?php
$the_title = "Week 7: Plaatje uploaden";
$the_content = ob_get_clean();
$show_source = array("22_plaatje_uploaden.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>