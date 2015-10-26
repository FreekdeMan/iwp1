<?php
ob_start();

$password = "1234";
myHashing($password, "sha1");
     

/**
 * 
 * @param string $password The password to be encripted. 
 * @param string $hash_function Either md5 to encript using the md5 
 * function or sha1 to encript using the sha1 function
 * @return Hashed string
 * @throws If the input value for $hash_function is not "md5" or "sha1" 
 * throw an Exception
 */
function myHashing($input, $hash_function){
    if ($hash_function == "md5"){
        echo md5($input);
    }
    elseif ($hash_function == "sha1") {
        echo sha1($input);
    }  
    else {
        echo "The encription function is not properly set.";
    }
}

    $the_title = "Week 5: Hashing";
    $the_content = ob_get_clean();
    $show_source = array("09_hashing.php" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>

