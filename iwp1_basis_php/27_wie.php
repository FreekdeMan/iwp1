<?php
require_once("27_persoon.class.php");

# An array of people to use in this example
$people = array(
    new Person("Jan", "Klaassen", "Brandevoort"),
    new Person("Piet", "Hein", "Helmond"),
)
?>

<ul>
    <?php 
    foreach ($people as $person) {
        echo "<li>" . $person->show_name() . "</li>";
    }
    ?>
</ul>

<?php
# Template data
$the_title = "Week 8: Classes";
$the_content = ob_get_clean();
$show_source = array(   "27_wie.php" => __FILE__,
                        "27_persoon.class.php" => "27_persoon.class.php");
include "sidebar_array.php";
$sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>
