<?php
session_start();
require_once('db.inc');
$mysqli = new mysqli($dbserver, $dbuser, $passwd, $dbname);
if(isset($_SESSION['id'])){
$id = $_REQUEST['id'];
$sql = "select * from msg where seqno=$id";
$stmt=$mysqli->query($sql);
$table = mysqli_fetch_assoc($stmt);
if($table['id']==$_SESSION['id']){
    $sql = "delete from msg where seqno=$id";
    $stmt=$mysqli->query($sql);
}
}
header('Location: hitokoto.php');
exit();
?>