<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failure: "
		. $conn->connect_error);
}

if ((isset($_POST['submit']))) {
	//fetching and storing the form data in variables
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	mysqli_query($conn, "INSERT INTO kontakt (emri, email, mesazhi) VALUES ('" . $name . "','" . $email . "','" . $message . "')");
	$insert_id = mysqli_insert_id($conn);
}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Contact</title>
	<link rel="stylesheet" type="text/css" href="../CSSfiles/contact.css">
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>

<body>
	<header>
	
	
	</header>
	

		<div class="contact-container">
			<form class="form-container" method="POST" enctype="multipart/form-data" action="contact.php">
				<label for="chk" aria-hidden="true">Contact Us</label>
				<input id="emri" required type="text" name="name" placeholder="Your Name">
				<input type="email" required name="email" placeholder="Email">
				<input id="mesazhi" required type="text" name="message" placeholder="Message">

				<button name="submit" type="submit" value="fav_CSS">Send</button>
			</form>
		</div>
</body>

</html>

<script>
	// function validimi() {
	// 	var emri = document.getElementsByClassName("input")[1].value;
	// 	var email = document.getElementsByClassName("input")[2].value;
	// 	var mesazhi = document.getElementsByClassName("input")[3].value;
	// 	console.error(emri.value);
	// 	console.log(email);
	// 	console.log(mesazhi);
	// 	if (emri == "" || email == "" || mesazhi == "") 
	// 	{
	// 		alert("mbushini hapesirat");
	// 		return false;
	// 	}
		
	// }
</script>