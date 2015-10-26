<?php
ob_start();

// If the submit button is clicked, add a new subscription to the file. 
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

        
        if($email && $name && $city){
        // Concatenate all values into one string.
        $subscription = strtolower(trim($email)) . "," . ucwords(trim($name)) . 
                "," .  ucwords(trim($city)). "\r\n";
        
        // Check if the file exists, else create new file
        if(file_exists("21_nieuwsbrief.txt")){
            $nieuwsbrief = fopen("21_nieuwsbrief.txt", "a+");
        }
        else {
            $nieuwsbrief = fopen("21_nieuwsbrief.txt", "w");
        }       
        $current_emails = array();
        while($row = fgetcsv($nieuwsbrief)) {
            $current_emails[] = $row[0];
        }

        if(in_array($email, $current_emails)){
            $message = $email . " bestaat al \r\n";
        }
        else{
            fwrite($nieuwsbrief, $subscription);
            $message = "Je bent aangemeld voor de nieuwsbrief.";
        }    
        fclose($nieuwsbrief);
    } 
}        

// Remove the subscribers file. 
if (isset($_POST["remove_file"])) { 
    unlink("21_nieuwsbrief.txt");
}   
    
?>

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
    $the_title = "Week 7: Aanmelden nieuwsbrief";
    $the_content = ob_get_clean();
    $show_source = array("21_aanmelden_nieuwsbrief.php" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>