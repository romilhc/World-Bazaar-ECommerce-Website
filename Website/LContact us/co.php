<html>
	<link rel="stylesheet" type="text/css" href="../lex_css.css">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="co.css">
	<script type="text/javascript" src="registervalidate.js"></script>
	
	<head>
		<title>Contact us</title> 
	</head>
	
	<body style="margin:0; background-color:black;">
		<?php
			session_start();

			if(!empty($_SESSION['EmailID']))
			{
				echo '<p style="color:blue;" class="namehead">Hello '.$_SESSION['Name'].'</p>';
			?>
		<div class="header">	
		
			<div>
				<img class="logo" src="logo.jpg" >				
			</div>
			<div>
				<div class="worldbazaar">
					<p class="worldbazaar">WORLD BAZAAR</p>
				</div>
				<div>
					<p class="wtwcts">Where the world comes to shop...</p>
				</div>
			</div>			
		</div>	
		<div class="bar">
			<a href="../LHome Page/home.php"><button type="button" class="bar ">Home</button></a>
			<a href="../LMen's Wear/mw.php"><button type="button" class="bar">Men's Wear</button></a>
			<a href="../LWomen's Wear/ww.php"><button type="button" class="bar">Women's Wear</button></a>
			<a href="../LElectronics/el.php"><button type="button" class="bar">Electronics</button></a>
			<a href="../LToys/toy.php"><button type="button" class="bar">Toys</button></a>
			<a href="../LSports and Fitness/sf.php"><button type="button" class="bar">Sports & Fitness</button></a>
			<a href="../LBooks/bk.php"><button type="button" class="bar">Books</button></a>
			<a href="../LContact us/co.php"><button type="button" class="bar">Contact Us</button></a>
		</div>
		<div class="copg" style="margin-top:4px;">
			<img src="header1.png"  style="width:85%;height:250px; margin-left:93px; margin-top:50px;">
			<div class="col1 extra-right-padding">
				<div>
					<h1 class="green">REACH US</h1>
					<p class="white">
					  Please use the contact form on the right side if you have any questions or requests,concerning our services.
					<br><br><br>
					  We will respond to your message within 24 hours.
					<br><br><br>
					  Below you can find the address of our shop.
					</p>
				</div>
				<div>
					<h1 class="blue">GENERAL</h1>
					<p class="white">
					  WORLD  BAZAAR
					<br><br>
					  Plot No.U-15,J.V.P.D Scheme<br>Bhaktivedanta Swami Marg,<br>Vileparle (West),<br>Mumbai-400056.
					<br><br><br>
					 Harsh Agarwal:<br>MOb:+91-9004062777<br>Email:harshagarwal541@gmail.com<br><br>Romil Chauhan: <br>MOb:+91-9699427282<br>Email:romilhc@gmail.com<br><br>Aakash Chauhan:<br>MOb:+91-9869141074<br>Email:akashnc@gmail.com
					</p>
				</div>

			</div>
			<div class="col2 extra-right-padding">
				<form name="registration_form" onsubmit="return(registervalidate())";>
				<h1 class="orange">MAIL US</h1><br>
				
				<h2 class="white"><pre>  Name:   <input class="regular" type="text" name="Name"></pre><br><br>
				      <pre>  Email:  <input class="regular" type="text" name="Email"></pre><br><br>
				<pre>Message:  <textarea class="address" name="Address"/></textarea></pre><br><br>
				
				<center><input type="submit" name="Login_Submit" value="SEND"></center><h2>
				</form>
			</div>
		</div>
			<?php

			}
			else
			{
				echo "<h2>You must login to view pending items</h2>";
			}

			?>
	</body>
</html>