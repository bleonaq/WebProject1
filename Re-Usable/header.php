<div class="header">	
			<a class="logo">Travel</a>
			<div class="header-right">
			  <a class="active" href="#home">Home</a>
			  <a href="#contact">Contact</a>
			  <?php
						                if(isset($_SESSION['role']) && $_SESSION['role'] == '1') {
											?>
										   <a href="../HTMLfiles/adminPage.php">Dashboard</a>
										<?php
										}
					?>
			  <a href="#Reklama">Advertise</a>
			  <a href="#about">About</a>
			</div>
		</div>