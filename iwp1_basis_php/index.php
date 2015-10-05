<?php
    $files = scandir('./');
    sort($files); // this does the sorting
    echo "<ul>";
    foreach($files as $file)
        {
         if ($file != "index.php"){   
                if (pathinfo($file, PATHINFO_EXTENSION) == "php"){
                    echo'<li><a href="./'.$file.'">'.$file.'</a></li>';
                }         
            }        
        }
    echo "</ul>";
?>

