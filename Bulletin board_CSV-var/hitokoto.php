<?php
	require_once('db.inc');
	date_default_timezone_set('Asia/Tokyo');
	session_start();
	//ログインユーザ情報を取得
	$id = $_SESSION['id'];
	$name = $_SESSION['id'];
	$img = $_SESSION['img'];
	$date=date('Y-m-d H:i:s');

	//ログインしていない場合はログインページに飛ばす
	if($id == ''){
		header("HTTP/1.1 301 Moved Permanently");
		header("Location: login.php");
		exit(0);
	}
	$sql = "UPDATE user SET
	lastlogin = cast('$date' as datetime) where id='$id'";
?>
<html>
<head>
	<meta charset="utf8">
	<link rel="stylesheet" href="css/default.css" type="text/css">
	<script src="script/jquery-3.1.0.min.js"></script>
 <script>
        function check() {
            var getText = document.form.message.value;
            if (getText.length <= 0) {
                alert("コメント欄に内容を入力してください");
            } else if(getText.length >=140){
                alert("コメント欄の内容が上限(140文字)を超えています");
            }
        }
    </script>
</head>
<body>
<div id="input">
<h1>一言掲示板</h1>
<p class="comment"><?php print($name);?>さん、こんにちは！<a href="mypage.php?id=<?php echo $id ?>">マイページ</a>　<a href="logout.php">ログアウト</a></p>
<form name="message" action="output_csv.php"method="post">
<dl>
<dt class="comment">コメント</dt>
<dd>
<textarea name="message" maxlength="140" cols="50" rows="1" id="message" ></textarea>
</dd>
</dl>
<input type="submit" value="投稿する" onClick='check()'/>
</form>
</div>
<div id="view">
<h1>投稿一覧</h1>
<div id="detail">
 <?php
 //読み込み用にtest.csvを開く
$f=fopen("./hitokoto.csv","r");
//hitokoto.csvを1行ずつ読み込み
while($line=fgetcsv($f)){
//読み込み結果表示
var_dump($line);
}
//test.csvを閉じる
fclose($f);
 ?>
 <dt>
 <p><a href="mypage.php?id=<?php echo $row['id'] ?>"><img src=.\image\<?php echo $row['img'];?> width="75" height="75" id='img' align="left" ></a><strong><?php echo htmlspecialchars($row['name'],ENT_QUOTES,'UTF-8');?>さん <?php echo htmlspecialchars($row['date'],ENT_QUOTES,'UTF-8');?> </strong>
 <br><br><?php echo htmlspecialchars($row['msg'],ENT_QUOTES,'UTF-8');?></p>
 </dt>
 <?php 
 if($_SESSION['id']==$row['id']){
 ?>
 <a href="delete.php?id=<?php echo htmlspecialchars($row['seqno']);?>">削除</a>
 <?php }?>
</div>
</div>
</body>
</html>