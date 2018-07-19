
<?php
    // if(isset($_POST['submit'])){
    //     if(empty($_POST['form_name'])){
    //         echo"Name is Required";
    //     }
    //      if(empty($_POST['form_email'])){
    //         echo"Name is Required";
    //     }
    //      if(empty($_POST['form_contact'])){
    //         echo"Name is Required";
    //     }
    // }
    // else{

    $Name=$_POST['name'];
	  $email=$_POST['email'];
    $Contact=$_POST['phone'];
    $Area=$_POST['city'];
    $Occupation=$_POST['occupation'];
    $Loan=$_POST['loan'];
    $Amount=$_POST['amount'];
    $Income=$_POST['income'];
 

	require("classes/class.phpmailer.php");

	$mail = new PHPMailer(); // create a new object
	$mail->IsSMTP(); // enable SMTP
    $mail->From = "asim@peaceinfotech.com";
    $mail->FromName = "Loan";
	$mail->SMTPDebug = 1; // debugging: 1 = errors and messages, 2 = messages only
	$mail->SMTPAuth = true; // authentication enabled
//	$mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
	$mail->Host = "mail.peaceinfotech.com"; 
	 // $mail ->SMTPSecure = 'ssl';
  //  $mail ->Host = "smtp.gmail.com";
  //  $mail ->Port = 465; // or 587
  //  $mail ->IsHTML(true);// mail.smtp.com
	$mail->Port = 587; // or 587
	$mail->IsHTML(true);
	$mail->Username = "asim@peaceinfotech.com";
	$mail->Password = "shaikh95armaan@#";
	$mail->SetFrom('asim@peaceinfotech.com');
	$mail->Subject = "Enquiry";
    $mail->Body = " <style>
    table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
    
    }
    th, td {
    padding: 5px;
    text-align: left;    
    }
    </style>

    <table style='width:50%'>
    
    <tr><th>Name</th><td>$Name</td></tr>
    <tr><th>Email</th><td>$email</td></tr>
    <tr><th>Phone</th><td>$Contact</td></tr>
    <tr><th>city</th><td>$Area</td></tr>
    <tr><th>Occupation</th><td>$Occupation</td></tr>
    <tr><th>Loan Type</th><td>$Loan</td></tr>
    <tr><th>Loan Amount</th><td>$Amount</td></tr>
    <tr><th>Monthly Income</th><td>$Income</td></tr>
   
    
    </table> 
      ";
	$mail->AddAddress('asim@peaceinfotech.com');
	// $mail->AddCC($email);

	 /*if(!$mail->Send()) {
		echo "Mailer Error: " . $mail->ErrorInfo;
	 } else {
		 echo "<script type='text/javascript'>
          alert('Contacted successfully');
            </script>";
            header('Location: Contact.html');
	 }*/

//      if($mail->Send()) {
//         echo "<script type='text/javascript'>
//           alert('Enquire submited');
          
//             </script>";
//            header('Location: Contacts.html');
     
// }    
if($mail->Send()) {
        echo "<script type='text/javascript'>
          alert('Enquiry submited');
          location='index.html';
            </script>";
           // header('Location: Contact.html');
     
}
else{
    echo "<script type='text/javascript'>
          alert('Try Again Later');
          location='index.html';
            </script>";
}
// header('Location: Contact.html');
?>
<!-- </body>
</html> -->