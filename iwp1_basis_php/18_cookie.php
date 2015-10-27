<?php
if(isset($_COOKIE["phpcookie"])){
    # Check if the cookie has already been created
    $current_value = $_COOKIE["phpcookie"];
    # Increase the cookie value with 1 and save it for 1 week.
    setcookie("phpcookie", $current_value + 1, time()+60*60*24*7);
}
else{
    # If this is the first time the page with the cookie is loaded, set the 
    # value to 1.
    setcookie("phpcookie", 1, time()+60*60*24*7);
}

# Show to the screen how many times the cookie has been loaded. 
echo "<p> De pagina is op dit moment " . $_COOKIE["phpcookie"] .
        " keer geladen.</p>";

# Template data
$the_title = "Week 6: Cookie";
$the_content = ob_get_clean();
$show_source = array("18_cookie.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <ol type='a'>
	<li>Schrijf een PHP script waarin met behulp van een Cookie wordt 
	bijgehouden hoe vaak een bepaalde webpagina is bezocht. Bij elk 
	bezoek aan de pagina moet de teller met een worden opgehoogd. 
	Controleer de update van de Cookie met Firebug of in Chrome 
	met Element Inspector - Resources - Cookies.</li>
	<li>Laat op je pagina zien hoe vaak de pagina al is bezocht.</li>
    </ol>";
?>

<?php include("../single.php"); ?>

