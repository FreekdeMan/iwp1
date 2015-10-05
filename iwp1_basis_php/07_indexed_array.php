<?php
    $dagen = array(
        "Zondag",
        "Maandag",
        "Dinsdag",
        "Woensdag",
        "Donderdag",
        "Vrijdag",
        "Zaterdag"
    );
    
    $dagnummer = 2;
    
    echo "Het is vandaag {$dagen[$dagnummer]}";
    
    include_once 'show_code.php'; 
    showSource(__FILE__);
?>
