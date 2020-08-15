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
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
		<title>ログイン</title>
		</head>
		<body>
		<div class="container-fluid" style="background-color:silver">
		<div class="row">
		<div class="col-lg-2 order-lg-1" style="padding:0;background-color:silver">
			<table class="table">
				<thead class="thead-dark">
					<tr>
						<th>現在の教材</th>
					</tr>
				</thead>
				<tbody>

					<tr>
						<td>
							<li><a href="../index.html">トップページ</a></li>
						</td>
					</tr>

					<tr>
						<td>
							<li><a href="/gameon/gamemenu.php">RPG</a></li>
						</td>
					</tr>
					<tr>
						<td>
							<li><a href="#">ガチャ</a></li>
						</td>
					</tr>
					<tr>
						<td>
							<li><a href="/sampleq/sample_slot.php">スロット</a></li>
						</td>
					</tr>
					<thead class="thead-dark">
						<tr>
							<th>ふわふわふわりんについて</th>
						</tr>
					</thead>
				<tbody>
					<tr>
						<td>
							<li><a href="index.html">活動</a></li>
						</td>
					</tr>
					<tr>
						<td>
							<li><a href="picture.html">写真集</a></li>
						</td>
					</tr>
					<tr>
						<td>
							<li><a href="index.html">助手募集</a></li>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-lg-10 order-lg-2">

			<div id="content"style="height:1024px">
		<div id="input">
		<h1>ログイン</h1>
		<span class="error"><?php echo $errorMessage ?></span>
		<form method="post" action="login_chk.php">
		<table>
		<tr><th>ユーザID:</th><td colspan="2"><input type="text" name="id" size="12"></td></tr>
		<tr><th>パスワード:</th><td><input type="password" name="password" size="20"></td><td><input id="submit_button" type="submit" value="ログイン"></td></tr>
		</table>
		</form>
		</div>
		</div>
		</div>
		</div>
		</body>
		</html>
