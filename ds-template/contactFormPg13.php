<?php
//Fetching Values from URL
// $name = $_POST['name1'];
$email = $_POST['email1'];
// $message = $_POST['message1'];
// $contact = $_POST['contact1'];
//sanitizing email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
//After sanitization Validation is performed
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

// if (!preg_match("/^[0-9]{10}$/", $contact)) {
// // echo "<span>* Please Fill Valid Contact No. *</span>";
// } else {
	
$subject = $email;
// To send HTML mail, the Content-type header must be set
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'From:' . $email. "\r\n"; // Sender's Email
$headers .= 'Cc:' . $email. "\r\n"; // Carbon copy to Sender
$template = '<div style="padding:20px; color:white;font-size:20px;">Hello!<br/>'
. '<p style=\'margin-bottom:10px;\'>The user who wants to get early access here!<p/>'
// . 'Name:' . $name . '<br/>'
. '<p style=\'margin-bottom:10px;\'>User Email:' . $email . '<p/>'
// . 'Contact No:' . $contact . '<br/>'
// . 'Message:' . $message . '<br/><br/>'
. '<p style=\'margin-bottom:10px;\'>Contact with user as soon as possible and let him know about it!.</p>';
$sendmessage = "<div style=\"background-color:#eb61a2; color:white;\">" . $template . "</div>";
// message lines should not exceed 70 characters (PHP rule), so wrap it
$sendmessage = wordwrap($sendmessage, 70);

// Send mail by PHP Mail Function
mail("andrij.dejak@gmail.com", $subject, $sendmessage, $headers);
echo "Your Query has been received, We will contact you soon.";
// }
} else {
echo "invalid email";
}

?>