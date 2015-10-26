<?php ob_start(); ?>

<?php
    // Array of users to test the login form. 
    $users = array(
        "Piet" => "1234",
        "Henk" => "4321",
        "Klaas" => "ABCD",
        "Nel" => "DCAB",
        "Sjef" => "asdf"
    );

    // Get username and password from the login form. 
    $username = $_GET["username"];
    $password = $_GET["password"];
   
    if (array_key_exists($username, $users)){        
        if ($password == $users[$username]){
            echo "Je bent ingelogd.";
        }else{
            echo "Onjuist wachtwoord ingevoerd.";
        }
    }else {
        echo "Gebruikersnaam wordt niet herkend.";
    }
?>

<form action="17_Inlogformulier.php" method="get">
    <p>
        Gebruikersnaam: 
        <input type="text" name="username" size="15" maxlength="30"/>
    </p>
    <p>
        Wachtwoord:
        <input type="password" name="password" size="15" maxlength="30" />
    </p>
    <input type="submit" name="submit" value="Inloggen"/>
</form> 


<?php
$the_title = "Week 6: Inlogformulier";
$the_content = ob_get_clean();
$show_source = array("17_inlogformulier.php" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>