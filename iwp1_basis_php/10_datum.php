<?php
$current_date = new DateTime("07/01/1982");
        
formatDate($current_date);

/**
 * 
 * @param DateTime $date The date that needs to be formatted
 */
function formatDate($date){
    echo date_format($date, 'd-m-Y');
}
?>

