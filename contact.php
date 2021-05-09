
<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<title>Help For Good </title>
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/superfish.css">
	<link rel="stylesheet" href="css/style.css">
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">
		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html">Help For Good</a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li>
								<a href="index.php">Home</a>
							</li>
							<li class="active"><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		
		

		<div class="fh5co-hero">
			<div class="fh5co-overlay"></div>
			<div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url(images/cover_bg_1.jpg);">
				<div class="desc animate-box">
				<i><h3 style="color:white;">Welcome to the family!</h3></i>
					<h2><strong>Donate</strong> for the <strong>Poor Children</strong></h2>
					<h3 style="color:white;"> "Let's come together to make this world a better place to live."</h3>
				</div>
			</div>

		</div>
		
		<div id="fh5co-contact" class="animate-box">
			<div class="container">
			<form role="form" class="contact-form" action="contact.php?sendmail" method="post" enctype="multipart/form-data">
					<div class="row">
						<div class="col-md-6">
							<h3 class="section-title">Our Address</h3>
							<p>Mumbai, Maharashtra</p>
							<ul class="contact-info">
								<li><i class="icon-location-pin"></i>Malad East</li>
								<li><i class="icon-phone2"></i>+91 8291178048</li>
								<li><i class="icon-mail"></i><a href="mailto:shahaastha8@gmail.com">shahaastha8@gmail.com</a></li>
								<li><i class="icon-globe2"></i><a href="https://aasthashah.techbits.in/">https://aasthashah.techbits.in/</a></li>
							</ul>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="name" id="form_name" placeholder="Name">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input type="text" class="form-control" name="email" id="form_email" placeholder="Email">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="message" class="form-control" id="form_message" cols="30" rows="7" placeholder="Message"></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input type="submit" value="Send Message" name="sendmail" id="sendMessageButton" class="btn btn-primary">
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>

		<?php
            if(isset($_POST['sendmail'])) {
                require 'PHPMailerAutoload.php';
                $mail = new PHPMailer;
               // $mail->SMTPDebug = 2;                               // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = "aasthaenterprise27@gmail.com";                 // SMTP username
                $mail->Password = "manoj2194";                           // SMTP password
                $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = 587;                                    // TCP port to connect to
                $mail->setFrom('Website-User');
                $mail->addAddress('shahaastha8@gmail.com');     // Add a recipient
                $mail->addReplyTo($_POST['email']);
                // print_r($_FILES['file']); exit;
                //for ($i=0; $i < count($_FILES['file']['tmp_name']) ; $i++) { 
                    //$mail->addAttachment($_FILES['file']['tmp_name'][$i], $_FILES['file']['name'][$i]);    // Optional name
                //}
                $mail->isHTML(true);                                  // Set email format to HTML
                //$mail->Subject = $_POST['subject'];
                    $mail->Name = $_POST['name'];
                $mail->Email  =  $_POST['email'];
        $mail->Body =  '<h3 align=left>Name: '.$_POST['name'].'<br><br>Email: '.$_POST['email'].'<br><br>Message: '.$_POST['message'].'</h3>' ;
                                
            
                
                if($mail->send()) {
                    
                    echo "<script>alert('Thank You your message has been sent'); </script>";
                    echo "<script>window.location.href ='index.html'</script>";

                } 
                else {
                
                    echo 'Message could not be sent.';
                    echo 'Mailer Error: ' . $mail->ErrorInfo;
                }
            }
        ?>
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<p>Copyright 2021 <a href="index.html">Help For Good</a>. All Rights Reserved. <br>Made with <i class="icon-heart3"></i> by Aastha </p>
						</div>
					</div>
				</div>
			</div>
		</footer>
	

	</div>

	</div>


	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>
	<script src="js/jquery.stellar.min.js"></script>
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&sensor=false"></script>
	<script src="js/google_map.js"></script>
	<script src="js/main.js"></script>

	</body>
</html>

