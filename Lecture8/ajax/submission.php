<?php
	/*
		*Write your logic to manage the data
		*like storing data in database
	*/

	// POST data
	$data['firstName'] = $_POST['firstName'];
	$data['lastName'] = $_POST['lastName'];
	$data['email'] = $_POST['email'];
	$data['message'] = $_POST['message'];

	echo json_encode($data);
	exit;
?>	