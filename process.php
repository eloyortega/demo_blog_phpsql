<?php

//print_r( $_POST );
//echo '<br><br>';
//echo $_POST['title'];
//echo '<br><br>';
//echo $_POST['cat'];
//echo '<br><br>';
//echo $_POST['article'];

$jsondata = file_get_contents('data.json');
$jsondata = json_decode($jsondata, true);

array_unshift($jsondata, $_POST);

$jsondata = json_encode($jsondata);
file_put_contents('data.json', $jsondata);

$t = 'robssis@gmail.com';
$s = 'New Article Generated';
$m = 'Someone wrote an article. These are the details: '.$_POST['article'];
$h = 'From: rob@gmail.com' . "\r\n" .
	'Reply-To: rob@gmail.com' . "\r\n" .
	'X-Mailer: PHP/' . phpversion();

mail( $t, $s, $m, $h );

header('location:index.php');

?>