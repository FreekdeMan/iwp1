<?php
$php_creator = "Rasmus Lerdorf is de maker van \"PHP\". "
        . "Hij ontwikkelde deze \"server-side scripttaal\" in 1994.";
echo strtoupper("Deze regel telt " . strlen($php_creator) . 
        " karakters <br/><br/>");
echo strtoupper($php_creator);


#Template data
$the_title = "Week 4: Rasmus Ledorf";
$the_content = ob_get_clean();
$show_source = array("Rasmus_Ledorf.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "<p>Zet de volgende 2 regels: Rasmus Lerdorf is de maker van 'PHP'. Hij 
ontwikkelde deze 'server-side scripttaal' in 1994. in de variabele 
'makerPHP'. Maak gebruik van PHP string functies strlen() en 
strtoupper(). </p>
<ol type='a'>
    <li>Toon de 2 regels op het beeld. </li>
    <li>Laat zien uit hoeveel karakters de regels bestaat. </li>
    <li>Toon de regels in hoofdletters.</li> 
</ol> ";
?>

<?php include("../single.php"); ?>