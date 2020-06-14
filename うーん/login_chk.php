<?php
	require_once('db.inc');
	ini_set('display_errors',"On");
	//セッション開始
	session_start();

	//入力された値を取得
	$id = $_POST['id'];
	$passwrd = $_POST['password'];
	//DBに接続
	$mysqli = new mysqli($dbserver, $dbuser, $passwd, $dbname);
	
	$stmt = $mysqli->prepare("select name from user where id=?");

	//パラメータをバインド
	$stmt->bind_param("s",$id);

	//SQL文を実行
	$stmt->execute();
	
	//結果をバインドして取得
	$stmt->bind_result($name);
	$stmt->fetch();
	$_SESSION['name']=$name;
	$stmt->close();
	
	//SQL文を準備(パラメタ部は「？」とする)
	$stmt = $mysqli->prepare("select password from user where id=?");

	//パラメータをバインド
	$stmt->bind_param("s",$id);

	//SQL文を実行
	$stmt->execute();
	
	//結果をバインドして取得
	$stmt->bind_result($password);
	$stmt->fetch();
	$stmt->close();
	
	//パスワードが正しければメニューに飛ばす
	if($passwrd == $password){
		$_SESSION['id'] = $id;

		$stmt = $mysqli->prepare("select img from user where id=?");

		//パラメータをバインド
		$stmt->bind_param("s",$_SESSION['id']);

		//SQL文を実行
		$stmt->execute();
	
		//結果をバインドして取得
		$stmt->bind_result($img);
		$stmt->fetch();

		$_SESSION['img']=$img;

		header('Location: hitokoto.php');
		}
		
	//見つからなかったまたはパスワードが違ったらログインページに戻す
	else{
	$_SESSION[id] =''; 
	header('Location: login.php?err=1');
	}
	$stmt->close();
	$mysqli->close();
?>
