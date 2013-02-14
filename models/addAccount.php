<?php 

	function validateNewUser($user) {
		if(is_array($user)) {
		   	if(	$user['FirstName'] === "" ||
		   		$user['LastName'] === "" ||
		   		$user['Company'] === "" ||
		   		$user['Company'] === "" ||
		   		$user['Street'] === "" ||
		   		$user['City'] === "" ||
		   		$user['State'] === "" ||
		   		$user['Zip'] === "" ||
		   		$user['Phone'] === "" ||
		   		$user['Email'] === "" ||
		   		$user['Username'] === "" ||
		   		$user['DOB'] === "" ||
		   		$user['Password'] === ""
		   	){
		    	return false;
		    } else {

		    	return true;
		    }
		}
	}

 ?>