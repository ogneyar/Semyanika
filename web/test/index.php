<?
if (isset($_SERVER['HTTPS'])) {
	if ($_SERVER['HTTPS'] == 'on') {
		echo "HTTPS";
	}else {		
		//echo "HTTP\n\nhttps://".$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF'];
		header('Location: https://'.$_SERVER['SERVER_NAME'].$_SERVER['PHP_SELF']); 		
	}
}
?>