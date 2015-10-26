<?php
ob_start();

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
    
 $the_title = "Week 4: Maand van het jaar";
    $the_content = ob_get_clean();
    $show_source = array("04_maand van het jaar.php" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>