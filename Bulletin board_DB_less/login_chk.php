<?php
	session_start();
	
	$error_message = "";
	
	if(isset($_POST["login"])) {
	
		if($_POST["id"] == "user01" && $_POST["password"] == "pass01") {
	
			$_SESSION["user_name"] = $_POST["user_name"];
	
			$login_success_url = "hitokoto.php";
	
			header("Location: {$login_success_url}");

			exit;
	
		}else if($_POST["id"] == "user02" && $_POST["password"] == "pass02") {
	
			$_SESSION["user_name"] = $_POST["user_name"];
	
			$login_success_url = "hitokoto.php";
	
			header("Location: {$login_success_url}");

			exit;
	
		}else if($_POST["id"] == "user03" && $_POST["password"] == "pass03") {
	
			$_SESSION["user_name"] = $_POST["user_name"];
	
			$login_success_url = "hitokoto.php";
	
			header("Location: {$login_success_url}");

			exit;
	
		}
	
	$error_message = "※ID、もしくはパスワードが間違っています。<br>　もう一度入力して下さい。";
	
	}
	
	
?>
