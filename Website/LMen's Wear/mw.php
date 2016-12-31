<html>
	<link rel="stylesheet" type="text/css" href="../lex_css.css">
	<link rel="stylesheet" type="text/css" href="home.css">
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" type="text/css" href="mw.css">
	<link rel="stylesheet" type="text/css" href="p1\p1.css">
	<link rel="stylesheet" type="text/css" href="p2\p2.css">
	<link rel="stylesheet" type="text/css" href="p3\p3.css">
	<link rel="stylesheet" type="text/css" href="p4\p4.css">
	<link rel="stylesheet" type="text/css" href="p5\p5.css">
	<link rel="stylesheet" type="text/css" href="p6\p6.css">
	<link rel="stylesheet" type="text/css" href="p7\p7.css">
	<link rel="stylesheet" type="text/css" href="p8\p8.css">
	<link rel="stylesheet" type="text/css" href="p9\p9.css">
	
	<head>
		<title>Men's Wear</title> 
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
		<div>
			<div class="mwpg" style="margin-top:4px;">
				<div class="dc1">
					<div class="pic1 dr1" ><div class="text1"><pre>Rs. 1599</pre><button type="button" class="buy">BUY NOW!</button></div></div>
					<div class="pic2 dr2"><div class="text2"><pre>Rs. 899</pre><button type="button" class="buy">BUY NOW!</button></div></div>
					<div class="pic3 dr3"><div class="text3"><pre>Rs. 429</pre><button type="button" class="buy">BUY NOW!</button></div></div>
				</div>
				<div class="dc2">
					<div class="pic4 dr4"><div class="text4"><pre>Rs. 669</pre><button type="button" class="buy">BUY NOW!</button></div></div>
					<div class="pic5 dr5"><div class="text5"><pre>Rs. 549</pre><button type="button" class="buy">BUY NOW!</button></div></div>
					<div class="pic6 dr6"><div class="text6"><pre>Rs. 489</pre><button type="button" class="buy">BUY NOW!</button></div></div>
			
				</div>
				<div class="dc3">
					<div class="pic7 dr7"><div class="text7"><pre>Rs. 1299</pre><button type="button" class="buy">BUY NOW!</button></div></div>
					<div class="pic8 dr8"><div class="text8"><pre>Rs. 3459</pre><button type="button" class="buy">BUY NOW!</button></div></div>
					<div class="pic9 dr9"><div class="text9"><pre>Rs. 999</pre><button type="button" class="buy">BUY NOW!</button></div></div>
				
				</div>
			</div>
			<!--<div class="sidebar">
				<div class="login">
					<form>
						<br><br>
					<center>      
						 Email ID: <input type="text" placeholder="john@dane.com"><br><br>

      						 Password: <input type="password" placeholder="password"></center><br>
						        <input class="submit" type="submit" value="Login"><br>
					
					</form>
					
					
					<p class="register">Yet not registered?</p><br>
					<a href="C:\Old Backup\D-Drive\Website\Register Page\registerpage.html"><button class="register" type="button">Register Now!</button></a>
				</div>

				<div style="float:left">
				
				</div>
			</div>-->
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