<?php ob_start(); ?>

<ul>
    <li><a href="iwp1_houtse_toneelgroep">html website Houtse Toneelgroep</a></li>
    <li><a href="iwp1_basis_php">Opdrachten basis php</a></li>
</ul>

<?php
$the_title = "Inleiding Web Programmeren";
$the_content = ob_get_clean();
$show_source = array()
?>

<?php include("single.php"); ?>