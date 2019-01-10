<?php
	header('Access-Control-Allow-Origin:*');
	header('Access-Control-Allow-Headers:Content-Type');
	$str = file_get_contents("php://input");
	$data = json_decode($str, true);
	if($data['userName'] == '123' && $data['passWord'] == '123') {
		echo '{"message": "success"}';
	}

?>