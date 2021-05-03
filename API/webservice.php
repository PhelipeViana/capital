<?php 

include "../_conect.php";


if ($METHOD=='POST') {

	switch ($AUTH) {

		case 1:
		echo json_encode(['msg'=>'1']);

		break;

		default:
		echo json_encode(['msg'=>'noK']);
		break;

	}
}else{
	echo json_encode(['msg'=>'Error Method']);
	
}