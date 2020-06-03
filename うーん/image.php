<?php
require_once('db.inc');
$mysqli = new mysqli($dbserver, $dbuser, $passwd, $dbname);
if ($mysqli->connect_error) {
    echo $mysqli->connect_error;
    exit();
} else {
    $mysqli->set_charset("utf8");
}

$id = $_GET['id'];
echo $id;
?>