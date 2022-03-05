<?php

    include_once '../Logic/Mapper/userMapper.php';

  //  if (isset($_SESSION["role"]) && $_SESSION['role']=='1') {
        $mapper=new UserMapper();

        $userList=$mapper->getAllUsers();
        $nrUsers=$mapper->getNrUsers();
   // }

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
    <script src="../JSFiles/sideBar.js"></script>
        <title>
            Admin Nav
        </title>
    </head>
    <body>

    <div class="header">
        <div>
            <b>
                DashboardPro
            </b>
        </div>

    <div>
        <a href="../Logic/logout.php">
            Logout
        </a>
    </div>
    </div>

    <?php
        include('../Re-Usable/adminNav.php');
    ?>

    <div class='infoBox'>
        <div>
            <h3>
                All users:
            </h3>
                <div>
                    <?php
                        $users=$mapper->getAllUsers();
                        foreach($users as $user){
                    ?>
                    <b>
                        <?php echo $user['username']?>
                    </b>
                        <br/>
                    <b>
                        <?php echo $user['email']?>
                    </b>
                    <?php
                    }
                    ?>
                </div>
        </div>
        <div>
            <h3>
                Number of users:
            </h3>
            <?php
                $nrUsers=$mapper->getNrUsers();
                foreach($nrUsers as $nr){
            ?>
            <h2>
                <?php echo $nr['nrUsers']?>
            </h2>
            <?php
                }
            ?>
        </div>
    </div>
    <div class='parentNav'>
    </div>

    </body>
</html>