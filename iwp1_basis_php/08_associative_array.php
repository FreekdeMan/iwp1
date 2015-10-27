<?php
# An array with products and their corresponding prices
$price = array (
    "Black & Decker Accuboormachine" => 148.85,
    "Bosch Boorhamer" => 103.97,
    "Makita Accuschroefmachine" => 199.20,
    "Makita Klopboormachine" => 76.00,
    "Metabo Klopboor" => 119.00        
);

# Add an item to the price array
addItem($price, "Bosch GBH 18 V-LI", 412.37);

# Print the products with the corresponding prices to the screen
echo "<h1>Vandaag in het assortiment:</h1>";
foreach ($price as $price_key => $price_value) {
    echo "{$price_key} voor {$price_value} &euro;</br>";
};

echo "</br></br><h1>Totaalprijs van alle producten</h1>";

# Calculate the total amount
$total_amount = calculateTotalAmount($price);
echo "Totaalprijs = {$total_amount} &euro;";  

echo "</br></br><h1>Producten gesorteerd op basis van prijs</h1>";

# Sort ascending based on price
asort($price);
foreach ($price as $key => $value) {
    echo "{$key} voor {$value} &euro;</br>";
}

/**
 * @param An array that contains a key(Productname) and a value(Price)
 * @return The total price of all the products in the array
 */
function calculateTotalAmount($array){
    $total_amount = 0;
    foreach ($array as $array_key => $array_value){
        $total_amount += $array_value;
    };
    return $total_amount;
}

/**
 * Adding an item to the array
 */
function addItem(&$array, $key, $value){
    return $array[$key] = $value;
}

# Template data
$the_title = "Week 4: Associative array";
$the_content = ob_get_clean();
$show_source = array("08_associative_array" => __FILE__);
include "sidebar_array.php";
$sidebar_array = sidebar_array();
$sidebar_header = "Opdrachten PHP";
$assignment_description = "
    <p>Maak een associatieve array met de naam prijs aan en gebruik als index 
    de productnaam. Vul deze array met prijzen voor een vijftal producten.</p>
    <ol type='a'>
            <li>Toon de inhoud van de array met een foreach-lus.</li>
            <li>Bereken het totaalbedrag door alle prijzen bij elkaar op te 
            tellen.</li>
            <li>Voeg nog een product toe aan de array.</li>
            <li>Sorteer de array van laagste prijs naar hoogste prijs.</li>
    </ol>
    <p>Geef bij elke functie minimaal het volgende commentaar met de PHPDoc syntax: </p>
    <ul>
        <li>korte omschrijving;</li>
        <li>parameters;</li>
        <li>retourwaarde.</li>
    </ul>
    <p>Leer eventueel via <a href='https://www.codecademy.com/'>codecademy</a>: 
    Functions Part II 
    </p>";
?>

<?php include("../single.php"); ?>