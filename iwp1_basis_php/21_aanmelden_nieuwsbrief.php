<!DOCTYPE html>
<!-- Alles lijkt te werken, alleen schrijft het script de gegevens niet weg in de textfile. -->
    
<?php
    $email = $_POST["email"];
    $name = $_POST["name"];
    $city = $_POST["city"];
    // Concatenate all values into one string.
    $subscription = strtolower(trim($email)) . "," . ucwords(trim($name)) . "," .  ucwords(trim($city)). "\r\n";
    $nieuwsbrief = fopen("21_nieuwsbrief.txt", "w");
    fwrite($nieuwsbrief, $subscription);
    fclose($nieuwsbrief);
    if($email){
        echo $subscription;
    }    
?>

<html>
    <head>
        <title>Aanmelden Nieuwsbrief</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Aanmelden nieuwsbrief</h1>
        <form action="21_aanmelden_nieuwsbrief.php" method="post">
            <p>E-mail <input type="email" name="email" required/></p>
            <p>Naam <input type="text" name="name" required/></p>
            <p>Woonplaats <input type="text" name="city" required/></p>
            <input type="submit" name="submit" value="aanmelden"/>
        </form>
        
        <a href="21_nieuwsbrief.txt">Overzicht inschrijvingen</a>
    </body>
</html>

<?php
include_once 'show_code.php'; 
showSource(__FILE__);
?>