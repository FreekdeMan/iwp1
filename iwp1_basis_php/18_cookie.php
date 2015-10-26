<?php
    if(isset($_COOKIE["phpcookie"])){
        $current_value = $_COOKIE["phpcookie"];
        // Increase the cookie value with 1 and save it for 1 week.
        setcookie("phpcookie", $current_value + 1, time()+60*60*24*7);
    }else{
        // If this is the first time the page with the cookie is loaded, set the value to 1.
        setcookie("phpcookie", 1, time()+60*60*24*7);
    }
?>

<p>
    De pagina is op dit moment <?php echo $_COOKIE["phpcookie"] ?> keer geladen.
</p>

<?php
    $the_title = "Week 6: Cookie";
    $the_content = ob_get_clean();
    $show_source = array("18_cookie.php" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>

