<?php
@ini_set('display_errors', 'on');
// error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL);

function jsonize($a) {
	$a = preg_replace('/(,|\{)[ \t\n]*(\w+)[ ]*:[ ]*/','$1"$2":',$a);
	// $a = preg_replace('/":\'?([^\[\]\{\}]*?)\'?[ \n\t]*(,"|\}$|\]$|\}\]|\]\}|\}|\])/','":"$1"$2',$a);
	return $a;
    // return json_decode(sprintf('{%s}', $s));
}

$url = 'http://a0.awsstatic.com/pricing/1/ec2/linux-od.min.js';
$str = file_get_contents($url);
preg_match ('/callback\((.*)\)/', $str , $matches);

$str = jsonize($matches[1]);
$prices = json_decode($str, true);

print_r($prices);
// echo $str;
// $str = "This (is a test) string";
// $arr = preg_grep("/ing/", $str);
// print_r($matches);
// $str = $matches[1];
// $matches[1] = utf8_encode($matches[1]); 

// echo $matches[1];
// $prices = json_decode($matches[1], true);


// $str =  file_get_contents('json.txt');

// $prices = json_decode($str, true);

switch (json_last_error()) {
	case JSON_ERROR_NONE:
		echo ' - No errors';
	break;
	case JSON_ERROR_DEPTH:
		echo ' - Maximum stack depth exceeded';
	break;
	case JSON_ERROR_STATE_MISMATCH:
		echo ' - Underflow or the modes mismatch';
	break;
	case JSON_ERROR_CTRL_CHAR:
		echo ' - Unexpected control character found';
	break;
	case JSON_ERROR_SYNTAX:
		echo ' - Syntax error, malformed JSON';
	break;
	case JSON_ERROR_UTF8:
		echo ' - Malformed UTF-8 characters, possibly incorrectly encoded';
	break;
	default:
		echo ' - Unknown error';
	break;

}

// echo json_last_error_msg();
// print_r($matches);
// var_dump($prices);
// echo "here";
?>
