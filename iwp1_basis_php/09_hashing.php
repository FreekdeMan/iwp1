<?php
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

# Template data
$the_title = "Week 5: Hashing";
$the_content = ob_get_clean();
$show_source = array("09_hashing.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <p>Met hashing kun je een String versleutelen. Uit de verkregen hash code 
    kan de oorspronkelijke gegevens niet meer terug worden gehaald. 
    Schrijf een functie <strong>myHashing</strong> die een wachtwoord versleuteld met de 
    PHP functie md5() of shal(). Zoek op hoe deze twee functies werken op 
    <a href='http://www.php.net'>www.php.net</a> of 
    <a href='http://www.w3schools.com/php'>www.w3schools.com/php</a>. De functie krijgt 2 
    argumenten mee (wachtwoord en type hashing) en retourneert een 
    MD5 hash of een SHAI hash. De aanroep van de functie kan er als volgt 
    uitzien: </p>
    <p><strong>myHashing ('wachtwoord','MD5'); </strong></p>";
?>

<?php include("../single.php"); ?>

