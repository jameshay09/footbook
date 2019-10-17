<?php
define('LIVE', FALSE);


define('EMAIL', '27250139@nescol.ac.uk'); //Enter Your Email


define ('BASE_URL', 'http://jameshay.altervista.org/dgc/'); //Link to your Root url


define ('MYSQL', 'mysqlconnect.php'); //Link to your mysqlconnect file


date_default_timezone_set ('Europe/London');


function my_error_handler ($e_number, $e_message, $e_file, $e_line, $e_vars) {

	
	$message = "An error occurred in script '$e_file' on line $e_line: $e_message\n";
	
	
	$message .= "Date/Time: " . date('n-j-Y H:i:s') . "\n";
	
	if (!LIVE) { 
		echo '<div class="error">' . nl2br($message);
	
		
		echo '<pre>' . print_r ($e_vars, 1) . "\n";
		debug_print_backtrace();
		echo '</pre></div>';
		
	} else { 

		
		$body = $message . "\n" . print_r ($e_vars, 1);
		mail(EMAIL, 'Site Error!', $body, 'From: email@example.com');
	
		
		if ($e_number != E_NOTICE) {
			echo '<div class="error">A system error occurred. We apologize for the inconvenience.</div><br />';
		}
	}

} 
set_error_handler ('my_error_handler');

