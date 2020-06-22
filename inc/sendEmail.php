<?php

// Replace this with your own email address
$siteOwnersEmail = 'vodnalasricharan@gmail.com';


if($_POST) {

   $name = trim(stripslashes($_POST['contactName']));
   $subject = trim(stripslashes($_POST['contactSubject']));
   $contact_message = trim(stripslashes($_POST['contactMessage']));

   // Check Name
	if (strlen($name) < 2) {
		$error['name'] = "Please enter your name.";
		$er=1
	}
	// Check Message
	if (strlen($contact_message) < 15) {
		$error['message'] = "Please enter your message. It should have at least 15 characters.";
		$err=1
	}
   // Subject
	if ($subject == '') { $subject = "Contact Form Submission"; }



   if ($er) {

     echo "Enter your Name";
		
	}
	 elseif($err){ echo "Enter Messege";
	 }# end if - no validation error

	else {
    echo "Submitted Sucessfully";

	} # end if - there was a validation error

}

?>