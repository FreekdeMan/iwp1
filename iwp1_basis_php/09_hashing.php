<?php

$password = "1234";
myHashing($password, "sha1");
     

/**
 * 
 * @param string $password The password to be encripted. 
 * @param string $hash_function Either md5 to encript using the md5 function or sha1 to encript using the sha1 function
 * @return Hashed string
 * @throws If the input value for $hash_function is not "md5" or "sha1" throw an Exception
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
?>

