<?php
$temperature = -273.20;
if ($temperature < -273.15)
    echo "Dat kan niet!";
elseif ($temperature < 0)
    echo "Het vriest!";
elseif ($temperature < 15)
    echo("Beetje koud!");
elseif ($temperature < 30)
    echo "Prima weer!";
else
    echo 'Heet!';


# Template data
$the_title = "Week 4: Temperatuur";
$the_content = ob_get_clean();
$show_source = array("01_temperatuur.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "<p>Maak de variabele met de naam 'temperatuur' aan en 
    zorg dat met een if elseif ... else statement de volgende boodschappen 
    worden getoond in de browser: </p>
<ol type='a'>
	<li>Als de temperatuur lager is dan 0 graden, dan wordt de boodschap 
        'Het vriest!' getoond;  </li>
	<li>Als de temperatuur lager is dan -273.15 graden , dan wordt de 
        boodschap 'Dat kan niet!' getoond; </li>
	<li>Als de temperatuur tussen de 0 en de 15 graden is, dan wordt de 
        boodschap 'Beetje koud!' getoond; </li>
	<li>Als de temperatuur boven de 15 en onder de 30 graden is, wordt de 
        boodschap 'Prima weer!' getoond; </li>
	<li>Als de temperatuur 30 graden of hoger is, dan wordt de boodschap 
        'Heet!' getoond. </li>
</ol>";
?>

<?php include("../single.php"); ?>