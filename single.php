<?php include "functions.php"; ?>
<!DOCTYPE html>
<html>
    <?php include "head.php" ?>
    <body>
        <div class="container">
            <!-- Page Header --> 
            <?php include("header.php"); ?>
            
            <!-- Page main content-->
            <div id="main_content" <?php if (!$sidebar_array) {echo 'class="container_12"';} else {echo 'class="grid_9"';} ?> >
                <h1><?php echo $the_title; ?></h1>
                <?php echo $the_content; ?> 
                <br/>
                <hr/>
                <h1>Broncode</h1>
                <?php show_source_code($show_source); ?>
                <br/>
                <br/>
            </div>
            
            <!-- Page sidebar -->
            <?php if ($sidebar_array) {include("sidebar.php"); } ?>
            
            <!-- Page footer -->
            <?php include("footer.php"); ?> 
        </div>
    </body>
</html>