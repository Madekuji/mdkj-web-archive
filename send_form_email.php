<?php
if(isset($_POST['email'])) {

    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "marcelo.matthew100@gmail.com";
    $email_subject = "WEBSITE FORM";

    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }

    $name = $_POST['name']; // required
    $email = $_POST['email']; // required
    $message = $_POST['message']; // required

    $email_message = "Form details below.\n\n";


    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }



    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";

// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
?>

<!-- include your own success html here -->
<html>
	<head>
		<title>Form Submission</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
	<body>

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
						<a href="index.html" class="logo"><img src="images/icon.png" /></a>
						<nav>
							<a href="#menu">Menu</a>
						</nav>
					</header>

				<!-- Menu -->
        <nav id="menu">
          <ul class="links">
            <li><a href="http://www.madekuji-san.zz.vc/beta2">Home</a></li>
            <li><a href="404.html">About</a></li>
            <li><a href="http://www.madekuji-san.zz.vc/blog">Blog</a></li>
            <li><a href="portfolio.html">Portfolio</a></li>
            <li><a href="privacypolicy.html">Privacy Policy</a></li>
            <ul class="actions vertical">
            <li><a href="donate.html" class="button special fit">Donate</a></li>
            <li><a href="findme.html" class="button fit">Find Me Online</a></li>
          </ul>
          </ul>
        </nav>

				<!-- Main -->
					<div id="main" class="alt">

						<!-- One -->
							<section id="one">
								<div class="inner">
									<header class="major">
										<h1>Success!</h1>
									</header>
									<p>Your message has been submitted! Thanks for contacting, we'll be in touch. ^_^
									<br />
									-Madekuji (Matthew Marcelo)
									</p>
								</div>
							</section>

					</div>

				<!-- Footer -->
        <footer id="footer">
          <div class="inner">
            <ul class="icons">
              <li><a href="https://twitter.com/Madekuji_san" class="icon alt fa-twitter"><span class="label">Twitter</span></a></li>
              <li><a href="https://www.facebook.com/madekujisan" class="icon alt fa-facebook"><span class="label">Facebook</span></a></li>
              <li><a href="https://www.instagram.com/madekuji_kun/" class="icon alt fa-instagram"><span class="label">Instagram</span></a></li>
              <li><a href="https://www.linkedin.com/in/matthew-marcelo-a3a39411a/" class="icon alt fa-linkedin"><span class="label">LinkedIn</span></a></li>
              <li><a href="https://www.youtube.com/madekujisan" class="icon alt fa-youtube-play"><span class="label">YouTube</span></a></li>
            </ul>
            <ul class="copyright">
              <li>&copy; Matthew Marcelo a.k.a. Madekuji-san</li><li>Design: <a href="https://html5up.net">HTML5 UP</a> &amp; Madekuji-san</li>
            </ul>
          </div>
        </footer>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>

<?php

}
?>
