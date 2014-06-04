<?php
// include_once 'prepend.php';

$groups['1'][] = 'A';
$groups['1'][] = 'E';
$groups['1'][] = 'I';
$groups['1'][] = 'O';
$groups['1'][] = 'U';

$groups['2'][] = 'B';
$groups['2'][] = 'C';
$groups['2'][] = 'D';


// echo var_dump($_POST);
$group = $_POST['group'];
// echo $groups[$_POST['group']];
foreach($groups[$group] as $val){
	echo $val."<br />";
}
?>
