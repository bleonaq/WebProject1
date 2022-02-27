<?php
if (isset($_POST['submit'])) {

require '../Procedural/database.inc.php';

$email = $_POST['email'];
$password = $_POST['password'];

if (empty($email) || empty($password)) {
    //Location: ../Public/HTMLfiles/Register.php?error==emptyfields
    header("Location: ../../HTMLfiles/Register.php?error==emptyfields");
    exit();
} else {
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("Location: .../../HTMLfiles/Register.php?error=r=sqlerror");
        exit();
    } else {
        mysqli_stmt_bind_param($stmt, "s", $email);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            $passCheck = password_verify($password, $row['password']);
            if ($passCheck == false) {
                header("Location: ../../HTMLfiles/Register.php?error==wrongpass");
                exit();
            } elseif ($passCheck == true) {
                session_start();
                $_SESSION['sessionId'] = $row['user_Id'];
                $_SESSION['sessionUser'] = $row['email'];
                header("Location: ../../HTMLfiles/Homepage.php?success=loggedin");
                exit();
            } else {
                header("Location: ../../HTMLfiles/Register.php?error==wrongpass");
                exit();
            }
        } else {
            header("Location: ../../HTMLfiles/Register.php?error==nouser");
            exit();
        }
    }
}

}