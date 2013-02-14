<?php
session_start();

require_once('models/db.php');
require_once('models/render.php');
require_once('models/users.php');

if (isset($_REQUEST['action']))
{
	$action = $_REQUEST['action'];
}
else
{
	$action = 'login'; // default pageww
}

switch ($action) {
	case 'login':
	include 'views/login.php';
	break;

	// Testing db
	// case 'add-test':
	// include 'views/success.php';
	// break;

	// LOGIN
	case 'validateLogin':
	require_once 'models/login.php';
	$username = $_REQUEST['User'];
	$password = $_REQUEST['Pass'];
	if (verifyPassword($username, $password) == false)
	{
		include 'views/login.php';
	}
	else
	{
		$user = getUserFromUsername($username);
		// SAVE USER
		$_SESSION['Username'] = $user['Username'];
		$_SESSION['Password'] = $user['Password'];
		$_SESSION['FirstName'] = $user['FirstName'];
		$_SESSION['LastName'] = $user['LastName'];
		$_SESSION['Company'] = $user['Company'];
		$_SESSION['userHash'] = hash('haval256,4', 'The quick brown fox jumped over the lazy dog.') . hash('ripemd320', $username . $password) ;
		include 'views/dashboard.php';
	}
	break;

	// CREATE ACCOUNT
	case 'createAccount':
	require_once 'models/users.php';
	include 'views/createAccount.php';
	break;

	case 'addAccount':
	require_once 'models/addAccount.php';
	require_once 'models/addAccount.php';
	if(validateNewUser($_REQUEST) === true) {
		addUser($_REQUEST);
		include 'views/dashboard.php';
	} else {
		$error = "Please fill out the required fields indicated with *";
		include 'views/createAccount.php';
	}
	break;

	// FORGOT PASSWORD
	case 'forgotPassword':
	require_once 'models/forgotPassword.php';
	include 'views/forgotpassword.php';
	break;

	// RESET PASSWORD
	case 'resetPassword':
	require_once 'models/forgotPassword.php';
	$email = $_REQUEST['email'];
	$_SESSION['Email'] = $email;	
	if (getUserfromEmail($_SESSION['Email']) == "") {
		include 'views/forgotPassword.php';
		echo 'false';
		echo $_SESSION['Email'];
	} else {
		$question = askSecurityQuestion($email);
		$_SESSION['question'] = $question['question'];
		$_SESSION['correctAnswer'] = $question['answer'];
		include 'views/securityQuestions.php';
		print_r($question);
	}
	break;

	case 'passwordReset':
	require_once 'models/forgotPassword.php';
	$userAnswer = $_REQUEST['userAnswer'];
	$correctAnswer = $_SESSION['correctAnswer'];
	if(verifyAnswer($userAnswer, $correctAnswer) == false) {
		include 'views/securityQuestions.php';
	} else {
		include 'views/passwordReset.php';
	}
	break;

	case 'validateNewPassword':
	require_once 'models/forgotPassword.php';
	$password1 = $_REQUEST['password1'];
	$password2 = $_REQUEST['password2'];
	if($password1 === $password2) {
		updatePassword($_SESSION['Email'], $password1);
		include 'views/dashboard.php';
	} else {
		include 'views/passwordReset.php';	
	}
	break;

	// DASHBOARD
	case 'dashboard':
	require_once 'models/login.php';
	require_once 'models/dashboard.php';
	if (verifyPassword($_SESSION['Username'], $_SESSION['Password']))
	{
		include 'views/login.php';
	}
	else
	{
		$user = getUserFromUsername();
		include 'views/dashboard.php';
	}
	break;

	// LOGOUT
	case 'logOut':
	session_destroy();
	include 'views/login.php';
	break;

	// UNKNOWN ACTION
	default:
		$error = "Unknown request: $action";
		include 'views/errors.php';
	break;
}

