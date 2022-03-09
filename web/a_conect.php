<?php
if (isset($_SERVER['HTTPS'])) {
	if ($_SERVER['HTTPS'] != 'on') {		
		header('Location: https://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']); 		
	}
}
?>