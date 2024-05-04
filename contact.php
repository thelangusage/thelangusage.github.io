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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
	</head>
    
	<body class="contactt-page">
		<section class = "sub-header">

			<!--navigation links for other parts of the website-->

			<nav> 
				<a href="index.php" ><img src = "images/logob2.png" class = "logo"></a>
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
						<form action="" method="POST">

							<h5>Contact Form</h5>
							<br>
							<input type="text" id="name" name="name" placeholder="Enter your name" required>

							<br>

							<input type="email" id="email" name="email" placeholder="Youremail@gmail.com" required>
							
							<br>
                                    <select name="reason" id="reason">
										<option value="Feedback" name="feedback">Feedback</option>
										<option value="Report" name="report">Report</option>
										<option value="Request a language" name =request>Request a language</option>
										<option value="Other" name="other">Other</option>
									</select>
							<br><br>

							<textarea name="message" id="message" rows="8" placeholder="Write your message here.." required></textarea>

							<br>
							<input type="submit" name="submit" value=" Add prodect " class="btn-secondary">

						</form>
					</div>
				</div>
			</div>
		</section>
			
				<br><br>

 
				<?php 

include('DB.php');

if(isset($_POST['submit']))
{
	// استخراج البيانات من الاستمارة
	$name = $_POST['name'];
	$email = $_POST['email'];
	$reason = $_POST['reason'];
	$message = $_POST['message'];

	// استعلام SQL لإدراج البيانات
	$sql2 = "INSERT INTO contact (name, email, type, message) VALUES ('$name', '$email', '$reason', '$message')";

	// تنفيذ الاستعلام
	$res2 = mysqli_query($conn, $sql2);

	// التحقق من نجاح الإدراج وتوجيه المستخدم بناءً على ذلك
	if($res2 == true)
	{
	
		$_SESSION['add'] = "<div class='success'>تم الإضافة بنجاح.</div>";
        echo "<script>alert('Data added successfully')</script>";
        echo "<script>window.location.href='".SITEURL."contact.php';</script>"; // توجيه المستخدم بعد الإضافة الناجحة
        exit;
	}
	else
	{
		$_SESSION['add'] = "<div class='error'>فشلت عملية الإضافة.</div>";
        echo "<script>alert('  Not added.')</script>";
        echo "<script>window.location.href='".SITEURL."contact.php';</script>"; // توجيه المستخدم بعد الإضافة الفاشلة
        exit;
	}
}

?>


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














	
