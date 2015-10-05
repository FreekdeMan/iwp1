<?php
$temperatuur = -273.20;
if ($temperatuur < -273.15)
    echo "Dat kan niet!";
elseif ($temperatuur < 0)
    echo "Het vriest!";
elseif ($temperatuur < 15)
    echo("Beetje koud!");
elseif ($temperatuur < 30)
    echo "Prima weer!";
else
    echo 'Heet!';

include_once 'show_code.php'; 
showSource(__FILE__);
?>

