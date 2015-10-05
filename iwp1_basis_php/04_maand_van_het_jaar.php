<?php
    date_default_timezone_set('UTC');
    $this_month = date("n");
    
    switch ($this_month){
        case 1:
            echo 'januari';
            break;
        case 2:
            echo 'februari';
            break;
        case 3:
            echo 'maart';
            break;
        case 4:
            echo 'april';
            break;
        case 5:
            echo 'mei';
            break;
        case 6:
            echo 'juni';
            break;
        case 7:
            echo 'juli';
            break;
        case 8:
            echo 'augustus';
            break;
        case 9:
            echo 'september';
            break;
        case 10:
            echo 'oktober';
            break;
        case 11:
            echo 'november';
            break;
        case 12:
            echo 'december';
            break;
        default:
            echo "This month does not exist";
    }
    
    include_once 'show_code.php'; 
    showSource(__FILE__);
?>