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
    
	<body>
		<section class = "header">

			<!--Navigation links for other parts of the website-->

			<nav> 
				<a href="index.html" ><img src = "images/logob2.png" class = "logo"></a>
					<i class="fas fa-bars" onclick="showMenu()"></i> <!--the menu icon: bars-->
					<div class = "nav-links" id="navLinks">
						<i class="fas fa-xmark" onclick="hideMenu()"></i><!--X icon-->
						<ul>
							<li> <a href = "index.php" >HOME</a></li>
							<li> <a href = "about.php" >ABOUT US</a></li>
							<li> <a href = "resources.php" >RESOURCES</a></li>
							<li> <a href = "newsletter.php" >NEWSLETTER</a></li>
							<li> <a href = "contact.php" >CONTACT</a></li>
						</ul>
				</div>
			</nav>

			<!--intro or main page section-->

			<div class="text-box">
				<h1> Your Free Language Learning Hub </h1>

				<p>
					Unlock the power of language learning with LanguSage! 
					<br> Our platform offers a diverse range of free resources and tools designed to enhance your learning experience.
				</p>

				<a href = "resources.html" class="intro-button">Start Your Adventure</a>
			</div>
					
		</section>

			<!--JavaScript code for the close and bars icons-->

			<script>
				var navLinks = document.getElementById("navLinks");

				function showMenu()
				{
					navLinks.style.right= "0";
				}

				function hideMenu()
				{
					navLinks.style.right= "-200px";
				}
			</script>

		<!--Resources-->

	<section class = "Resources">   	
			<h1> Resources We Offer </h1>
			<p>Step into the realm of language mastery with LanguSage's curated resources. 
			Dive into captivating videos, insightful books, and engaging channels, 
			meticulously selected to elevate your language skills.</p><br>

			<p>We offer free comprehensible input resources for a variety of languages,
				including: <b> <em> <a href="resources.html"> Arabic </a>, <a href="resources.html"> English </a>, <a href="resources.html"> Spanish </a>, and <a href="resources.html"> Chinese </a>!</b> </em> </p>
	</section>
	<!--Guide-->

	<section class="Guide">
		<h1>Our Learning Guide</h1>
		<p>Our language learning guide is your roadmap to success, packed with tips, tricks, 
		and handpicked resources to guide you on your journey to language mastery.</p>

		<br><br>
		
		<p> <strong> Let's Talk Comprehensible Input &#9738;</strong> <br>
			Picture this: <b>fun</b> videos, engaging books, and interactive channels, 
			all carefully handpicked just for you by the language-loving folks here at LanguSage!
			These resources aren't just any old study materials,
			they are your ticket to learning with <b>ease</b> and <b>excitement.</b></p> 

			<br> 

		<p> <strong> &#9886; Made Just for you! &#9887;</strong> <br>
			No matter where you're at in your language journey, 
			we've got something that fits like a glove. Our resources are <b>tailor-made</b> for learners
			of all levels, from absolute beginners to seasoned polyglots looking for their next challenge.</p> 

			<br>

		<p><strong> Consistency is &#x1F511; </strong> <br>					
			Learning a language is all about finding that sweet spot between consistency and enjoyment. 
			That's why we've made sure our resources are not only effective but also downright <b>enjoyable to use.</b>
		</p>

			<br>

		<p><strong> Fresh Content, Coming Right Up &#8252;</strong><br>
			Here at LanguSage, we're always on the lookout for the latest and greatest language resources.
			That means you can expect <b>fresh content</b> landing on our platform every single week, 
			keeping your learning journey exciting and ever-evolving.
		</p>

		<br>

		<p><strong>Join the Club &#9786;</strong><br>
			Language learning is an adventure, so don't be afraid to experiment! Dive into the resources we've curated for you, explore different methods, and find what works best for you. Remember, 
			the journey is just as important as the destination, so <b>enjoy every step of the way.</b>
		</p>
	</section>
	
</body>


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
</html>














	
