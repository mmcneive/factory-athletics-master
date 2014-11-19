<?php
 
	set_error_handler("custom_warning_handler", E_WARNING);

	function custom_warning_handler($errno, $errstr, $errfile, $errline) {
    if ( 0 == error_reporting () ) {         // Error reporting is currently turned off or suppressed with @
      return;
    }
    foreach($_REQUEST as $key => $val ){
    	$extrainfo .= "\n\n$key = $val ";
    }
    wp_mail(ADMINEMAIL, 'Factory Athletics Warning: Development', "\n\n$errstr \n\nFile: $errfile \n\nLine: $errline $extrainfo");
	}

	function custom_error_handler($query) {
		wp_mail(ADMINEMAIL, 'Factory Athletics: Development', "Query = ".$query."\n\nError = ".mysql_error()."\n\nRequestURI=".$_SERVER['REQUEST_URI']);
	}

  function custom_notification_handler($msg) {
    wp_mail(ADMINEMAIL, 'Cali Tortilla Notification: Production', 
      "Message = ".$msg."\n\nRequestURI=".$_SERVER['REQUEST_URI'].
      "\n\nREMOTE_HOST=".$_SERVER['REMOTE_HOST'].
      "\n\nHTTP_CLIENT_IP=".$_SERVER['HTTP_CLIENT_IP'].
      "\n\nHTTP_X_FORWARDED_FOR=".$_SERVER['HTTP_X_FORWARDED_FOR'].
      "\n\nREMOTE_ADDR=".$_SERVER['REMOTE_ADDR'].
      "\n\n GET = ".var_export($_GET,TRUE).
      "\n\n POST = ".var_export($_POST,TRUE));
      //"\n\n REQUEST = ".var_export($_REQUEST,TRUE));
  }
?>