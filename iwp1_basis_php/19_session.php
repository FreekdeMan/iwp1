// TODO Verder afwerken. Na de eerste keer laat de pagina niets meer zien. 

<?php
session_start();    
if(!empty($_SESSION["phpsession"])){
        // Get the value of the current php session.
        $current_value = $_SESSION["phpsession"];
        // Get the date of the last visit to the page. 
        $last_visit = $_SESSION("last_visit");
        // Increase the session value with 1.
        $_SESSION["phpsession"] = $current_value + 1;
        $_SESSION["last_visit"] = date("dd-mm-yyyy");
    }else{
        // If this is the first time the page with the cookie is loaded, set the value to 1.
        $_SESSION["phpsession"] = 1;
        $_SESSION["last_visit"] = date("d-m-Y");
    }
?>

<html>
    <head>
        <title>Session pagina</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>Aantal malen pagina met session opnieuw geladen: <?php echo $_SESSION["phpsession"] ?></p>
        <p>Laatste keer op deze pagina ingelogd: <?php echo $_SESSION["last_visit"] ?></p>
    </body>
</html>

<?php
include_once 'show_code.php'; 
showSource(__FILE__);
?>

