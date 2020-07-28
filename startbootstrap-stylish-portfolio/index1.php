
<?php
    phpinfo();
    echo 'this is index.php'; exit;

	if (isset($_POST["submit"])) {

		echo 'this is index.php'; exit;

		$inputUserame = $_POST['inputUserame'];
		$inputEmail = $_POST['inputEmail'];
		$to = 'rushaniia.badrutdinova@gmail.com'; 
		$body = "From: $inputUserame\n E-Mail: $inputEmail\n ";
        $subject = 'Message from Contact Demo ';
        $from = 'Demo Contact Form';

	if (mail ($to, $subject, $body, $from)) {
		$result='<div class="alert alert-success">Thank You! I will be in touch</div>';
	} else {
		$result='<div class="alert alert-danger">Sorry there was an error sending your message. Please try again later</div>';
	}
	}
?>