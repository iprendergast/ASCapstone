<?php
	

	$page = strtolower(basename($_SERVER["SCRIPT_NAME"]), '.php');

	switch ($page)
{
	case 'view-login.php': 
		$title ='Login '; 
		$stylesheet ="login.css";
	break;

	case 'view-forgot_password.php': 
		$title = 'Password Recovery'; 
		$stylesheet="forgot_password.css";
	break;
	
	case 'index.php': 
		$title = 'Home'; 
		$stylesheet="main.css";
	break;

	default: 
		$title = ''; 
		$stylesheet = '';
	break;

}
?>


<html>
<head>
	<title><?php echo $title; ?></title>

	<link rel="stylesheet" type="text/css" href=<?php echo ' "views/css/'.$stylesheet.'"'; ?>/>
	<link rel="stylesheet" type="text/css" href="views/css/reset.css">
	<link rel="stylesheet" type="text/css" href="views/css/master.css">
</head>
<body>
