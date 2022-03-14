<?php
	if (isset($_POST)) {
		// code...
		$captcha_cookie = $_COOKIE['captcha'];
		$captcha_user = $_POST['captcha'];

		if($captcha_cookie == $captcha_user){
			echo "Captcha Correcto";
			setcookie("captcha", "", time()-3600);
		}
	}
?>
