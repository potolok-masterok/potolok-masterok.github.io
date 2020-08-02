
<?php

	if (isset($_POST["submit"])) {

		$inputUserame = $_POST['inputUserame'];
		$inputEmail = $_POST['inputEmail'];
		$to = 'rushaniia.badrutdinova@gmail.com'; 
		$body = "From: $inputUserame\n Number: $inputEmail\n ";
        $subject = 'Message from Contact Demo ';
		$from = 'Demo Contact Form';
		$headers =  'MIME-Version: 1.0' . "\r\n"; 
$headers .= 'From: Your name <info@address.com>' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 


	if (mail ($to, $subject, $body, $headers)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
	}
?>