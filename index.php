<?php
if($_POST["message"]) {
    mail("your@email.address", "Form to email message", $_POST["message"], "From: an@email.address");
}
?>


<?php

if($_POST["submit"]) {
    $recipient="parker@travelingstorytellers.com";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["email"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?>


<html>
<head>
	<title>Builder Toolkit</title>
	<link rel="stylesheet" href="main.css" type="text/css">
</head>
<body>
	<div class="landing">
	<div class="logo"><img id="logo" src="logo1.png"></div>
	<p><span>Sell more homes</span><br>spend less time on your website</p>
	</div>


<?=$thankYou ?>


<form method="post" action="index.php"  name="Website Inquiry">
      <div class="header">
         <p>Submit an Inquiry</p>
      </div>
      <div class="description">
        <p>Builder Toolkit is ready to start expanding your online presence while you do what's most important to you.</p>
      </div>
      <div class="input">
        <input type="text" class="button" id="email" name="email" placeholder="Your Email">
        <input type="submit" class="button" id="submit" value="Submit Inquiry">
        <!-- <a href="mailto:will@travelingstorytellers.com" id="submit">Submit Inquiry</a> -->
      </div>
    </form>




</body>
</html>