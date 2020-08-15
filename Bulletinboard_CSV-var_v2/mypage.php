<?php

	date_default_timezone_set('Asia/Tokyo');
	session_start();

	//ログインユーザ情報を取得
	$id = $_GET['id'];

	//ログインしていない場合はログインページに飛ばす
	if($id == ''){
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: login.php");
		exit(0);
	}else{
	//csv読み込み
	//そのユーザのパスワードと電話番号の行を抽出
		$f = fopen("User.csv", "r");
		while($line = fgetcsv($f)){
			if(isset($line[2])){
			if($line[2]===$id){
			$tel = $line[4];
			$birth = $line[3];
			$comment = $line[5];
			$num = $line[0];
			}
		}
		}
}
fclose($f);?>
<?php
header('Content-Type: text/html; charset=UTF-8');
?>

<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="css/default.css" type="text/css">
	<link rel="stylesheet" href="../css/bootstrap.css" type="text/css">
	<script src="script/jquery-3.1.0.min.js"></script>
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
<div id="mypage">
<h2 style="color:white">マイページ</h2>
<p class="comment"><a href="hitokoto.php">←戻る</a>
　　　　　   　　　　　　　　　　　　　　　　　　<a href="logout.php">ログアウト</a></p>
<div id="mypage2">
<p><img src="./image/icon<?php echo ($num)?>.png" width="100" height="100"><br>
<strong><?php print($id);?>さん</strong>
電話番号:<?php print($tel);?><br />
誕生日:<?php print($birth);?><br />
自己紹介:<?php print($comment)?>



</p>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>