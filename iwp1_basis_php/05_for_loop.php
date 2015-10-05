<style>
    p {
        display: inline;
        /*font-size: 10px;*/
    }
</style>

<?php
    $hello_world = "HelloWorld";
    
    for ($i = 10; $i <= 100; $i+=10){
        $letter = $hello_world[($i / 10)-1];
        echo "<p style=\"font-size:{$i}px\">$letter</font>";
    }
        echo "</br>";
        
        for ($i = 1; $i <= 10; $i+=1){
        $size = 500 - (50*($i-1));
        $letter = $hello_world[$i-1];
        echo "<p style=\"font-size:{$size}%\">$letter</font>";
    }
    
    include_once 'show_code.php'; 
    showSource(__FILE__);
?>
