<?php
	$errorMessage = "";
	if(@$_GET['err'] == '1'){
		$errorMessage = "ＩＤまたはパスワードが違います<br>";
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/default.css" type="text/css">
	<title>ログイン</title>
</head>
<body>
<div id="input">
<h1>ログイン</h1>
<span class="error"><?php echo $errorMessage ?></span>
<form method="post" action="login_chk.php">
<table>
<tr><th>ユーザID:</th><td colspan="2"><input type="text" name="id" size="12"></td></tr>
<tr><th>パスワード:</th><td><input type="password" name="password" size="20" maxlength="16"></td><td><input id="submit_button" type="submit" value="ログイン"></td></tr>
</table>
</form>
</div>
</body>
</html>
