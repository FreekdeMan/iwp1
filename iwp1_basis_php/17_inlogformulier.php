<?php
# Array of users to test the login form. 
$users = array(
    "Piet" => "1234",
    "Henk" => "4321",
    "Klaas" => "ABCD",
    "Nel" => "DCAB",
    "Sjef" => "asdf"
);
if (isset($_POST["submit"])){
    # Get username and password from the login form. 
    $username = $_POST["username"];
    $password = $_POST["password"];

    # Check if the username and password match with the users in the array.
    if (array_key_exists($username, $users)){   
        if ($password == $users[$username]){
            echo "Je bent ingelogd.";
        }else{
            echo "Onjuist wachtwoord ingevoerd.";
        }
    }else {
        echo "Gebruikersnaam wordt niet herkend.";
    }
}
?>

<form action="17_inlogformulier.php" method="post">
    <p>
        Gebruikersnaam: 
        <input type="text" name="username" size="15" maxlength="30" required/>
    </p>
    <p>
        Wachtwoord:
        <input type="password" name="password" size="15" maxlength="30" required/>
    </p>
    <input type="submit" name="submit" value="Inloggen"/>
</form> 


<?php
# Template data
$the_title = "Week 6: Inlogformulier";
$the_content = ob_get_clean();
$show_source = array("17_inlogformulier.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <ol type='a'>
	<li>Maak een inlogformulier waarmee je kunt inloggen op een 
	website. Verzin voor de controle minimaal twee of meerdere 
	gebruikersnamen en wachtwoorden die toegestaan zijn. </li>
	<li>Zorg dat het formulier en het resultaat in een php script staan. 
	Geef een passende melding als het inloggen gelukt of mislukt is. </li>
    </ol>";
?>

<?php include("../single.php"); ?>