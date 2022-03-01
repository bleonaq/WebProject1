<div class="header">	
			<a class="logo">Travel</a>
			<div class="header-right">

			  <?php
						                if(isset($_SESSION['role']) && $_SESSION['role'] == '1') {
											?>
										   <a href="../HTMLfiles/adminPage.php">Dashboard</a>
										<?php
										}
					?>
			  <a href="../HTMLfiles/index.html">Home</a>
            <a href="../HTMLfiles/contact.php">Contact</a>
            <a href="../HTMLfiles/Login.php">Login</a>
            <a href="../HTMLfiles/Register.php">Register</a>
            <a href="../HTMLfiles/adminPage.php">Admin</a>
            <a href="../HTMLfiles/About us.html">About us</a>
			</div>
		</div>