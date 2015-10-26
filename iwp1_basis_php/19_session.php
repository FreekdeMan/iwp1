<?php
ob_start();

ini_set('display_errors', '1');

session_start();    
if(isset($_SESSION["phpsession"])){
        // Get the value of the current php session.
        $current_value = $_SESSION["phpsession"];
        // Get the date of the last visit to the page. 
        $last_visit = $_SESSION["last_visit"];
        // Increase the session value with 1.
        $_SESSION["phpsession"] = $current_value + 1;
        $_SESSION["last_visit"] = date("d-m-Y");
    }
    else{
        // If this is the first time the page with the cookie is loaded, 
        // set the value to 1.
        $_SESSION["phpsession"] = 1;
        $_SESSION["last_visit"] = date("d-m-Y");
    }
?>

<p>Aantal malen pagina met session opnieuw geladen: 
    <?php echo $_SESSION["phpsession"] ?></p>
<p>Laatste keer op deze pagina ingelogd: 
    <?php echo $_SESSION["last_visit"] ?></p>

<?php
    $the_title = "Week 6: Sessions";
    $the_content = ob_get_clean();
    $show_source = array("19_session.php" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>

