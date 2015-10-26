<?php
ob_start();

if(isset($_COOKIE["color"])){
    $new_color = $_GET["color"];
    $current_color = $_COOKIE["color"];
    if ($new_color != $current_color && $new_color != null) {
        $color = $new_color;
        setcookie("color", $color, time() + 60*60*24*7);
    }else {
        $color = $current_color;
    }

}else{
    // If this is the first time the page with the cookie is loaded, 
    // set the background color to white.
    $color = "#fff";
    setcookie("color", $color, time() + 60*60*24*7);
}
?>

<style>
    body {
        background-color: <?php echo $color; ?>;
    }
</style>

<form action="20_cookie_achtergrondkleur.php" method="get">
    <p>Vul hier een hexadecimale waarde in om de kleur van de achtergrond in 
        te stellen.</p>
    <p>Je kan een hexadecimale waarde kiezen op 
        <a href="http://www.colorpicker.com" target="_blank">Colorpicker</a></p>
    <p>Kleur: <input type="text" name="color" maxlength="7"/></p>
    <input type="submit" name="submit" value="Achtergrondkleur aanpassen"/> 
</form>       

<?php
$the_title = "Week 6: Achtergrondkleur instellen met cookie";
$the_content = ob_get_clean();
$show_source = array("20_cookie_achtergrondkleur.php" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>