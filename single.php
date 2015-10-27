<?php include "functions.php"; ?>
<!DOCTYPE html>
<html>
    <?php include "head.php" ?>
    <body>
        <div class="container">
            <!-- Page Header --> 
            <?php include("header.php"); ?>
            
            <!-- Page main content-->
            <div id="main_content" <?php if (!$sidebar_array) 
                {echo 'class="container_12"';} else {echo 'class="grid_9"';} ?> >
                <h1><?php echo $the_title; ?></h1>
                <br/>
                <?php echo $the_content; ?> 
                <br/>
                <?php if ($assignment_description){ 
                    echo "<hr/>";
                    echo "<h1>Omschrijving opdracht</h1>";
                    echo $assignment_description;
                }?>
                <hr/>
                <?php if ($show_source){ ?>
                   <h1>Broncode</h1>
                    <?php show_source_code($show_source); ?>
                    <br/>
                    <br/> 
                <?php }  ?>
            </div>
            
            <!-- Page sidebar -->
            <?php if ($sidebar_array) {include("sidebar.php"); } ?>
            
            <!-- Page footer -->
            <?php include("footer.php"); ?> 
        </div>
    </body>
</html>