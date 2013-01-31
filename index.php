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
	include 'views/view-login.php';
	break;

	case 'validateLogin':
	require 'model-login.php';
	$username = $_REQUEST['User'];
	$password = $_REQUEST['Pass'];
	if (verifyPassword($username,$password))
	{
		include 'views/view-login.php';
	}
	else
	{
		include 'views/view-login.php';
	}
	break;

	default:
		$error = 'Unknown action: $action';
		include('view-error.php');
endswitch;

