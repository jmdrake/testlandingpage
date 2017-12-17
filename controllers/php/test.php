<?php
// the message
$msg = "Email address " . $_POST["email"] . " is requesting early access";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

// send email
mail("johnmdrake@gmail.com","Early access request",$msg);
echo "Mail sent to " . $_POST["email"];
?> 