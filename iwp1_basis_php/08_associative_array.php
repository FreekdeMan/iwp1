<?php
ob_start();

    $prijs = array (
        "Black & Decker Accuboormachine" => 148.85,
        "Bosch Boorhamer" => 103.97,
        "Makita Accuschroefmachine" => 199.20,
        "Makita Klopboormachine" => 76.00,
        "Metabo Klopboor" => 119.00        
    );
            
    itemToevoegen($prijs, "Bosch GBH 18 V-LI", 412.37);
    
    // Print het volledige assortiment met de prijzen
    echo "<h1>Vandaag in ons assortiment:</h1>";
    foreach ($prijs as $prijs_key => $prijs_value) {
        echo "{$prijs_key} voor {$prijs_value} &euro;</br>";
    };
    
    // Gewoon wat witregels
    echo "</br></br>";
    
    // Bereken de totaalprijs
    $totaalprijs = berekenTotaalPrijs($prijs);
    echo "Totaalprijs = {$totaalprijs} &euro;";  
    
    // Gewoon wat witregels
    echo "</br></br>";
    
    // Sorteer op prijs van laag naar hoog
    asort($prijs);
    foreach ($prijs as $key => $value) {
        echo "{$key} voor {$value} &euro;</br>";
    }
    
    //// Functions zijn niet nodig. Deze zijn toegevoegd ter oefening. 
    // Function voor het berekenen van de totaalprijs.
    
    /**
     * 
     * @param An array that contains a key(Productname) and a value(Price)
     * @return The total price of all the products in the array
     */
    function berekenTotaalPrijs($array){
        $totaalprijs = 0;
        foreach ($array as $array_key => $array_value){
            $totaalprijs += $array_value;
        };
        return $totaalprijs;
    }
    
    /**
     * Adding an item to the array
     * 
     */
    function itemToevoegen(&$array, $key, $value){
        return $array[$key] = $value;
    }
    
    $the_title = "Week 4: Associative array";
    $the_content = ob_get_clean();
    $show_source = array("08_associative_array" => __FILE__);
    include "sidebar_array.php";
    $sidebar_array = sidebar_array();
?>

<?php include("../single.php"); ?>