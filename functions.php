<?php
include("includes/class_theme_methods.php");

/**
 * 
 * @global type $dtm
 * @return type Main navigation based on array
 */
function do_main_nav(){
    global $dtm;    
    $class = "main_nav";
    
    $items_array = array (
        array("text" => "Home", "url" => "index.php"),
    );
    
    return $dtm->navigation($items_array, $class);
}

/**
 * 
 * @global type $dtm
 * @param type $sidebar_array
 * @return type Main navigation based on array. 
 */
function do_sidebar_nav($sidebar_array){
    global $dtm;    
    $class = "sidebar_nav";      
    return $dtm->navigation($sidebar_array, $class);
}

function do_html_title($page_title) {
    $title = $page_title . " | Johan Vergeer Opdrachten Webprogrammeren";
    return $title;
}

function show_source_code($source_code){
    foreach ($source_code as $key => $item) {
        echo "<h2>Titel: " . $key . "</h2>";
        show_source($item);
        echo "<br/>";
    }
}
?>