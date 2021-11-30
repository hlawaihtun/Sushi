<?php
	
	$name = $_POST['name'];
	$price = $_POST['price'];
	$profile = $_FILES['profile'];

	$profilename = $profile['name'];

	// upload file
	$basepath = "photo/";
	//photo/one.jpg
	$fullpath = $basepath.$profilename;
	move_uploaded_file($profile['tmp_name'], $fullpath);

	$menu = array(
		"name" => $name,
		"price" => $price,
		"profile" => $fullpath,
	);

	//get jsonData from jsonfile
	$jsonData = file_get_contents('menulist.json');
	if(!$jsonData){
		$jsonData = '[]';
	}

	//convert into array from json
	$data_arr = json_decode($jsonData);
	array_push($data_arr, $menu);

	$jsonData = json_encode($data_arr,JSON_PRETTY_PRINT);

	file_put_contents('menulist.json', $jsonData);
	header("location:menu.php");


?>