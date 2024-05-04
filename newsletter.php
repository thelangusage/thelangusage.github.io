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
    
	<body class="newsletter-page">
		<section class = "sub-header">

			<!--navigation links for other parts of the website-->

			<nav> 
				<a href="index.html" ><img src = "images/logob2.png" class = "logo"></a>
					<i class="fas fa-bars" onclick="showMenu()"></i> <!--the menu icon: bars-->
					<div class = "nav-links abt-us" id="navLinks">
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

			<h1>Our Newsletter</h1>
		</section>

		<!--Newsletter content-->

			<div class="newsletter-row">
				<form action="" method="POST">
						<h2>Join Our Newsletter</h2>
						<p>Welcome to our newsletter! 📧 Get ready to dive into the exciting world of language learning with us! 🌍<br><br>
						By joining our newsletter, you're not just subscribing to any ordinary email list – you're becoming a valued member of our language-loving family. 💌✨ <br><br>
						Each week, we'll be your trusty guides, curating a personalized email packed with the latest and greatest language discoveries. <br>From captivating YouTube channels that make you feel like you're chatting with locals in Spain, to thought-provoking podcasts that transport you to bustling streets in China, and must-read books that take you on literary adventures around the globe 📚🌏 – we've got you covered!<br><br>
						But that's not all – we're also serving up carefully curated Spotify playlists 🎶 that set the perfect ambiance for your language learning sessions. Whether you're studying vocabulary, practicing pronunciation, or simply immersing yourself in the sounds of your target language, our playlists will keep you motivated and inspired every step of the way. 🎧✨<br><br>
							
						Our team of language enthusiasts is dedicated to handpicking the best resources just for you. We've sifted through the vast sea of language learning content so you don't have to, bringing you only the crème de la crème of resources that are guaranteed to take your language skills to new heights. ✨<br><br>
						
						<br>Let's embark on this adventure together – one word, one phrase, one language at a time. 💬 Don't miss out – subscribe now and let the language-learning fun begin! 🚀</p>
					
					<div class="newsletter-box">
						<i class="fa-solid fa-envelope"></i>
						<form action="" method="POST">
						<input class="ebox" type="n-email" name="email" id="n-email" required placeholder="Enter your email">
						<input class="btn" type="submit" name="button" value="Subscribe"></input>
					</div>
				</form>
			</div>
			
			
			<?php 

include('DB.php');

if(isset($_POST['button'])) 
{
	// استخراج البيانات من الاستمارة
	$email = $_POST['email'];
	

	// استعلام SQL لإدراج البيانات
	$sql2 = "INSERT INTO email_tb (email) VALUES ('$email')";

	// تنفيذ الاستعلام
	$res2 = mysqli_query($conn, $sql2);

	// التحقق من نجاح الإدراج وتوجيه المستخدم بناءً على ذلك
	if($res2 == true)
	{
		$_SESSION['add'] = "<div class='success'>تم الإضافة بنجاح.</div>";
        echo "<script>alert('Data added successfully')</script>";
        echo "<script>window.location.href='".SITEURL."newsletter.php';</script>"; // توجيه المستخدم بعد الإضافة الناجحة
        exit;
	}
	else
	{
		$_SESSION['add'] = "<div class='error'>فشلت عملية الإضافة.</div>";
        echo "<script>alert('  Not added.')</script>";
        echo "<script>window.location.href='".SITEURL."newsletter.php';</script>"; // توجيه المستخدم بعد الإضافة الفاشلة
        exit;
	}
}

?>
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














	
