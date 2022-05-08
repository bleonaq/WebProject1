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

$sql = "SELECT * FROM kontakt ORDER BY id desc";
$result = mysqli_query($conn, $sql); ?>
<head>
	<link rel="stylesheet" href="../CSSfiles/mesazhet.css">
</head>
<style>
	table, td, th{
		border: 1px solid #ddd;
		text-align: left;
	}
	table{
		border-collapse: collapse;
		width: 100%;
	}
	th, td{
		padding: 15px;
	}
</style>
<header>
		<div class="l1">
			<span class="logo">Travel</span>
			
			<div class="back-button">
				<span onclick="window.location.href='../HTMLfiles/adminPage.php'">Back to Admin</span>
			</div>
		</div>
</header>
<h1 class="h">Mesazhet nga kontakt forma</h1>
<div class="table-responsive">
<table class="table" border="1" style="border-collapse: collapse;">
<title>Mesazhet</title>
	<thead>
		<tr align="middle">
		<th ><strong>Emri</strong></th>
		<th ><strong>email</strong></th>
			<th ><strong>Mesazhi</strong></th>
			<th ><strong>Shlyej</strong></th>
		</tr>
	</thead>
	<tbody>

	<?php 
	
		if(isset($_GET['del'])){
			$idDel = $_GET['del'];
			mysqli_query($conn, "DELETE FROM kontakt WHERE id=$idDel");
			header('location: mesazhet.php');
		}
	?>

<?php
while($rowKontakt = mysqli_fetch_assoc($result)){

?>

	
<tr>
<td align="center"><p><?php echo $rowKontakt["emri"]; ?></p></td>
<td align="center"><p><?php echo $rowKontakt["email"]; ?></p></td>
<td align="center"><p><?php echo $rowKontakt["mesazhi"]; ?></p></td>
<td align="center"><a href="mesazhet.php?del=<?php echo $rowKontakt['id']; ?>"><button class="button">DELETE</button></a></td>
</tr>
<?php } ?>
</tbody>
</div>
</table>



