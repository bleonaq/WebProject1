<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "travel";
  
$conn = new mysqli($servername, $username, $password, $dbname);
 if ($conn->connect_error) {
              die("Connection failure: " . $conn->connect_error);
            }
            
$sql = "SELECT * FROM kontakt ORDER BY id desc";
$result = mysqli_query($conn, $sql);

echo "mesazhetr nga kontaktr forma";
while($row = mysqli_fetch_assoc($result)){


    echo "<br>";
    echo $row['mesazhi'];
    echo "<br>";
}