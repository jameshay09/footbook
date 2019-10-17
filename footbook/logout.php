<?php 
require ('config.inc.php'); 
$page_title = 'Logout Page';

//1 - include the header file
include "header.html";


//2 - 

if (!isset($_SESSION['first_name'])){
	
	$url = BASE_URL . 'index.php';
	ob_end_clean();
	header("Location: $url");
	exit();
	
} else {
	
	$_SESSION = array();
	session_destroy();
	setcookie (session_name(), '', time()-3600); 
		
	
}

echo '<h3>Your are now logged out!</h3>';

//3 - include the header file

include "footer.html";

?>