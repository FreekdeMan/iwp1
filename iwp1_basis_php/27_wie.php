<?php

require_once("27_persoon.class.php");

$personen = array(
    new Persoon("Jan", "Klaassen", "Brandevoort"),
    new Persoon("Piet", "Hein", "Helmond"),
)

?>

<html>
    <head>
        <title>Personen</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>Personen</h1>        
        <ul>
            <?php 
            foreach ($personen as $persoon) {
                echo "<li>"; echo $persoon->toonNaam(); echo "</li>";
            }
        ?>
        </ul>
            
            
    </body>
</html>
