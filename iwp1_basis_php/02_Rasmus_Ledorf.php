<?php
$maker_php = "Rasmus Lerdorf is de maker van \"PHP\". Hij ontwikkelde deze \"server-side scripttaal\" in 1994.";
        echo strlen($maker_php); 
        echo "\n";
        echo strtoupper($maker_php);
        
        include_once 'show_code.php'; 
        showSource(__FILE__);
?>