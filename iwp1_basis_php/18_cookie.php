<?php
    if(isset($_COOKIE["phpcookie"])){
        $current_value = $_COOKIE["phpcookie"];
        // Increase the cookie value with 1 and save it for 1 week.
        setcookie("phpcookie", $current_value + 1, time()+60*60*24*7);
    }else{
        // If this is the first time the page with the cookie is loaded, set the value to 1.
        setcookie("phpcookie", 1, time()+60*60*24*7);
    }
?>

<html>
    <head>
        <title>Cookie pagina</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>
            Aantal malen pagina met cookie opnieuw geladen: <?php echo $_COOKIE["phpcookie"] ?>
        </p>
    </body>
</html>

<?php
include_once 'show_code.php'; 
showSource(__FILE__);
?>

