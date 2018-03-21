<?php

require 'functions/crud.php';
require 'functions/sessions.php';

$filename = $_FILES['upload_image']['name'];
$tempFileName = $_FILES['upload_image']['tmp_name'];
$fileType = $_FILES['upload_image']['type'];
$ext = explode('.', $filename);
$fileExt = strtolower(end($ext));

$allowed = ['jpg', 'jpeg', 'png', 'gif'];

if(in_array($fileExt, $allowed)) {

	$storedFileName = $ext[0]. '_'.time().'.'.$fileExt;

	$storePath = __DIR__ . '/public/uploads/' . $storedFileName;

	move_uploaded_file($tempFileName, $storePath);

	$data = [
				'file_name' => $storedFileName,
				'created_at' => date("Y-m-d H:i:s"),
				'user_id' =>  get_session('uid')
			];

	$uploaded = insert('uploads',$data);

	if($uploaded) {

		$success = ['success' => true];

		echo json_encode($success);

	} else {

		$success= ['success' => false];

		echo json_encode($success);
	}

} else {

	$success = ['success' => false];

	echo json_encode($success);
}

?>