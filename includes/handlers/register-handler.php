<?php

//creating functions for stripping spaces in username
function sanitizeFormUsername($inputText) {

	$username = strip_tags($inputText);
	$username = str_replace(" ", "", $inputText);
	return $inputText;

}

//creating function to de-capitalize letters and remove spaces from inputs

function sanitizeFormString($inputText) {

	$inputText = strip_tags($inputText);
	$inputText = str_replace(" ", "", $inputText);
	$inputText = ucfirst(strtolower($inputText));
	return $inputText;

}

//protecting password from trojans (first layer of protection) using striptags

function sanitizeFormPassword($inputText) {

	$inputText = strip_tags($inputText);
	return $inputText;

}





if(isset($_POST['registerButton'])) {
//register button pressed

	$username = sanitizeFormUsername($_POST['username']);
	$firstName = sanitizeFormString($_POST['firstName']);
	$lastName = sanitizeFormString($_POST['lastName']);
	$email = sanitizeFormString($_POST['email']);
	$email2 = sanitizeFormString($_POST['email2']);
	$password = sanitizeFormPassword($_POST['password']);
	$password2 = sanitizeFormPassword($_POST['password2']);

	$wasSuccessful = $account->register($username, $firstName, $lastName, $email, $email2, $password, $password2);

	if($wasSuccessful == true) {
		$_SESSION['userLoggedIn'] = $username;
		header("Location: index.php");
	}

}


?>