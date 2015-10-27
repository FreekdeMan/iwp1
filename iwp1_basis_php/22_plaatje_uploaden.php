<?php
if (isset($_POST["upload"])){
    # Check if the upload folder already exists, else create a new one.
    if(!file_exists("upload/")){
        mkdir("upload/", 0777, true);
    }
    $image = $_FILES["image"]["name"];
    $path_name = "upload/" . $image;
    # Check if the image already exists in the folder. 
    if(file_exists($path_name)){
        echo $image . "already exists.";
    }
    else{
        move_uploaded_file($_FILES["image"]["tmp_name"], $path_name);
        echo "Stored in: " . $path_name;
    }
}
?>

<form action="22_plaatje_uploaden.php" method="post" enctype="multipart/form-data">
    <p>Afbeelding <input type="file" name="image" id="image"/></p>
    <input type="submit" name="upload" value="Upload"/>
</form>


<?php
# Template data
$the_title = "Week 7: Plaatje uploaden";
$the_content = ob_get_clean();
$show_source = array("22_plaatje_uploaden.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <ol type='a'>
	<li>Maak een formulier waarmee een plaatje op je webserver 
	opgeslagen kan worden. Maak hiervoor een upload map aan.</li>
	<li>Zorg dat er een foutmelding getoond wordt als er iets fout gaat 
	met het versturen naar de server.</li>
	<li>Zorg dat na het uploaden het plaatje wordt getoond op het 
	scherm.</li>
    </ol>";
?>

<?php include("../single.php"); ?>