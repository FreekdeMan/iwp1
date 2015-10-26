<?php ob_start(); ?>


<?php
if (isset($_POST["upload"])){
    echo "No. files uploaded : ".count($_FILES['fotos']['name'])."<br>"; 
    echo "<br>";


    $uploadDir = "upload/";
    $succesful_uploads = 0;
    $failed_uploads = 0;

    for ($i = 0; $i < count($_FILES['fotos']['name']); $i++) {
        $error = 0;
        $foto = $_FILES['fotos']['name'][$i];
        $path_name = "upload/" . $foto;
        # Get the extension of the file
        $ext = substr(strrchr($_FILES['fotos']['name'][$i], "."), 1);

        # Check if the file already exists.
        if(file_exists($path_name)){
           echo $foto . " already exists. <br>";
           $error = 1;
        }
        
        # Check if the file has the right extension.
        if(!in_array(strtolower($ext), array("jpg", "jpeg", "gif", "png"))){
            echo $foto . " does not have the proper extension. You can only upload"
                    . " .jpg, .jpeg, .gif and .png files.";
            $error += 1;    
        }

        # If there is an error, do not upload the file. 
        if (!$error){
            $result = move_uploaded_file($_FILES['fotos']['tmp_name'][$i], $path_name);
            echo $foto . " is uploaded to the server. <br>";
            $succesful_uploads += 1;
        }
        else {
            echo $foto . " is not uploaded to the server. <br>";
            $failed_uploads += 1;
        }
        echo "<br>";
    }

    # Show the number of succesful uploads.
    if ($succesful_uploads == 0){
        echo "No files have been uploaded successfully.<br>";
    }
    elseif ($succesful_uploads == 1) {
        echo "One file has been uploaded successfully.<br>";
    }
    else {
        echo $succesful_uploads . " have been uploaded successfully.<br>";
    }

    echo "<br>";

    # Show the number of failed uploads.
    if ($failed_uploads == 0){
        echo "There have been no errors.<br>";
    }
    elseif ($failed_uploads == 1) {
        echo "There has been one error.<br>";
    }
    else {
        echo "There are " . $failed_uploads . " errors.<br>";
    }
}
?>

<form action="23_meerdere_plaatjes_uploaden.php" method="post" enctype="multipart/form-data">
    <p>Afbeelding <input type="file" name="fotos[]" id="foto" multiple="multiple"/></p>
    <input type="submit" name="upload" value="Upload"/>
</form>


<?php
$the_title = "Week 7: Meerdere plaatjes uploaden";
$the_content = ob_get_clean();
$show_source = array("23_meerdere_plaatjes_uploaden.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>