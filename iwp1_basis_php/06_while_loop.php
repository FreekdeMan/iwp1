<?php
$table = 3;
$max = 25;
$i = 0;


while ($i<=$max) {
  $result = $i * $table;
  echo "{$i} x {$table} = {$result}<br>";
  $i += 1;
};
?>