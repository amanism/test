<?php
// path parameters *********************************************
// abs path parameters **************************
define("_ROOT", "/var/www/mao/test");
define("_LIB_PATH", _ROOT."/lib");
// define("_CLASS_PATH", _ROOT."/classes");
define("_UTIL_PATH", _ROOT."/utils");
//define("_TPL_PATH", _ROOT."/templates");
define("_IMG_PATH", _ROOT."/image");

define("_ADODB", _LIB_PATH."/adodb518a/adodb.inc.php");
define("_SMARTY", _LIB_PATH."/Smarty-3.1.17/libs/Smarty.class.php");

// ref path parameters **************************
define("_URLROOT", "http://mao.o3.net/mao/test/");
// define("_URL", "http://".$_SERVER["HTTP_HOST"]);
define("_WEB_IMG_PATH", _URLROOT."/image");
//define("_JS_PATH", _URLROOT."/js");

define('_IMG_UPLOAD_PATH', "/var/www/mao/test/image");
// ref path parameters *********************************************

// db parameter **************
$dsn = "mysqli://root:o3network@localhost/test?persist";
//$dsn = "mysql://funkytail:funkytail@localhost/funkytail?persist";
//$dsn = "mysql://root:@localhost/ft?persist";
// $ADODB_FETCH_MODE = ADODB_FETCH_ASSOC;
// db parameter **************

date_default_timezone_set("Asia/Taipei");
?>
