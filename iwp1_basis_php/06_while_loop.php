<?php
$table = 3;
$max = 25;
$i = 0;

# Crate a table of 3 from 0 to 25
while ($i<=$max) {
  $result = $i * $table;
  echo "{$i} x {$table} = {$result}<br>";
  $i += 1;
};

#Template data
$the_title = "Week 4: While loop";
$the_content = ob_get_clean();
$show_source = array("06_while_loop.php" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "<p>Maak een whi/e-lus die er voor zorgt dat je de 
    tafel van 3 print op het scherm tot en met de 25 * 3. Het resultaat ziet 
    er dan als volgt uit: 
<br/>0x3:0 
<br/>1x3-3 
<br/>2x3:6
</p>";
?>

<?php include("../single.php"); ?>
