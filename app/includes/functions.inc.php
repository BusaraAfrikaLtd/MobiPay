<?php 
	//This is a file with all basic functions for my app.


/*
	//Function for controlling escaping of characters.
	function mysql_ecape($value){
		$magic_quotes_active = get
	}*/


	//Function for redirecting a page.
	function redirect($path = NULL){
		if ($path != NULL) {
			header("Location: {$path}");
			exit;
		}
		 
	}
	
	//Function for login validation
	function email_exists($email){
		$query = mysqli_query("SELECT COUNT('customer_id') FROM 'customers' WHERE 'email' = '$email'");
	}
 ?>