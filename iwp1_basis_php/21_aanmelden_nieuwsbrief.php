<?php
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
        $subscription = strtolower(trim($email)) . "," . ucwords(trim($name)) . "," .  ucwords(trim($city)). "\r\n";
        
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

if (isset($_POST["remove_file"])) { 
    unlink("21_nieuwsbrief.txt");
}   
    
?>

<style>
    form {
        margin-left: auto;
        margin-right: auto;
        width: 700px;
        background-color: white;
    }

    form p {
	font-size: 16px;
	margin: 5px;
    }
</style>

<html>
    <head>
        <title>Aanmelden Nieuwsbrief</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Aanmelden nieuwsbrief</h1>
        <form action="21_aanmelden_nieuwsbrief.php" method="post">
            <p>E-mail</p> <input type="email" name="email" required/>
            <p>Naam</p> <input type="text" name="name" required/>
            <p>Woonplaats</p> <input type="text" name="city" required/>
            <input type="submit" name="submit" value="aanmelden"/>
        </form>
        
        <div> <?php echo $message; ?> </div>
        
        <br/>
        <br/>
        
        <a href="21_nieuwsbrief.txt">Overzicht inschrijvingen</a>
        
        <br/>
        <br/>
        
        <form action="21_aanmelden_nieuwsbrief.php" method="post">
            <input type="submit" name="remove_file" value="file verwijderen"/>
        </form>
    </body>
</html>

<?php
include_once 'show_code.php'; 
showSource(__FILE__);
?>