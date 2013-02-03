<?php 
session_start();

require('models/model-users.php');

if (isset($_REQUEST['action']))
{
	$action = $_REQUEST['action'];
}
else
{
	$action = 'login'; // default page
}

switch ($action):
	case 'login':
	require 'models/model-login.php';
	// check session to see if there is an existing userID,
	// if there is it will set $user to the user record for that user
	if (isset($_SESSION['userID']))
	{
		$userID = $_SESSION['userID'];	
		$user = getUserFromUserID($userID);
	}
	include 'views/view-login.php';
	break;

	case 'validateLogin':
	require 'models/model-login.php';
	$username = $_REQUEST['User'];
	$password = $_REQUEST['Pass'];
	//returns true if username is found and password matches record
	if (verifyPassword($username,$password))
	{
		
		$_SESSION['userID'] = $userID;
		$_SESSION['authenticated'] = true;

		include 'views/view-login.php';
	}
	else
	{
		include 'views/view-login.php';
	}
	break;

	case 'addComment':
		require'model-comments.php';
		// need to add a comment to commentDetail table
		
		break;

	default:
		$error = 'Unknown action: $action';
		include('view-error.php');
endswitch;

