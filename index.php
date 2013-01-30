<?php 
session_start();

require('model-users.php');

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
	include 'login.php';
	break;

	default:
		$error = 'Unknown action: $action';
		include('view-error.php');
endswitch;

php php_info(); ?>