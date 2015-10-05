<?php

greeting();

/**
 * Function that generates a greeting based on the time of the day. 
 */
function greeting(){
    $midnight = "00:00:00";
    $noon = "12:00:00";
    $evening = "19:00:00";
    if (time() >= strtotime($midnight) && time() < strtotime($noon)){
        echo "Goedemorgen";
    }
    elseif (time() >= strtotime ($noon) && time() < strtotime ($evening)){
        echo "Goedemiddag";
    }
    else{
        echo "Goedenavond";
    }
}

include_once 'show_code.php'; 
showSource(__FILE__);
?>