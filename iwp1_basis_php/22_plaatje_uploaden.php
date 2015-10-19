<?php
    $target_dir = "http://i162906.iris.fhict.nl/iwp1_basis_php/upload/";
    if(file_exists($target_dir)){
        echo "De map bestaat.";
    }else{
        echo "De map bestaat niet.";
    }
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);
    echo $target_file;
    $upload_ok = 1;
    $upload_message;
    
    $_FILES["foto"][PATHINFO_FILENAME];
    $image_file_type = pathinfo($target_file, PATHINFO_EXTENSION);
    
    // Check if file is an actual image or a fake image
    if(isset($_POST["upload"])){
        $check = getimagesize($_FILES["foto"]["tmp_name"]);
        if($check != false) {
            echo "File is an image - " . $check["mime"] . ".";
            $upload_ok = 1;
        } else{
            echo "File is not an image.";
            $upload_ok = 0;
        }
        
        // Check if the file already exists
        if (file_exists($target_file)){
            echo "Sorry, file already exists.";
            $upload_ok = 0;
        }
        
        // Limit the size of the file to 2 MB
        if($_FILES["foto"]["size"] > 2097152){
            echo "Sorry, your file is too large.";
            $upload_ok = 0;
        }
        
        // Limit file type
        if ($image_file_type != "jpg" && $image_file_type !="png" && $image_file_type != "jpeg" && $image_file_type != "gif"){
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $upload_ok = 0;
        }
        
        // Check if upload_ok == 1
        if ($upload_ok == 0){
            echo "Sorry, your file was not uploaded.";
        } else{
            if (move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)){
                echo "The file " . basename( $_FILES["foto"]["name"]) . " has been uploaded.";
            } else {
                echo "Sorry, there was an error uploading your file.";
                return;
            }
        } 
    }
?>

<html>
    <head>
        <title>Plaatje uploaden</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Afbeelding uploaden</h1>
        <form action="22_plaatje_uploaden.php" method="post">
            <p>Afbeelding <input type="file" name="foto" id="foto" required/></p>
            <input type="submit" name="upload" value="Upload"/>
        </form>
    </body>
</html>

<?php
include_once 'show_code.php'; 
showSource(__FILE__);
?>
