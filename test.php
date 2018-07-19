<?php

	$email=$_GET['form_email'];
    $Name=$_GET['form_name'];
    $Phone=$_GET['form_phone'];
    $Subject=$_GET['form_subject'];
    $Message=$_GET['form_message'];

	require("classes/class.phpmailer.php");
	
	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
//	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "mail.peaceinfotech.com";
	$mail->Port = 587; // or 587
	$mail->IsHTML(true);
	$mail->Username = "asim@peaceinfotech.com";
	$mail->Password = "Asim321";
	$mail->SetFrom("asim@peaceinfotech.com");
	$mail->Subject = "Tuba Marines Enquiry";
	$mail->Body = " Contacted Successfully <br>
    Name : $Name <br>
    Email-Id : $email <br> 
    Phone : $Phone <br>
    Subject : $Subject <br>
    Message : $Message";
	$mail->AddAddress("info@tubamarineservices.com");
	// $mail->AddCC($email);

	 if($mail->Send()) {
        echo "<script type='text/javascript'>
          alert('Enquiry submited');
          location='contact-us.html';
            </script>";
           // header('Location: Contact.html');
     
}
else{
    echo "<script type='text/javascript'>
          alert('Try Again Later');
          location='contact-us.html';
            </script>";
}
 
?>
