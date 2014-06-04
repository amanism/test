<?php
@ini_set('display_errors', 'on');
error_reporting(E_ALL ^ E_NOTICE);

session_start();

include_once 'config.php';
// include_once _LIB_PATH.'/fun.php';
include_once _ADODB;
include_once _SMARTY;

// $dsn = "odbc://mob:mob123@afrc/afrc";
// $dsn = "odbc://mob:mob123@afrcdb/afrc";
// $dsn = "odbc://norgan:norgan123@afrc/afrc";
// $dsn = "mysql://root:@localhost/ft?persist";

$ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
$db = ADONewConnection($dsn);
if (!$db) die("Connection failed");

$sql="set names utf8 ";
$db->Execute($sql);

/*
$dsn = "mysqli://root:o3network@localhost/chat";
$db2 = ADONewConnection($dsn);
if (!$db2) die("Connection failed");
*/

foreach($_POST as $key => $value)
	$$key = is_array($value) ? $value : trim($value);

foreach($_GET as $key => $value)
	$$key = is_array($value) ? $value : trim($value);

//$page = array_pop(explode("/",__FILE__));
$page = array_pop(explode("/",$_SERVER['SCRIPT_FILENAME']));
if((!isset($_SESSION['user'])) && $route != "login"){
	echo "<script language='javascript'>";
	echo "window.parent.location = 'index.php?route=login' ";
	echo "</script>";
}

$smarty = new Smarty;
// var_dump($smarty->getTemplateDir());
// var_dump($smarty->getCompileDir());
// $smarty->setTemplateDir('./view/templates');
// $smarty->setTemplateDir('/Library/WebServer/Documents/putin/admin/view/templates');
// $smarty->setCompileDir('/Library/WebServer/Documents/putin/admin/view/templates_c');
// var_dump($smarty->getTemplateDir());
// $smarty->setTemplateDir('./view/temaptles/');
/*
$tpl->setTemplateDir('./view/templates');
$tpl->setCompileDir('./view/templates_c');
*/

$tpl_name = str_replace('.php','.tpl',str_replace(_ROOT.'/','',$_SERVER['SCRIPT_FILENAME']));

/*
$funcs['01']['01'] = '主題管理';
$funcs['01']['02'] = '聊天室管理';
$funcs['01']['03'] = '回答題庫設定';
$funcs['01']['04'] = '聊天室統計';

$funcs['02']['01'] = '問卷分類管理';
$funcs['02']['02'] = '問卷管理';
$funcs['02']['03'] = '回傳問卷管理';

$funcs['03']['01'] = '系統群組管理';
$funcs['03']['02'] = '系統人員管理';
$funcs['03']['03'] = '聊天室人員管理';
// print_r($_SESSION['user']['perm']);
*/

/*
$menus['01'] = '聊天室管理';

$items['01']['01'] = array('name'=>'主題管理', 'url'=> 'topic_list.php');
$items['01']['02'] = array('name'=>'聊天室管理', 'url'=> 'chatroom_list.php');
$items['01']['03'] = array('name'=>'回答題庫設定', 'url'=> 'message_list.php');
$items['01']['04'] = array('name'=>'聊天室統計', 'url'=> 'chatroom_stats_list.php');

$menus['02'] = '問卷管理';
$items['02']['01'] = array('name'=>'問卷分類管理', 'url'=> 'questionary_category_list.php');
$items['02']['02'] = array('name'=>'問卷管理', 'url'=> 'questionary_list.php');
$items['02']['03'] = array('name'=>'回傳問卷管理', 'url'=> 'questionary_reply.php');

$menus['03'] = '系統管理';
$items['03']['01'] = array('name'=>'系統群組管理', 'url'=> 'group_list.php');
$items['03']['02'] = array('name'=>'系統人員管理', 'url'=> 'user_list.php');
$items['03']['03'] = array('name'=>'聊天室人員管理', 'url'=> 'chat_user_list.php');
$smarty->assign('menus',$menus);
$smarty->assign('items',$items);
*/
?>
