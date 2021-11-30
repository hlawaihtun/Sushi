<?php
	$name = $_POST['edit_name'];
	$price = $_POST['edit_price'];
	

	$id =  $_POST['edit_id'];
	$oldprofile = $_POST['edit_oldprofile'];

	$newprofile = $_FILES['edit_newprofile'];
	$newprofilename = $newprofile['name'];

	echo "ID =>".$id."<br>".
		"Name =>".$name."<br>".
		"Price =>".$price."<br>".
		"Old Profile Link =>".$oldprofile."<br>".
		"New Profile =>".$newprofilename."<br>";


		if($newprofile['size']>0){
			// upload file
		$basepath = "photo/";
		//photo/one.jpg
		$fullpath = $basepath.$newprofilename;
		move_uploaded_file($newprofile['tmp_name'], $fullpath);
		}
		else{
			$fullpath = $oldprofile;
		}

		$menu = array(
		"name"=> $name,
		"price"=> $price,
		"profile" => $fullpath,
		);


		//get jsonData from jsonfile
	$jsonData = file_get_contents('menulist.json');

	if(!$jsonData){
		$jsonData = '[]';
	}

	//convert into array from json

	$data_arr = json_decode($jsonData);

	/*update list*/
	$data_arr[$id] = $menu;

	$jsonData = json_encode($data_arr,JSON_PRETTY_PRINT);

	file_put_contents('menulist.json', $jsonData);
	header("location:menu.php");


?>