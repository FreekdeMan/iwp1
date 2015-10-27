<style>
    form {
        margin-left: auto;
        margin-right: auto;
        width: 700px;
    }

    form p {
	font-size: 16px;
	margin: 5px;
    }
</style>

<?php
# If the submit button is clicked, add a new subscription to the file. 
if (isset($_POST["submit"])) {
    if($_POST["email"]){
            $email = $_POST["email"];
        }
        if($_POST["name"]){
            $name = $_POST["name"];
        }
        if($_POST["city"]){
            $city = $_POST["city"];
        }        
        # Check if all values have been submitted.
        if($email && $name && $city){
        # Concatenate all values into one string.
        $subscription = strtolower(trim($email)) . "," . ucwords(trim($name)) . 
                "," .  ucwords(trim($city)). "\r\n";
        
        # Check if the file exists, else create new file.
        if(file_exists("21_nieuwsbrief.txt")){
            $nieuwsbrief = fopen("21_nieuwsbrief.txt", "a+");
        }
        else {
            $nieuwsbrief = fopen("21_nieuwsbrief.txt", "w");
        }       
        # Add all the current emails to an array.
        $current_emails = array();
        while($row = fgetcsv($nieuwsbrief)) {
            $current_emails[] = $row[0];
        }
        # Check if the email already exists in the array. 
        if(in_array($email, $current_emails)){
            $message = $email . " bestaat al \r\n";
        }
        # If the email does not exist in the array, add it to the file.
        else{
            fwrite($nieuwsbrief, $subscription);
            $message = "Je bent aangemeld voor de nieuwsbrief.";
        }    
        fclose($nieuwsbrief);
    } 
}        

# Remove the subscribers file. 
if (isset($_POST["remove_file"])) { 
    unlink("21_nieuwsbrief.txt");
}
?>

<!-- Entry form for new subscribers -->
<form action="21_aanmelden_nieuwsbrief.php" method="post">
    <p>E-mail</p> <input type="email" name="email" required/>
    <p>Naam</p> <input type="text" name="name" required/>
    <p>Woonplaats</p> <input type="text" name="city" required/>
    <input type="submit" name="submit" value="aanmelden"/>
</form>
<div> <?php echo $message; ?> </div>
<br/>
<br/>
<a href="21_nieuwsbrief.txt" target="_blank">Overzicht inschrijvingen</a>
<br/>
<br/>

<!-- Remove subscribers file from server-->
<form action="21_aanmelden_nieuwsbrief.php" method="post">
    <input type="submit" name="remove_file" value="file verwijderen"/>
</form>


<?php
# Template data
$the_title = "Week 7: Aanmelden nieuwsbrief";
$the_content = ob_get_clean();
$show_source = array("21_aanmelden_nieuwsbrief.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <ol type='a'>
	<li>Maak een pagina met een formulier waarmee je je kunt 
	aanmelden voor een nieuwsbrief. De velden e-mail, naam en 
	woon laats zi'n ver licht. Zie onderstaande afbeelding. <br/>
	<img src='images/subscription_form.png' alt='Inschrijfformulier'/></li>
	<li>Maak de php code waarmee je de ingevoerde gegevens en de 
	huidige datum gescheiden door komma's opslaat in het bestand 
	nieuwbrief.txt. Bijvoorbeeld: <br/><br/>
	test@test.bn,Jan,Elburg,2014-10-29,test2@test.bn,Piet,Didam,
        2014-10-9test3@test.bn,Karel,Borken,2014-10-29, </li>
    </ol>";
?>

<?php include("../single.php"); ?>