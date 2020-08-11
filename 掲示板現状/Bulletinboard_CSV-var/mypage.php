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
	}else if($id == 'admin'){
		alert("FLAG={You are an administrator}");
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
	<script src="script/jquery-3.1.0.min.js"></script>
</head>
<body>
<div id="mypage">
<h2>マイページ</h2>
<p class="comment"><a href="hitokoto.php">←戻る</a>
　　　　　   　　　　　　　　　　　　　　　　　　　<a href="logout.php">ログアウト</a></p>
<div id="mypage2">
<p><img src="./image/i_acg1_1.png" width="100" height="100"><br>
<strong><?php print($id);?>さん</strong>
電話番号:<?php print($tel);?><br />
誕生日:<?php print($birth);?><br />
自己紹介；<?php print($comment)?>



</p>
</div>
</div>
</body>
</html>