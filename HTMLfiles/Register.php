<!DOCTYPE html>
<html>
    <?php

    require_once '../Logic/procedural/database.inc.php';
    require_once '../Logic/procedural/register.php';

    ?>
    <head>

        <!-- Styles and links -->

        <link rel="stylesheet" href="../CSSfiles/HeaderStyle.css">
        <link rel="stylesheet" href="../CSSfiles/FooterStyle.css">
        <link rel="stylesheet" href="../CSSfiles/Register.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Atkinson+Hyperlegible&display=swap" rel="stylesheet">

        <title>Register</title>
        <script src="../JSFiles/jsValidate.js"></script>
    </head>
    <body>
    <?php
        include('../Re-Usable/header.php');
    ?>


        <div class="regBox">
            <div class="colorBox">
                <!-- Empty Inside -->
            </div>
            <div class="formBox">
                <h3>
                    Register
                </h3>
                <form action="../Logic/loginVerify.php" method="post" onsubmit="return validateArr()">
                    <b>
                        Fields marked with * are required
                    </b>
                    <label>
                        Username *
                    </label>
                    <input type="text" placeholder="Full name" name="username" id="username">
                    <label>
                        E-Mail *
                    </label>
                    <input type="text" placeholder="Email" name="email" id="email">
                    <label>
                        Password *
                    </label>
                    <input type="password" placeholder="Password" name="password" id="password">
                    <button name="registerBtn" id="submitBtn"  id="submitBtn">
                        Submit
                    </button>
                    <br/>
                    <button name="redirected" class="loginBtn">
                        <a href="LoginUsers.php">Have an Acoount? Log in</a>
                    </button>
                </form>

            </div>
        </div>

    <?php
        include('../Re-Usable/footer.php');
      ?>
    </body>
</html>


    <script>

        function validateForm(){
            let loginBtn=document.getElementById('submitBtn');
            var username=document.getElementById("username");
            var email=document.getElementById("email");
            var password=document.getElementById("password");

            if(username.value==""){
                alert("Please enter your username");
                return false;
            }
            else if(email.value==""){
                alert("Please enter an email");
                return false;
            }
            else if(!emailR.test(email)){

            }
            else if(password.value==""){
                alert("Please enter a password");
                return false;
            }
                alert("Succesful register");
                return true;
        }

       
    </script>