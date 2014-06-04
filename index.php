<?php
include_once 'prepend.php';

$db->debug = true;

$sql = "select count(*) from user ";
$rs = $db->getOne($sql);
// print_r($rs);

$id = $rs+1;
$sql = "insert into user set id=?, username=?, password=?, email=? ";
$param = array($id, 'test'.$id, 'pass'.$id, 'test'.$id.'@example.com');

$db->execution = false;
$db->execute($sql, $param);
?>
