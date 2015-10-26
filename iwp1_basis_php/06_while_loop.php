<?php
ob_start();

$table = 3;
$max = 25;
$i = 0;


while ($i<=$max) {
  $result = $i * $table;
  echo "{$i} x {$table} = {$result}<br>";
  $i += 1;
};

    $the_title = "Week 4: While loop";
    $the_content = ob_get_clean();
    $show_source = array("06_while_loop.php" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>
