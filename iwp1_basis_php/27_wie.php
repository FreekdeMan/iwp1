<?php
ob_start();

require_once("27_persoon.class.php");

$personen = array(
    new Persoon("Jan", "Klaassen", "Brandevoort"),
    new Persoon("Piet", "Hein", "Helmond"),
)
?>

<ul>
    <?php 
    foreach ($personen as $persoon) {
        echo "<li>"; echo $persoon->toonNaam(); echo "</li>";
    }
    ?>
</ul>

<?php
$the_title = "Week 8: Classes";
$the_content = ob_get_clean();
$show_source = array(   "27_wie.php" => __FILE__,
                        "27_persoon.class.php" => "27_persoon.class.php");
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>
