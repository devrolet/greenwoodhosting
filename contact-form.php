<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	echo("Name: " . $name);
	echo("<br>Email: " . $email);
	echo("<br>Message: " . $message);

	// $_POST outputs the code to the php form
	// $_GET does the same but shows the input in the browser
	// $_REQUEST works for post or get but grabs the last informaton passed
?>