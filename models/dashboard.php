<?php 

	function get_title($company) {
		if(isset($company) || $company !== "") {
			return $company;
		} else {
			return $pageTitle;
		}
	}

?>