<!DOCTYPE html>
<html>
	<head>
		
		<!--meta elements-->

		<meta name = "viewport" content = "with=device-width, initial-scale = 1.0">
		<meta name = "description" content = "Free language learning resources at all levels!">
		<meta name="keywords" content="Learning Languages, Spanish, Arabic, English, Chinese, Polyglot, Languages">
		
		<title> LanguSage </title>

		<!--resources for fonts and the stylesheet link-->

		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
		<script src="https://kit.fontawesome.com/0a0974334c.js" crossorigin="anonymous"></script>
		<link rel = "stylesheet" href = "style.css">
		<script src="LanguSage.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>
    
	<body class="contactt-page">
		<section class = "sub-header">

			<!--navigation links for other parts of the website-->

			<nav> 
				<a href="LanguSage.html" ><img src = "images/logob2.png" class = "logo"></a>
					<i class="fas fa-bars" onclick="showMenu()"></i> <!--the menu icon: bars-->
					<div class = "nav-links abt-us" id="navLinks">
						<i class="fas fa-xmark" onclick="hideMenu()"></i><!--X icon-->
						<ul>
							<li> <a href = "LanguSage.html" >HOME</a></li>
							<li> <a href = "about.html" >ABOUT US</a></li>
							<li> <a href = "resources.html" >RESOURCES</a></li>
							<li> <a href = "newsletter.html" >NEWSLETTER</a></li>
							<li> <a href = "contact.html" >CONTACT</a></li>
						</ul>
				</div>
			</nav>

			<h1>Contact Us</h1>
		</section>

		<!--Contact content-->

		<section class="contact-page">

			<div class="row">
				<div class="contact-col">
					<div class="contact-info">
						<div>
							<div class="icon-text-wrapper">
							<i class="fa-brands fa-instagram"></i>
							</div>
							<span>
								<h5>Our Instagram</h5>
								<p>See our latest posts!</p>
							</span>
						</div>
						<div>
							<div class="icon-text-wrapper">
							<a href="mailto:thelangusage@gmail.com" target="_blank"><i class="fa fa-envelope-o"></i></a>
							</div>
							<span>
								<h5>thelangusage@gmail.com</h5>
								<p>Email us your query</p>
							</span>
						</div>
						<div>
							<div class="icon-text-wrapper">
							<i class="fa-brands fa-tiktok"></i>
							</div>
							<span>
								<h5>Our Tiktok</h5>
								<p>Check out our tiktoks!</p>
							</span>
						</div>
					</div>
				</div> 
					<div class="contact-col">
						<div class="contact-form">
						<form action="LanguSage.php" method="post">

							<h5>Contact Form</h5>
							<br>
							<input type="text" id="name" name="name" placeholder="Enter your name" required>

							<br>

							<input type="email" id="email" name="form_email" placeholder="Youremail@gmail.com" required>
							
							<br>
								<h5>Write your message/enquiry below:</h5>
							<br>

							<textarea name="message" id="message" rows="8" placeholder="Write your message here.." required></textarea>

							<br>

							<input type="submit" class="submit-btn" name="submit-btn" value="Send Message"></input>
						</form>
					</div>
				</div>
			</div>
		</section>
			
				<br><br>

		<!--Footer-->

		<section class = "footer">
			
			<br>
			<div class= "icons">
				<i class="fa-brands fa-instagram"></i>
				<i class="fa-brands fa-tiktok"></i>
			</div>
			<br>
			<p><i>Hanan Salem Al-Qahtani</i></p>
			<p> &reg; 2024 LanguSage | All rights reserved<br></p>
		</section>
	</body>
</html>














	
