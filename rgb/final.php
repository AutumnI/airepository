<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

	#Grab the numbers and operation
	$r = $_GET['r'];
	$g = $_GET['g'];
	$b = $_GET['b'];
	
	
	# Validate the input
	if (is_numeric($r) && is_numeric($g) && is_numeric($b)) {
		echo ($r . ',' . $g . ',' . $b);
	}
	else{
		http_response_code(400);
		exit();
	}
}else{
	http_response_code(405);
	exit();
}
?>
