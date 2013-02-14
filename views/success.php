<?php 

if(!isset($_SESSION)) {
     session_start();
}

$_SESSION['PHPSESSID'] = $_REQUEST['PHPSESSID'];
$SESSID = $_SESSION['PHPSESSID'];


if($SESSID) {
	echo $SESSID . $brw;
}
echo $firstName;
if($_REQUEST) {
	echo '<pre>';
	print_r($_REQUEST);
	echo '</pre>';
	echo 'success';
} else {
	echo 'error';
}

 ?>