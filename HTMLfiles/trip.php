<?php

    include_once '../Logic/Mapper/tripMapper.php';
    include_once '../Logic/tripLogic.php';
    $mapper=new TripMapper()
?>


<!DOCTYPE html>
<html>
    <head>
 
    <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">
    <script src="../JSFiles/sidebar.js"></script>
        <title>
            Contact forms
        </title>
    </head>
    <body>
    <?php
        include('../Re-Usable/adminNav.php');
      ?>

<div class='infoBox'>
        <div>
            <h3>
                Contact forms sent:
            </h3>
            <div>
                <?php
                    $forms=$mapper->getAllTrips();
                    foreach($forms as $form){
                ?>
                
                <b>
                    <?php echo $form['tripID']?>
                </b>
                    <br>
                <b>
                    <?php echo $form['place']?>
                </b>
                    <br>
                <b>
                    <?php echo $form['start']?>
                </b>
                    <br>
                <b>
                    <?php echo $form['end']?>
                </b>
                    <br>
                <p>
                    <?php echo $form['description']?>
                </p>

               
                        
              
                <?php
                } 
                ?>
            </div>
        </div>
    </div>

    </body>
</html>