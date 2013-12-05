<?php
	require 'includes/dbconnection.inc.php';

	if (isset($_POST['username']) && isset($_POST['password'])) {
	 	$loginemail = isset($_POST['loginemail']);
	 	$loginpass =	isset($_POST['loginpass']);

	 	$loginpass = md5($loginpass);


	 		$query = "SELECT 'email', 'password'
	 			FROM 'customers'
	 			WHERE 'email'='$loginemail'
	 			AND 'password' = '$loginpass'";


	 			if ($query) {
	 				$new_query = mysqli_query($dbconnect, $query);

	 				if ($new_query==0) {

	 					echo "Entered invalid username or password.";
	 				}
	 			}
	 }
 ?>